<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
    namespace xixha\Http\Controllers; 
    use Illuminate\Http\Request;
    use xixha\Http\Requests;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\Support\Facades\input;
    use xixha\Http\Requests\VentaFormRequest;
    use xixha\Venta;
    use xixha\DetalleVenta;
    use DB;
    use Response;
    use Illuminate\Support\Collection;
/*
|--------------------------------------------------------------------------
| Controlador VentaController
|--------------------------------------------------------------------------
*/
class VentaController extends Controller{
    /*
    |--------------------------------------------------------------------------
    | Componente constructor
    |--------------------------------------------------------------------------
    | Crea una nueva instancia a middleware que verifica
    | los permisos del usuario en auth 
    */
    public function __construct(){
        $this->middleware('auth');
    } 
    /*
    |--------------------------------------------------------------------------
    | Componente index
    |--------------------------------------------------------------------------
    | Si request es true, realiza una consulta a la DB
    | regresando la vista index, con la consulta hecha por el usuario
    | y la instancia de referencia
    */
        public function index(Request $request){
            if ($request){
                $query = trim($request
                ->get('searchText'));
                $ventas = DB::table('venta as v')
                ->join('persona as p','v.idcliente','=','p.idpersona')
                ->join('detalle_venta as dv','v.idventa','=','dv.idventa')            
                ->select('v.idventa','v.fecha_hora','p.nombre','v.tipo_comprobante','v.serie_comprobante','v.num_comprobante','v.impuesto','v.estado','v.total_venta')
                ->where('v.serie_comprobante','LIKE','%'.$query.'%')
                ->where('v.estado','=','A')            
                ->orwhere('v.fecha_hora','LIKE','%'.$query.'%')
                ->where('v.estado','=','A')            
                ->orwhere('v.total_venta','LIKE','%'.$query.'%')
                ->where('v.estado','=','A')        
                ->orwhere('p.nombre','LIKE','%'.$query.'%')
                ->where('v.estado','=','A')            
                ->orwhere('v.tipo_comprobante','LIKE','%'.$query.'%')
                ->where('v.estado','=','A')            
                ->orwhere('v.num_comprobante','LIKE','%'.$query.'%')
                ->where('v.estado','=','A')           
                ->orderBy('v.idventa','desc')           
                ->groupBy('v.idventa','v.fecha_hora','p.nombre','v.tipo_comprobante','v.serie_comprobante','v.num_comprobante','v.impuesto','v.estado')
                ->paginate(5);
                return view('ventas.venta.index',["ventas"=>$ventas,"searchText"=>$query]);
            }
        }
    /*
    |--------------------------------------------------------------------------
    | Componente create
    |--------------------------------------------------------------------------
    | Regresa la vista de create al usuario cuando es llamado por el route
    | 
    */
        public function create(){
            $personas = DB::table('persona')
            ->where('tipo_persona','=','cliente')
            ->get();
            $articulos = DB::table('articulo as art')
            ->join('detalle_ingreso as di','art.idarticulo','=','di.idarticulo')        
            ->select(DB::raw('CONCAT(art.codigo, " ",art.nombre) AS articulo'),'art.idarticulo','art.stock',DB::raw('avg(di.precio_venta) as precio_promedio'))
            ->where('art.estado','=','Activo')
            ->where('art.stock','>','0')
            ->groupBy('articulo','art.idarticulo','art.stock')
            ->get();
            return view("ventas.venta.create",["personas"=>$personas,"articulos"=>$articulos]);
        }
    /*
    |--------------------------------------------------------------------------
    | Componente store
    |--------------------------------------------------------------------------
    | EL componente almacena guarda los cambios realizado en el componente create
    | y lo redirecciona a la vista ventas/venta, realizando una Transaction
    | a la consulta a procesar
    |
    */   
        public function store(VentaFormRequest $request){
            try{
                DB::beginTransaction();
                $venta = new Venta;
                $venta->idcliente=$request->get('idcliente');
                $venta->tipo_comprobante=$request->get('tipo_comprobante');
                $venta->serie_comprobante=$request->get('serie_comprobante');
                $venta->num_comprobante=$request->get('num_comprobante');
                $venta->total_venta=$request->get('total_venta');            
                $venta->fecha_hora = $mytime->toDateTimeString();
                $venta->impuesto = '16';
                $venta->estado ='A';
                $venta->save();
                $idarticulo = $request->get('idarticulo');
                $cantidad = $request->get('cantidad');
                $descuento = $request->get('descuento');
                $precio_venta = $request->get('precio_venta');
                $cont = 0;
                while ($cont < count($idarticulo)){
                    $detalle = new DetalleVenta();
                    $detalle->idventa = $venta->idventa;
                    $detalle->idarticulo = $idarticulo[$cont];
                    $detalle->cantidad = $cantidad[$cont];
                    $detalle->descuento = $descuento[$cont];
                    $detalle->precio_venta = $precio_venta[$cont];
                    $detalle->save();
                    $cont = $cont+1;
                }
                DB::commit();

            }catch(\Exception $e){
                DB::roolback();
            }
            return Redirect::to('ventas/venta');
        }
    /*
    |--------------------------------------------------------------------------
    | Componente show
    |--------------------------------------------------------------------------
    | Regresa la vista show al usuario cuando es llamado por el route 
    |
    */
        public function show($id){
            $venta = DB::table('venta as v')
                ->join('persona as p','v.idcliente','=','p.idpersona')
                ->join('detalle_venta as dv','v.idventa','=','dv.idventa')
                ->select('v.idventa','v.fecha_hora','p.nombre','v.tipo_comprobante','v.serie_comprobante','v.num_comprobante','v.impuesto','v.estado','v.total_venta')
                ->where('v.idventa','=',$id)
                ->first();                        
            $detalles = DB::table('detalle_venta as d')
                ->join('articulo as a','d.idarticulo','=','a.idarticulo')
                ->select('a.nombre as articulo','d.cantidad','d.descuento','d.precio_venta')
                ->where('d.idventa','=',$id)
                ->get();
            return view("ventas.venta.show",["venta"=>$venta,"detalles"=>$detalles]);
        
        }
    /*
    |--------------------------------------------------------------------------
    | Componente destroy
    |--------------------------------------------------------------------------
    | EL componente destroy actualiza el estado estado a C
    | y lo redirecciona a la vista ventas/venta
    */ 
        public function destroy($id){
            $venta = Venta::findOrFail($id);
            $venta->estado = 'C';
            $venta->update();
            return Redirect::to('ventas/venta');
        }
}
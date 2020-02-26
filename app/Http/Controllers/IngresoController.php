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
    use Illuminate\Support\Facades\Input;
    use xixha\Http\Requests\IngresoFormRequest;
    use xixha\Ingreso;
    use xixha\DetalleIngreso;
    use DB;
    use Response;
    use Illuminate\Support\Collection;
    /*
    |--------------------------------------------------------------------------
    | Componente constructor
    |--------------------------------------------------------------------------
    | Crea una nueva instancia en middleware que verifica
    | los permisos del administrador en auth 
    */
        class IngresoController extends Controller{
            public function __construct(){
                $this->middleware('auth');    
            } 
    /*
    |--------------------------------------------------------------------------
    | Componente padrón
    |--------------------------------------------------------------------------
    | Si request es true, realiza una consulta a la DB, 
    | en donde combina las  tablas ingreso, persona, detalle_ingreso
    | regresando la vista, la consulta hecha por el usuario
    | y la instancia  
    */
        public function index(Request $request){
            if($request){
                $query = trim($request
                ->get('searchText'));
                $ingresos = DB::table('ingreso as i')
                ->join('persona as p','i.idproveedor','=','p.idpersona')
                ->join('detalle_ingreso as di','i.idingreso','=','di.idingreso')
                ->select('i.idingreso','i.fecha_hora','p.nombre','i.tipo_comprobante','i.serie_comprobante','i.num_comprobante','i.impuesto','i.estado', DB::raw('sum(di.cantidad*precio_compra) as total'))            
                ->where('i.num_comprobante','LIKE','%'.$query.'%')
                ->where('i.estado','=','A')
                ->where('i.serie_comprobante','LIKE','%'.$query.'%')
                ->where('i.estado','=','A')
                ->orwhere('p.nombre','LIKE','%'.$query.'%')
                ->where('i.estado','=','A')
                ->orderBy('i.idingreso','desc')
                ->groupBy('i.idingreso','i.fecha_hora','p.nombre','i.tipo_comprobante','i.serie_comprobante','i.num_comprobante','i.impuesto','i.estado')
                ->paginate(5);
                return view('compras.ingreso.index',['ingresos'=>$ingresos,'searchText'=>$query]);
            }
        }
    /*
    |--------------------------------------------------------------------------
    | Componente create
    |--------------------------------------------------------------------------
    | Regresa la vista de create al usuario y dos datos de referencia
    | 
    */
        public function create(){
            $personas = DB::table('persona')
            ->where('tipo_persona','=','proveedor')
            ->get();
            $articulos = DB::table('articulo as art')
            ->select(DB::raw('CONCAT(art.codigo, " ",art.nombre) as articulo'),'art.idarticulo')
            ->where('art.estado','=','Activo')
            ->get();
            return view('compras.ingreso.create',['personas'=>$personas,'articulos'=>$articulos]);
        }
    /*
    |--------------------------------------------------------------------------
    | Componente store
    |--------------------------------------------------------------------------
    | EL componente store guarda los cambios realizado en el componente create
    | y lo redirecciona a la vista compras/ingreso, pero primero realiza un
    | beginTransaction para que los datos a procesar seran correctamente almacenados
    */    
        public function store(IngresoFormRequest $request){
            try{
                DB::beginTransaction();
                $ingreso = new Ingreso;
                $ingreso->idproveedor = $request->get('idproveedor');
                $ingreso->tipo_comprobante = $request->get('tipo_comprobante');
                $ingreso->serie_comprobante = $request->get('serie_comprobante');
                $ingreso->num_comprobante = $request->get('num_comprobante');
                $mytime = Carbon::now('America/Mexico_City');
                $ingreso->fecha_hora = $mytime->toDateTimeString();
                $ingreso->impuesto = '16';
                $ingreso->estado = 'A';
                $ingreso->save();
                $idarticulo = $request->get('idarticulo');
                $cantidad = $request->get('cantidad');
                $precio_compra = $request->get('precio_compra');
                $precio_venta = $request->get('precio_venta');
                $cont = 0;
                while($cont < count($idarticulo)){
                    $detalle = new DetalleIngreso();
                    $detalle->idingreso = $ingreso->idingreso;
                    $detalle->idarticulo = $idarticulo[$cont];
                    $detalle->cantidad = $cantidad[$cont];
                    $detalle->precio_compra = $precio_compra[$cont];
                    $detalle->precio_venta = $precio_venta[$cont];
                    $detalle->save();
                    $cont= $cont+1;
                }
                DB::commit();
            }catch(\Exception $e){
                DB::rollback();
            }
            return Redirect::to('compras/ingreso');
        }
    /*
    |--------------------------------------------------------------------------
    | Componente show
    |--------------------------------------------------------------------------
    | Regresa la vista de show, que recibe como parametro el $id del usuario
    | que retorna dos query de referencia.
    */
        public function show($id){
            $ingreso=DB::table('ingreso as i')
            ->join('persona as p','i.idproveedor','=','p.idpersona')
            ->join('detalle_ingreso as di','i.idingreso','=','di.idingreso')
            ->select('i.idingreso','i.fecha_hora','p.nombre','i.tipo_comprobante','i.serie_comprobante','i.num_comprobante','i.impuesto','i.estado',DB::raw('sum(di.cantidad*precio_compra) as total'))->where('i.idingreso','=',$id)
            ->first();        
            $detalles = DB::table('detalle_ingreso as d')
            ->join('articulo as a','d.idarticulo','=','a.idarticulo')
            ->select('a.nombre as articulo', 'd.cantidad','d.precio_compra','d.precio_venta')->where('d.idingreso','=',$id)
            ->get();
            return view('compras.ingreso.show',['ingreso'=>$ingreso,'detalles'=>$detalles]);
        }
   /*
   |--------------------------------------------------------------------------
   | Componente destroy
   |--------------------------------------------------------------------------
   | EL componente destroy actualiza el estado la ingreso a C
   | y lo redirecciona a la vista compras/ingreso
   */
        public function destroy($id){
            $ingreso = Ingreso::findOrFail($id);
            $ingreso->estado = 'C';
            $ingreso->update();
            return Redirect::to('compras/ingreso');
        }
}
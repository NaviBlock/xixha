<?php 
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
    namespace xixha\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Redirect;
    use DB;
    use xixha\Banx;
    use xixha\Http\Controllers\Controller;
    use xixha\Http\Requests\BanxFormRequest;
/*
|--------------------------------------------------------------------------
| Controlador BanxController
|--------------------------------------------------------------------------
| # Este controlador añade un capa de logica al manejar las solicitudes URL 
|   por parte del usuario administrador al mostrar los datos bancarios de cada
|   apicultor que tenga una operacion.
*/     
    class BanxController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Componente constructor
    |--------------------------------------------------------------------------
    | # Crea una nueva instancia en middleware que verifica
    |   los permisos en auth 
    */            
        public function __construct() {
            $this->middleware('auth');
        }
    /*
    |--------------------------------------------------------------------------
    | Componente en Testing 
    |--------------------------------------------------------------------------
    | # Controlador no terminado # 
    */        
    /**/    
        /*public function index(Request $request) {
            return view('banx.index');        
        }*/
        /*public function create() {
            return view('banx.create');
        }*/
        /*public function show($id) {
            return view('banx.show', ['banx'=>Banx::findOrFail($id)]);
        }*/ 
        /*public function store(BanxFormRequest $request) {        
            $x=DB::table('pago as pa')
            ->join('persona as p','p.idpersona','==','pa.id_pago')
            ->select('pa.id_pago','p.idpersona','p.nombre','p.apellidopa','p.apellidoma','p.curp','p.rfc','p.folio','p.clave','no_cuenta','p.banco','p.nombre','pa.token','fecha')
            ->where('id_pago');
            $x = Banx::select(['id_pago']);
            $banx = new Banx;
            $banx ->name_user=$request->get('name_user');
            $banx ->clave=$request->get('clave');
            $banx ->token = 'xix'.'-'.rand(10,10000).'ha'.rand(10,10000);        
            $banx ->save();
            return Redirect::to('banx');
        }*/    
        /*public function update(BanxFormRequest $request, $id){
            $banx = BanX::findORFail($id);
            $banx ->name_user=$request->get('name_user');
            $banx ->banco=$request->get('banco');
            $banx ->no_cuenta=$request->get('no_cuenta');
            $banx ->clave=$request->get('clave');
            $banx ->folio=$request->get('folio');
            $banx ->token=$request->get('token');
            $banx ->fecha=$request->get('fecha');
            $banx->update();
            return Redirect::to('banx/index');
        }*/
}
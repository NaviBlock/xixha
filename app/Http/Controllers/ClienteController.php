<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
    namespace xixha\Http\Controllers;
    use Illuminate\Http\Request;
    use xixha\Http\Requests;
    use xixha\Persona;
    use Illuminate\Support\Facades\Redirect;
    use xixha\Http\Requests\PersonaFormRequest;
    use DB;

/*
|--------------------------------------------------------------------------
| Controlador ClienteController
|--------------------------------------------------------------------------
*/ 
class ClienteController extends Controller{

    /*
    |--------------------------------------------------------------------------
    | Componente constructor
    |--------------------------------------------------------------------------
    | Crea una nueva instancia en middleware que verifica
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
    | regresando la vista index, la consulta hecha por el usuario
    | y la instancia de referencia
    */
        public function index(Request $request){
            if ($request){
                $consulta=trim($request->get('searchText'));
                $personas=DB::table('persona')
                ->where('nombre','LIKE','%'.$consulta.'%')
                ->where('tipo_persona','=','cliente')
                ->orwhere('num_documento','LIKE','%'.$consulta.'%')
                ->where('tipo_persona','=','cliente')                
                ->orwhere('telefono','LIKE','%'.$consulta.'%')
                ->where('tipo_persona','=','cliente')
                ->orwhere('email','LIKE','%'.$consulta.'%')
                ->where('tipo_persona','=','cliente')
                ->orderBy('idpersona','desc')
                ->paginate(5);
                return view('ventas.cliente.index',['personas'=>$personas,'searchText'=>$consulta]);
            }
        }
    /*
    |--------------------------------------------------------------------------
    | Componente create
    |--------------------------------------------------------------------------
    | Regresa la vista create al usuario cuando es llamado por el route
    | 
    */
        public function create(){
            return view('ventas.cliente.create');
        }
    /*
    |--------------------------------------------------------------------------
    | Componente store
    |--------------------------------------------------------------------------
    | EL componente store almacena los cambios realizado en el componente create
    | y lo redirecciona a la vista ventas/cliente
    */
        public function store(PersonaFormRequest $request){
            $persona = new Persona;
            $persona->tipo_persona='cliente';
            $persona->nombre=$request->get('nombre');
            $persona->tipo_documento=$request->get('tipo_documento');
            $persona->num_documento=$request->get('num_documento');
            $persona->direccion=$request->get('direccion');
            $persona->telefono=$request->get('telefono');
            $persona->email=$request->get('email');
            $persona->save();
            return Redirect::to('ventas/cliente'); 
        }
    /*
    |--------------------------------------------------------------------------
    | Componente show
    |--------------------------------------------------------------------------
    | Regresa la vista show al usuario cuando es llamado por el roure,
    | recibe como parametro un $id para realizar la consulta en el controlador de la tabla.
    |
    */
        public function show($id){
            return view('ventas.cliente.show',['persona'=>Persona::findOrFail($id)]);
        }
    /*
    |--------------------------------------------------------------------------
    | Componente edit
    |--------------------------------------------------------------------------
    | Regresa la vista edit al usuario cuando es llamado por el route,
    |
    */
        public function edit($id){
            return view('ventas.cliente.edit',['persona'=>Persona::findOrFail($id)]);
        }
    /*
    |--------------------------------------------------------------------------
    | Componente update
    |--------------------------------------------------------------------------
    | EL componente update actualiza los cambios realizado en el componente edit
    | y lo redirecciona a la vista ventas/cliente
    */
        public function update(PersonaFormRequest $request,$id){
            $persona = Persona::findOrFail($id); 
            $persona->nombre=$request->get('nombre');
            $persona->tipo_documento=$request->get('tipo_documento');
            $persona->num_documento=$request->get('num_documento');
            $persona->direccion=$request->get('direccion');
            $persona->telefono=$request->get('telefono');
            $persona->email=$request->get('email');
            $persona->update();
            return Redirect::to('ventas/cliente');
        }
   /*
   |--------------------------------------------------------------------------
   | Componente destroy
   |--------------------------------------------------------------------------
   | EL componente destroy actualiza el estado la tipo_persona a Inactivo
   | y lo redirecciona a la vista ventas/cliente
   */
        public function destroy($id){
            $persona=Persona::findOrFail($id);
            $persona->tipo_persona='Inactivo';
            $persona->update();
            return Redirect::to('ventas/cliente');	
        }
}
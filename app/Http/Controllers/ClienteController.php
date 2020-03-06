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
| # Este controlador añade una capa de logica al manejar las solicituddes URL
|   por parte del administrador.
*/
class ClienteController extends Controller{

    /*
    |--------------------------------------------------------------------------
    | Componente constructor
    |--------------------------------------------------------------------------
    | Crea una nueva instancia en middleware que verifica
    | los permisos del administrador en auth 
    */             
        public function __construct(){
            $this->middleware('auth');
        }
    /*
    |--------------------------------------------------------------------------
    | Componente index
    |--------------------------------------------------------------------------
    | # Si request es true, realiza una consulta a la DB regresando la respuesta 
    |   al usuario administrador de forma de array.
    */
        public function index(Request $request){
            if ($request){
                // #Variable $consulta toma el valor de searchText
                $consulta=trim($request->get('searchText'));
				/*
                |   # La variable $personas realiza una consulta y
                |     almacena un array decuardo al valor de la 
                |     variable $consulta.
                */                
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
				/*
                |   # Regresamos la vista ventas.cliente.index al usuario administrador
                |     instanciando la variable $personas al array de la consulta realizada.
                */                   
                return view('ventas.cliente.index',['personas'=>$personas,'searchText'=>$consulta]);
            }
        }
    /*
    |--------------------------------------------------------------------------
    | Componente create
    |--------------------------------------------------------------------------
    | # Por medio de la función create regresamos la vista create al usuario 
    |   cuando es llamado por el routes.    
    */
        public function create(){
            return view('ventas.cliente.create');
        }
    /*
    |--------------------------------------------------------------------------
    | Componente store
    |--------------------------------------------------------------------------
    | #Por de la función store almacenamos los cambios realizado en el 
    |   componente create y redireccionamos a la vista ventas/cliente al administrador.
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
    | # Por medio de la función show regresamos la vista show al administrador 
    |   cuando es llamado por el roure, recibe como parametro un $id la función 
    |   función findOrFail que nos permite obtener un registro de la DB.
    */
        public function show($id){
            return view('ventas.cliente.show',['persona'=>Persona::findOrFail($id)]);
        }
    /*
    |--------------------------------------------------------------------------
    | Componente edit
    |--------------------------------------------------------------------------
    | # Por medio de la función edit regresamos la vista edit al usuario cuando 
    |   es invocado por el routes, recibe como parametro un $id la 
    |   función findOrFail que nos permite obtener un registro de la DB.
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
    | y lo redirecciona la vista ventas/cliente al administrador.
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
   | y lo redirecciona la vista ventas/cliente al administrador
   */
        public function destroy($id){
            $persona=Persona::findOrFail($id);
            $persona->tipo_persona='Inactivo';
            $persona->update();
            return Redirect::to('ventas/cliente');	
        }
}
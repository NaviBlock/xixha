<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
    namespace xixha\Http\Controllers; 
    use Illuminate\Http\Request;
    use xixha\Http\Requests;
    use xixha\User;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\Support\Facades\input;
    use xixha\Http\Requests\UsuarioFormRequest;
    use DB;
    use Storage;
    use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Controlador UsuarioController
|--------------------------------------------------------------------------
*/
class UsuarioController extends Controller{
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
    | Si request es true, realiza una consulta a la DB
    | regresando la vista index, con la consulta hecha por el usuario
    | y la instancia de referencia
    */
        public function index(Request $request){
            if ($request){
                $query = trim($request->get('searchText'));
                $usuario = DB::table('users')
                //User
                ->where('name','LIKE','%'.$query.'%')
                ->where('rol','=','User') 
                ->orwhere('email','LIKE','%'.$query.'%')
                ->where('rol','=','User')
                //Administrador
                ->orwhere('name','LIKE','%'.$query.'%')
                ->where('rol','=','Admin')
                ->orwhere('email','LIKE','%'.$query.'%')
                ->where('rol','=','Admin')
                //Supervisor
                ->orwhere('name','LIKE','%'.$query.'%')
                ->where('rol','=','Super')
                ->orwhere('email','LIKE','%'.$query.'%')
                ->where('rol','=','Super')           
                //Inactivo
                ->orwhere('name','LIKE','%'.$query.'%')
                ->where('rol','=','Inactivo')
                ->orwhere('email','LIKE','%'.$query.'%')
                ->where('rol','=','Inactivo')
                //Mr.Root
                ->orwhere('name','LIKE','%'.$query.'%')
                ->where('rol','=','Mr.Root')
                ->orwhere('email','LIKE','%'.$query.'%')
                ->where('rol','=','Mr.Root')                       
                ->orderBy('id','desc') 
                ->paginate(8);  
                return view('secs.index',['usuario'=>$usuario,'searchText'=>$query]);
            }
        }
    /*
    |--------------------------------------------------------------------------
    | Componente create
    |--------------------------------------------------------------------------
    | Regresa la vista create a root cuando es llamado por el route
    | 
    */    
        public function create(){
            return view("secs.create");
        }
    /*
    |--------------------------------------------------------------------------
    | Componente store
    |--------------------------------------------------------------------------
    | EL componente store almacena los cambios realizado en el componente create
    | y lo redirecciona a la vista secs
    */
        public function store(UsuarioFormRequest $request){
            $usuario = new User;
            $usuario->name=$request->get('name');
            $usuario->email=$request->get('email');
            $usuario->password=bcrypt($request->get('password'));
            $usuario->rol=$request->get('rol');
            $usuario->is_admin=$request->get('is_admin');    
            $usuario->remember_token=bcrypt(str_random($request->get('pin')));            
            $usuario->save();        
            return Redirect::to("secs");
        } 
    /*
    |--------------------------------------------------------------------------
    | Componente edit
    |--------------------------------------------------------------------------
    | Regresa la vista edit a root cuando es llamado por el route
    |
    */
        public function edit($id){
            return view("secs.edit",["usuario"=>User::findOrFail($id)]);
        }
    /*
    |--------------------------------------------------------------------------
    | Componente update
    |--------------------------------------------------------------------------
    | EL componente update actualiza los cambios realizado en el componente edit
    | y lo redirecciona a la vista secs
    */
        public function update(UsuarioFormRequest $request, $id){
            $usuario = User::findOrFail($id);
            $usuario->name=$request->get('name');        
            $usuario->password=bcrypt($request->get('password'));
            $usuario->is_admin=$request->get('is_admin');
            $usuario->rol=$request->get('rol');    
            $usuario->update();
            return Redirect::to("secs");
        }
    /*
    |--------------------------------------------------------------------------
    | Componente destroy
    |--------------------------------------------------------------------------
    | EL componente destroy actualiza el estado is_admin a 0
    | y lo redirecciona a la vista secs
    */ 
        public function destroy($id){
            $usuario = User::findOrFail($id);       
            $usuario->is_admin = "0";
            $usuario->rol='Inactivo';
            $usuario->update();        
            return Redirect::to("secs");
        }
}
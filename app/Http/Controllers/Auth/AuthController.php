<?php
/*
|--------------------------------------------------------------------------
| Componentes librerias
|--------------------------------------------------------------------------
*/
    namespace xixha\Http\Controllers\Auth;
    use xixha\User;
    use Validator;
    use xixha\Persona;
    use xixha\Http\Controllers\Controller;
    use Illuminate\Foundation\Auth\ThrottlesLogins;
    use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
/*
|--------------------------------------------------------------------------
| Controlador AuthController
|--------------------------------------------------------------------------
| # Funciona como una capa de seguridad entre las peticiones URL del 
|   usuario y los componentes de laravel ya que autentifica el estado
|   de cada componente por medio de guards.
*/    
class AuthController extends Controller{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    /*
    |--------------------------------------------------------------------------
    | Componente redirectTo
    |--------------------------------------------------------------------------
    | # El componente redirectTo despues de verifica el usuario y el password,
    |   redirecciona al usuario a la dirección /home, /index, /, para definir
        direccion destino despues de iniciar.
    */
        protected $redirectTo = '/home';    

    /*
    |--------------------------------------------------------------------------
    | Componente constructor
    |--------------------------------------------------------------------------
    | # Crea una nueva instancia a middleware que verifica los permisos en auth,
    |   si no envia al usuario a logout.
    */
        public function __construct(){
            $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        }
    /*
    |--------------------------------------------------------------------------
    | Componente validación de campos
    |--------------------------------------------------------------------------
    | # Verifica los requerimientos y reglas de cada componentes del formulario 
    |   name, email, password para que pueda dar de alta en la base de datos.
    */
        protected function validator(array $data){
            return Validator::make($data, [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6|confirmed',
            ]);
        }
    /*
    |--------------------------------------------------------------------------
    | Componente validacion del registro
    |--------------------------------------------------------------------------
    | # Este componente se utiliza para instanciar la validación de un nuevo registro
    |   en del formulario.
    */
        protected function create(array $data){
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),           
            ]);
        }
    /*
    |--------------------------------------------------------------------------
    | Acceso a Registro
    |--------------------------------------------------------------------------    
    | # Para habilitar el registro hay que comentar el siguiente componente para 
    |   que el usuario pueda dar de alta sin el permiso del admnistrador.
    |
    | # Para deshabilitar el registro hay que descomentar el siguientes componente 
    |   para que el administrador pueda dar de alta a los usuarios.    
    */
        protected function showRegistrationForm(){
            return redirect('login');
        }
    /*
    |--------------------------------------------------------------------------
    | Acceso a login
    |--------------------------------------------------------------------------
    | # Verifica el middleware en user, si es autentificado lo redirecciona al 
    |   directorio a raiz(/), o una dirección personalizada, en caso contrario
    |   lo envia a /login.
    */
        public function redirectPath(){
            if(auth()->user()){
                return '/';
            }
            else{
                return 'auth/login';
            }
        }
}
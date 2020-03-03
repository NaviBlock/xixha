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
| Funciona como una capa de seguridad entre las peticiones URL del 
| usuario y los componentes del marco de desarrollo ya que autentifica el 
| estado de cada componente por medio de guards.
*/    
class AuthController extends Controller{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    /*
    |--------------------------------------------------------------------------
    | Componente redirectTo
    |--------------------------------------------------------------------------
    | # El componente redirectTo despues de verifica el usuario y el password,
    |   redirecciona al usuario a la direccion /home.
    */
        protected $redirectTo = '/home';    

    /*
    |--------------------------------------------------------------------------
    | Componente constructor
    |--------------------------------------------------------------------------
    | # Crea una nueva instancia a middleware que verifica los permisos en auth.
    */
        public function __construct(){
            $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        }
    /*
    |--------------------------------------------------------------------------
    | Componente validación de campos
    |--------------------------------------------------------------------------
    | # Verifica los requerimientos y reglas de cada componente del formulario 
    |   name, email, password.    
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
    | # Este componente se utiliza para instanciar la validacion de un nuevo registro
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
    | # Verifica el middleware a user, si es autentificado lo redirecciona a raiz(/)
    |   del directorio o pagina de inicio, si no lo envia a /login.
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
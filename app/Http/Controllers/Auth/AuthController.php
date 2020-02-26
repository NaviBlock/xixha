<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
namespace xixha\Http\Controllers\Auth;
use xixha\User;
use Validator;
use xixha\Persona;
use xixha\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
class AuthController extends Controller{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    /*
    |--------------------------------------------------------------------------
    | Componente login
    |--------------------------------------------------------------------------
    | El componente Auth verifica el user y el password, si son correctos envia 
    |  al usuario a /home
    |
    */
        protected $redirectTo = '/home';    
    /*
    |--------------------------------------------------------------------------
    | Componente auth
    |--------------------------------------------------------------------------
    | Crea una nueva instancia al controlador auth
    |
    */
        public function __construct(){
            $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        }
    /*
    |--------------------------------------------------------------------------
    | Componente validación de campos
    |--------------------------------------------------------------------------
    | Verifica los requerimiento de name, email, password
    | al momento de realizar el registro
    |
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
    | Componente para instanciar la validacion de un nuevo registro
    | 
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
    | Hay que descomentar las siguientes componente para deshabilitar de registro.
    | Hay que comentar el siguiente componente para habilitar de registro.
    */
        protected function showRegistrationForm(){
            return redirect('login');
        }
    /*
    |--------------------------------------------------------------------------
    | Acceso a login
    |--------------------------------------------------------------------------
    | Verifica el componente el user si es verificado, lo redirecciona a raiz(/) 
    | pagina de inicio, si no login.
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
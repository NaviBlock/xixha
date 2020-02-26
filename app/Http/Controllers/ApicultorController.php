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
    use xixha\Http\Requests\PersonaFormRequest;
    use xixha\Persona; 
    use DB;
    use Storage;
    use Illuminate\Support\Str;
    use Response;
    use Illuminate\Support\Collection;
    use Illuminate\Database\DatabaseManager;
    use xixha\User;
    use xixha\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Validator;
    use Symfony\Component\HttpFoundation\File\UploadedFile;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Componente constructor
    |--------------------------------------------------------------------------
    | Crea una nueva instancia en middleware que verifica
    | los permisos de user en auth 
    */  
        class ApicultorController extends Controller{
            public function __construct(){
                $this->middleware('auth');
            }
      /*
    |--------------------------------------------------------------------------
    | Componente padrón
    |--------------------------------------------------------------------------
    | Si request es true, realiza una consulta a la DB
    | regresando la vista, la consulta hecha por el usuario
    | y la instancia  
    */ 
        public function padron(Request $request){
            if ($request){
                $query = trim($request->get('searchText'));
                $personas = DB::table('persona')
                ->select('idpersona','tipo_persona','nombre','apellidopa','apellidoma','curp','estado','telefono','email','upp','pgn','clave_rast','num_colmena','prod_anual','certificacion','fecha_hora','sexo','rfc','estadoP','municipio','calle','colonia','temp_cosecha','loc_api','mov_col','donde','observacion','folio','img_perfil')
                ->where('nombre','LIKE','%'.$query.'%')
                ->where('tipo_persona','=','Apicultor')
                ->orwhere('apellidopa','LIKE','%'.$query.'%')
                ->where('tipo_persona','=','Apicultor')
                ->orwhere('apellidoma','LIKE','%'.$query.'%')
                ->where('tipo_persona','=','Apicultor')
                ->orwhere('telefono','LIKE','%'.$query.'%') 
                ->where('tipo_persona','=','Apicultor')
                ->orwhere('curp','LIKE','%'.$query.'%')
                ->where('tipo_persona','=','Apicultor')
                ->orwhere('email','LIKE','%'.$query.'%')
                ->where('tipo_persona','=','Apicultor')
                ->orwhere('upp','LIKE','%'.$query.'%')
                ->where('tipo_persona','=','Apicultor')
                ->orwhere('pgn','LIKE','%'.$query.'%')
                ->where('tipo_persona','=','Apicultor')
                ->orwhere('clave_rast','LIKE','%'.$query.'%')
                ->where('tipo_persona','=','Apicultor')
                ->orwhere('folio','LIKE','%'.$query.'%')
                ->where('tipo_persona','=','Apicultor')
                ->orderBy('idpersona','desc')
                ->paginate(10);
                return view('users.padron',['personas'=>$personas,'searchText'=>$query]);
            }
        }
     /*
    |--------------------------------------------------------------------------
    | Componente index
    |--------------------------------------------------------------------------
    | Regresa la vista de index al User
    |
    */
        public function index(){
            return view("users.index");
        }
}
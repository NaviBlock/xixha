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
    use Illuminate\Support\Facades\Auth;
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
    use xixha\Http\Controllers\UsuarioController;
    use Illuminate\Support\Facades\Validator;
    use Symfony\Component\HttpFoundation\File\UploadedFile;
    use Illuminate\Database\Eloquent\Model;
/*
|--------------------------------------------------------------------------
| Controlador AdminController
|--------------------------------------------------------------------------| 
*/  
class AdminController extends Controller{
    /*
    |--------------------------------------------------------------------------
    | Componente constructor
    |--------------------------------------------------------------------------
    | Crea una nueva instancia a middleware que verifica
    | los permisos del administrador en auth 
    */
        public function __construct(){
            $this->middleware('auth');
        }
    /*
    |--------------------------------------------------------------------------
    | Componente padrón
    |--------------------------------------------------------------------------
    | Si request es true, realiza una consulta a la DB
    | regresando la vista padron, con la consulta hecha por el usuario
    | y una instancia de referencia
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
                return view('administradors.padron',['personas'=>$personas,'searchText'=>$query]);
            }
        }
    /*
    |--------------------------------------------------------------------------
    | Componente index
    |--------------------------------------------------------------------------
    | Regresa la vista index al administrador cuando es llamado por el route
    | 
    */
        public function index(){  
            return view("administradors.index");
        }
    /*
    |--------------------------------------------------------------------------
    | Componente show
    |--------------------------------------------------------------------------
    | Regresa la vista show al administrador cuando es llamado por el route,
	| recibe como parametro un $id para realizar la consulta en el controlador de la tabla.
    |
    */
        public function show($id){
            return view('administradors.show',['persona'=>Persona::findOrFail($id)]);
        } 
    /*
    |--------------------------------------------------------------------------
    | Componente create
    |--------------------------------------------------------------------------
    | Regresa la vista create al administrador cuando es llamado por el route
    | 
    */
        public function create(){  
            return view("administradors.create");
        }
    /*
    |--------------------------------------------------------------------------
    | Componente edit
    |--------------------------------------------------------------------------
    | Regresa la vista edit al administrador cuando es llamado por el route    
    | 
    */
        public function edit($id){
            return view('administradors.edit',['persona'=>Persona::findOrFail($id)]);
        }
    /*
    |--------------------------------------------------------------------------
    | Componente store
    |--------------------------------------------------------------------------
    | EL componente store almacena los cambios realizado en el componente create
    | y lo redirecciona a la vista administradors/padron
    |
    */
        public function store(PersonaFormRequest $request){
                $personas = new Persona;        
                $personas->nombre=$request->get('nombre');
                $personas->apellidopa=$request->get('apellidopa');
                $personas->apellidoma=$request->get('apellidoma');
                $personas->curp=$request->get('curp');    
                $personas->telefono=$request->get('telefono');
                $personas->email=$request->get('email');
                $personas->certificacion=$request->get('certificacion');
                $personas->clave_rast=$request->get('clave_rast');
                $personas->upp=$request->get('upp');
                $personas->pgn=$request->get('pgn');
                $personas->prod_anual=$request->get('prod_anual');
                $personas->num_colmena=$request->get('num_colmena');
                $personas->temp_cosecha=$request->get('temp_cosecha');
                $personas->estadoP=$request->get('estadoP');
                $personas->sexo=$request->get('sexo');
                $personas->rfc=$request->get('rfc');
                $personas->municipio=$request->get('municipio');
                $personas->calle=$request->get('calle');
                $personas->colonia=$request->get('colonia');
                $personas->loc_api=$request->get('loc_api');
                $personas->mov_col=$request->get('mov_col');
                $personas->donde=$request->get('donde');
                $personas->observacion=$request->get('observacion');        
                $personas->tipo_persona ='Apicultor';
                $personas->estado ='Activo';
                    if(Input::hasFile('img_perfil')) {
                    //Almacenamos el valor del archivo de entrada
                    $file=Input::file('img_perfil');
                    //recupera la extension original del archivo
                    $extension=$file->getClientOriginalExtension();   
                    //Almacenamos el folio personalizado con la extension
                    $newnombre = 'XIX-'.$personas->curp.'-HA'.".".$extension;
                    //Almacenamos el folio personalizado sin la extension
                    $new_Nombre_Folio = 'XIX-'.$personas->curp.'-HA';
                    //Enviamos el archivo imagen al directorio /imagenes/perfil, 
                    //con el nombre nuevo nombre 
                    $file->move(public_path().'/imagenes/perfil',$newnombre);
                    //recuperamos el nombre original del archivo
                    $personas->img_perfil=$file->getClientOriginalName($newnombre);
                    //Almacenamos en nombre de la imagen del valor $newnombre
                    $personas->img_perfil=$newnombre;
                    //Almacenamos en folio del valor de la variable $new_Nombre_Folio
                    $personas->folio=$new_Nombre_Folio;
            }
                $personas->save();
            return Redirect::to('administradors/padron');
        }
    /*
    |--------------------------------------------------------------------------
    | Componente update
    |--------------------------------------------------------------------------
    | EL componente update actualiza los cambios realizado en el componente edit
    | y lo redirecciona a la vista administradors/padron
    */
        public function update(PersonaFormRequest $request,$id){
            $persona = Persona::findOrFail($id);
            $persona->nombre=$request->get('nombre');
            $persona->apellidopa=$request->get('apellidopa');
            $persona->apellidoma=$request->get('apellidoma');
            $persona->curp=$request->get('curp');        
            $persona->telefono=$request->get('telefono');
            $persona->email=$request->get('email');
            $persona->certificacion=$request->get('certificacion');
            $persona->clave_rast=$request->get('clave_rast');
            $persona->upp=$request->get('upp');
            $persona->pgn=$request->get('pgn');
            $persona->prod_anual=$request->get('prod_anual');
            $persona->num_colmena=$request->get('num_colmena');
            $persona->temp_cosecha=$request->get('temp_cosecha');
            $persona->estadoP=$request->get('estadoP');
            $persona->sexo=$request->get('sexo');
            $persona->rfc=$request->get('rfc');
            $persona->municipio=$request->get('municipio');
            $persona->calle=$request->get('calle');
            $persona->colonia=$request->get('colonia');
            $persona->loc_api=$request->get('loc_api');
            $persona->mov_col=$request->get('mov_col');
            $persona->donde=$request->get('donde');
            $persona->observacion=$request->get('observacion');
            $persona->update();
            return Redirect::to('administradors/padron');
            }
        }
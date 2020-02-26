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
    use xixha\Http\Requests\StoryFormRequest;
    use xixha\Story;
    use DB;
    use Storage;
    use Illuminate\Support\Str;
    use Response;
    use Illuminate\Support\Collection;
    use Illuminate\Database\DatabaseManager;
    use xixha\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Validator;
    use Symfony\Component\HttpFoundation\File\UploadedFile;
    use Illuminate\Database\Eloquent\Model;
    /*
    |--------------------------------------------------------------------------
    | Componente constructor
    |--------------------------------------------------------------------------
    | Crea una nueva instancia en middleware que verifica
    | los permisos del administrador en auth 
    */
        class StoryController extends Controller{ 
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
        public function index(Request $request){
            if($request){
                $query = trim($request->get('searchText'));
                $stories = DB::table('persona')            
                ->select('nombre','apellidopa','apellidoma','telefono','folio','fechaRegistro','cantidad','idpersona')
                ->where('nombre','LIKE','%'.$query.'%')
                ->where('tipo_persona','=','Apicultor')            
                ->orwhere('apellidopa','LIKE','%'.$query.'%')
                ->where('tipo_persona','=','Apicultor')              
                ->orwhere('apellidoma','LIKE','%'.$query.'%')
                ->where('tipo_persona','=','Apicultor')             
                ->orwhere('telefono','LIKE','%'.$query.'%')
                ->where('tipo_persona','=','Apicultor')            
                ->orwhere('folio','LIKE','%'.$query.'%')
                ->where('tipo_persona','=','Apicultor')               
                ->orderBy('idpersona','desc')
                ->paginate(5);
                return view('story.index',['stories'=>$stories,'searchText'=>$query]);
            }
        }
    /*
    |--------------------------------------------------------------------------
    | Componente create
    |--------------------------------------------------------------------------
    | Regresa la vista de create al usuario
    | 
    */
        public function create(){
            return view('story.create');
        }
    /*
    |--------------------------------------------------------------------------
    | Componente show
    |--------------------------------------------------------------------------
    | Regresa la vista de show, que recibe como parametro el $id del usuario
    | que retorna un query.
    */
        public function show($idpersona){
            return view('story.show',['stories'=>Story::findOrFail($idpersona)]);
        }     
    /*
    |--------------------------------------------------------------------------
    | Componente store
    |--------------------------------------------------------------------------
    | EL componente store guarda los cambios realizado en el componente create
    | y lo redirecciona a la vista story
    */
        public function store(StoryFormRequest $request){        
            $stories = new Story;
            $stories->fechaRegistro=$request->get('fechaRegistro');
            $stories->cantidad=$request->get('cantidad');
            $stories->save();
            return Redirect::to('story');
        }
    /*
    |--------------------------------------------------------------------------
    | Componente update
    |--------------------------------------------------------------------------
    | EL componente update actualiza los cambios realizado en el componente edit
    | y lo redirecciona a la vista story
    */
        public function update(StoryFormRequest $request,$idpersona){ 
            $stories = Story::findOrFail($idpersona);
            $stories->cantidad=$request->get('cantidad');
            $stories->fechaRegistro=$request->get('fechaRegistro');
            $stories->id_ref=$idpersona;
            $stories->update();
            return Redirect::to('story');
        }
}
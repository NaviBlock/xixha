<?php
//https://jsfiddle.net/boilerplate/jquery
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

use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;
use Illuminate\Database\DatabaseManager;

use xixha\User;
use xixha\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProveedorController extends Controller
{ 
    public function __construct(){
        $this->middleware('auth');
    }
 
    public function index(Request $request){
        if ($request){
            $query = trim($request->get('searchText'));
            $personas = DB::table('persona')
            ->select('idpersona','tipo_persona','nombre','apellidopa','apellidoma','curp','estado','telefono','email','upp','pgn','clave_rast','num_colmena','prod_anual','certificacion','fecha_hora','sexo','rfc','estadoP','municipio','calle','colonia','temp_cosecha','loc_api','mov_col','donde','observacion','folio')

            ->where('nombre','LIKE','%'.$query.'%')
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
            ->paginate(5);
            return view('compras.proveedor.index',['personas'=>$personas,'searchText'=>$query]);
        }
    }
 
    public function create(){  
        return view("compras.proveedor.create");
    }

    public function store(PersonaFormRequest $request){
            $personas = new Persona;
            //$personas->tipo_persona='proveedor';
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
            //$mytime = Carbon::now('America/Mexico_City');
            //$persona->fecha_hora = $mytime->toDateTimeString();
            $personas->tipo_persona ='Apicultor';
            $personas->estado ='Activo';
            
            if(isset($folio)){
                echo "Folio repetido";
            }else{
                $personas->folio = 'xi0'.(rand(1,100000));
            }
            //$personas->folio->gmp_strval(gmp_random_range(0,100000));
            $personas->save();

        //$personas->loc_api=$request->get('loc_api');
        //$personas->mov_api=$request->get('mov_api');
        //$personas->observacion=$request->get('observacion');
       
 
        /*if (Input::hasFile('img_curp')) {
            $file=Input::file('img_curp');
            $file->move(public_path().'/imagenes/perfil',$file->getClientOriginalName());
            $personas->img_curp=$file->getClientOriginalName();
        }*/

        /*if (Input::hasFile('img_perfil')){
            $file=Input::file('img_perfil');
            $nombre_original=$file->getClientOriginalName();
            $extension=$file->getClientOriginalExtension();
            $nuevo_nombre="userxixha-".$id.$extension;
            $file->move(public_path().'/imagenes/perfil', $file->getClientOriginalName());
            $personas->img_perfil=$file->getClientOriginalName();
        }

        if (Input::hasFile('img_perfil')) {
            $file=Input::file('img_perfil');
            $nombre_original=$file->getClientOriginalName();
            $extension=$file->getClientOriginalExtension();
            $file="userxixha-".$id.$extension;
            $file->move(public_path().'/storage/perfil',$file->getClientOriginalName());
            $personas->img_perfil=$file->getClientOriginalName();
        }
     
        if (Input::hasFile('img_upp')) {
            $file=Input::file('img_upp');
            $file->move(public_path().'/imagenes/perfil',$file->getClientOriginalName());
            $personas->img_upp=$file->getClientOriginalName();
        }
        
        if (Input::hasFile('img_pgn')) {
            $file=Input::file('img_pgn');
            $file->move(public_path().'/imagenes/perfil',$file->getClientOriginalName());
            $personas->img_pgn=$file->getClientOriginalName();
        }

        if (Input::hasFile('img_clave_rast')) {
            $file=Input::file('img_clave_rast');
            $file->move(public_path().'/imagenes/perfil',$file->getClientOriginalName());
            $personas->img_clave_rast=$file->getClientOriginalName();
        }*/
        return Redirect::to('compras/proveedor');
       //return view('compras/proveedor')->whit(['personas'=>$personas]); 
    }
 
    public function show($id){
        return view('compras.proveedor.show',['persona'=>Persona::findOrFail($id)]);
    }
  
    public function edit($id){
        return view('compras.proveedor.edit',['persona'=>Persona::findOrFail($id)]);
    }

    /*public function apic($id){
        return view('compras.proveedor.apic',['persona'=>Persona::findOrFail($id)]);
    }*/
 
    public function updateAPI(PersonaFormRequest $request,$id){
        return Redirect::to('compras/proveedor');
    }


    public function update(PersonaFormRequest $request,$id){
        $persona = Persona::findOrFail($id); // categoria que quiero modificar 
        $personas->nombre=$request->get('nombre');
        $persona->apellidopa=$request->get('apellidopa');
        $persona->apellidoma=$request->get('apellidoma');
        $persona->curp=$request->get('curp');        
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

        $persona->update();
        return Redirect::to('compras/proveedor');
    }
 
    public function destroy($id){
        $persona = Persona::findOrFail($id);
        $persona->tipo_persona ='Inactivo';
        $persona->update();
        return Redirect::to('compras/proveedor');	
    }
}  
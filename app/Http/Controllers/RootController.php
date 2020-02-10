<?php

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
use xixha\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Database\Eloquent\Model;

class RootController extends Controller{
    public function __construct(){
        $this->middleware('auth');
}

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
        ->paginate(5);
        return view('root.padron',['personas'=>$personas,'searchText'=>$query]);
    }
}

public function index(){  
    return view("root.index");
}

public function show($id){
    return view('root.show',['persona'=>Persona::findOrFail($id)]);
} 

public function tablev(){
    $persona = Persona::select(['idpersona','nombre']);
    return Datatables::of($persona)
    ->make(true);
}
 
public function create(){  
    return view("root.create");
}

public function edit($id){
    return view('root.edit',['persona'=>Persona::findOrFail($id)]);
}

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
                $file=Input::file('img_perfil');
                $extension=$file->getClientOriginalExtension();
                $newnombre = 'XIX-'.$personas->curp.'-HA'.".".$extension;
                $new_Nombre_Folio = 'XIX-'.$personas->curp.'-HA';
                $file->move(public_path().'/imagenes/perfil',$newnombre);
                $personas->img_perfil=$file->getClientOriginalName($newnombre);
                $personas->img_perfil=$newnombre;
                $personas->folio=$new_Nombre_Folio;
            }        
        $personas->save();    
        return Redirect::to('root/padron');
}

public function update(PersonaFormRequest $request,$id){
    $persona = Persona::findOrFail($id);
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
    return Redirect::to('root/padron');
}

public function destroy($id){
    $persona = Persona::findOrFail($id);    
    $persona->tipo_persona ='Inactivo';    
    $persona->update();
    return Redirect::to('root/padron');	
    }
} 
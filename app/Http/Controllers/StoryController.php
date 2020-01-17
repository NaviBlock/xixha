<?php

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
//use xixha\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Database\Eloquent\Model;

//
class StoryController extends Controller{ 
    public function __construct(){
        $this->middleware('auth');
    }
//------------------------------------------------------------------------------------------//
//Para ver los Datos
    public function index(Request $request){
        if($request){
            $query = trim($request->get('searchText'));
            $stories = DB::table('story as s')
            ->join('persona as p','s.id_story','=','p.idpersona')
            ->select('id_ref','id_story','fechaRegistro','cantidad','nombre','apellidopa','apellidoma','municipio','telefono','temp_cosecha','folio')
            
			->where('nombre','LIKE','%'.$query.'%')
			->where('tipo_persona','=','Apicultor')  
			
			->orwhere('apellidopa','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')  

            ->orwhere('apellidoma','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor') 
            
            ->orwhere('telefono','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')  

            ->orwhere('id_story','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')  
					
	   		->orderBy('idpersona','desc')
	   		->paginate(5);
	   		return view('story.index',['stories'=>$stories,'searchText'=>$query]);
        }
    }

    public function show($id_story){
        return view('story.show',['stories'=>Story::findOrFail($id_story)]);
    }     
//------------------------------------------------------------------------------------------//
//Para Crear datos
    public function create(){
        return view('story.create');
    }

    public function store(StoryFormRequest $request){
        $stories = new Story;
        $stories->fechaRegistro=$request->get('fechaRegistro');
        $stories->cantidad=$request->get('cantidad');
        $stories->save();
        return Redirect::to('story');
    }
//------------------------------------------------------------------------------------------//
//Editar
   public function edit($idpersona){
        $editx =Editx::find($idpersona);
        $storx = DB::table('story as s')
        ->join('persona as p','s.id_story','=','p.idpersona')
        ->select('s.id_story','s.id_ref','s.fechaRegistro','s.cantidad','p.folio','p.nombre','p.apellidopa','p.apellidoma');
        //return view('story.edit',['stories'=>Story::findOrFail($id_story)]);
        return view('story.edit', compact($editx,$storx));
    }

    public function update(StoryFormRequest $request, $id_story){ 
        //$storx = DB::table('story as s')
        //->join('persona as p','s.id_story','=','p.idpersona')
        //->select('id_story','id_ref','fechaRegistro','cantidad','nombre','apellidopa','apellidoma','municipio','telefono','temp_cosecha','folio');
       //return view('story.index',['stories'=>$stories,'searchText'=>$query])

        $stories = Story::findOrFail($id_story);        
        $stories->cantidad=$request->get('cantidad');
        $stories->fechaRegistro=$request->get('fechaRegistro');
        //$stories->id_ref=+1;
        $stories->update();
        return Redirect::to('story');
    }
}
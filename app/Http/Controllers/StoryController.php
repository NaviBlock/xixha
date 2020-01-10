<?php

namespace xixha\Http\Controllers;

use Illuminate\Http\Request;
use xixha\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
/*use xixha\Http\Requests\PersonaFormRequest;*/ 
/*use xixha\Persona; */

use DB;
use Storage;
use Illuminate\Support\Str;

use Response;
use Illuminate\Support\Collection;
use Illuminate\Database\DatabaseManager;

use xixha\Http\Controllers\Controller;
/*use xixha\Http\Controllers\UsuarioController;*/
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Database\Eloquent\Model;
use xixha\Http\Requests\StoryFormRequest;
use xixha\Story;

class StoryController extends Controller{ 
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        if($request){
            $query = trim($request->get('searchText'));
            $stories = DB::table('story as s')
            ->join('persona as p','s.id_story','=','p.idpersona')
            ->select('id_story','fechaRegistro','cantidad','nombre','apellidopa','apellidoma','municipio','telefono','temp_cosecha','folio')
            
			->where('nombre','LIKE','%'.$query.'%')
			->where('tipo_persona','=','Apicultor')  
			
			->orwhere('apellidopa','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')  

            ->orwhere('apellidoma','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor') 
            
            ->orwhere('telefono','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')  
					
	   		->orderBy('idpersona','desc')
	   		->paginate(5);
	   		return view('story.index',['stories'=>$stories,'searchText'=>$query]);
        }
    }

    public function create(){
        return view('story.create');
    }

    public function show(){
        return view('story.show');
    }     

    public function edit($id){
        return view('story.edit',['stories'=>Stories::findOrFail($id)]);
    }

    public function store(StoryFormRequest $request){
        $stories = new Stories;
        $stories->fechaRegistro=$request->get('fechaRegistro');
        $stories->cantidad=$request->get('cantidad');
        $stories->save();
        return Redirect::to('stories');
    }

    public function update(StoryFormRequest $request, $id){
        $stories = Stories::findOrFail($id);
        $stories->fechaRegistro=$request->get('fechaRegistro');
        $stories->cantidad=$request->get('cantidad');
        $stories->update();
        return Redirect::to('stories');
    }
}
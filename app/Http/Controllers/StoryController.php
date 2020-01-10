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

class StoryController extends Controller{ 
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        if($request){
            $query = trim($request->get('searchText'));
            $stories = DB::table('story as s')
            ->join('persona as p','s.id_story','=','p.idpersona')
            ->select('s.id_story','s.fechaRegistro','s.cantidad','p.nombre','p.apellidopa','p.apellidoma','p.municipio','p.telefofo','p.temp_coshecha','p.folio')
            
			->where('p.nombre','LIKE','%'.$query.'%')
			->where('tipo_persona','=','Apicultor')  
			
			->orwhere('p.apellidopa','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')  

            ->orwhere('p.apellidoma','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor') 
            
            ->orwhere('p.telefono','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','Apicultor')  
					
	   		->orderBy('a.idarticulo','desc')
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
}
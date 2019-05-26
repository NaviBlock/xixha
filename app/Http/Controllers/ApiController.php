<?php

namespace xixha\Http\Controllers;

use Illuminate\Http\Request;
use xixha\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use xixha\Http\Requests\ApiFormRequest;

use xixha\Api;
use DB;

use Response;
use Illuminate\Support\Collection;
use Illuminate\Database\DatabaseManager;

class ApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }  

    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));
            $apicultor = DB::table('apicultor as api')
            ->join('persona as p','api.idapicultor','=','p.idpersona')
            ->select('p.idpersona','p.tipo_persona','p.nombre','p.tipo_documento','p.num_documento','p.direccion','p.telefono','p.email','api.num_colmena','api.geoloc_apiario','api.prod_anual','api.temp_cosecha','api.tipo_certificacion','api.mueve_sus_colmena','api.a_donde','api.observaciones','api.upp','api.pgn','api.clave_rast')

            ->where('p.nombre','LIKE','%'.$query.'%')
            ->where('p.tipo_persona','=','proveedor')

            ->orwhere('p.telefono','LIKE','%'.$query.'%')
            ->where('p.tipo_persona','=','proveedor')
           
            ->orwhere('p.tipo_documento','LIKE','%'.$query.'%')
            ->where('p.tipo_persona','=','proveedor')

            ->orwhere('p.num_documento','LIKE','%'.$query.'%')
            ->where('p.tipo_persona','=','proveedor')

            ->orwhere('p.email','LIKE','%'.$query.'%')
            ->where('p.tipo_persona','=','proveedor')

            ->orwhere('api.geoloc_apiario','LIKE','%'.$query.'%')
            ->where('p.tipo_persona','=','proveedor')

            ->orwhere('api.upp','LIKE','%'.$query.'%')
            ->where('p.tipo_persona','=','proveedor')

            ->orwhere('api.pgn','LIKE','%'.$query.'%')
            ->where('p.tipo_persona','=','proveedor')
            
            ->orwhere('api.clave_rast','LIKE','%'.$query.'%')
            ->where('p.tipo_persona','=','proveedor')

            ->orderBy('p.idpersona','desc')
            ->paginate(5);
            return view('compras.apicultores.index',['apicultor'=>$apicultor,'searchText'=>$query]);
        }
    }
 
    /* retornar a una vista */
    public function create()
    {   
        return view("compras.apicultores.create");
    }
 
    public function store(PersonaFormRequest $request){
        
        $apicultor = new Apicultor;
        $apicultor->num_colmena=$request->get('num_colmena');
        $apicultor->geoloc_apiario=$request->get('geoloc_apiario');
        $apicultor->prod_anual=$request->get('prod_anual');
        $apicultor->temp_cosecha=$request->get('temp_cosecha');
        $apicultor->tipo_certificacion=$request->get('tipo_certificacion');
        $apicultor->mueve_sus_colmena=$request->get('mueve_sus_colmena');
        $apicultor->a_donde=$request->get('a_donde');
        $apicultor->observaciones=$request->get('observaciones');
        $apicultor->upp=$request->get('upp');
        $apicultor->pgn=$request->get('pgn');
        $apicultor->clave_rast=$request->get('clave_rast');
        $apicultor->save();
        return Redirect::to('compras/apicultores'); 
    }
 
    /* recibe un parametro de una categoria | retorna una vista*/
    public function show($id)
    {
            return view('compras.apicultores.show',['apicultor'=>Apicultor::findOrFail($id)]);
    }
 
    /* llamar a un formulario donde modifico los datos de una categoria especifica */ 
    public function edit($id)
    {
            return view('compras.apicultores.edit',['apicultor'=>Apicultor::findOrFail($id)]);
    }
 
    /* recibe 2 parametro de tipo formRequest*/
    public function update(PersonaFormRequest $request,$id)
    {
        $apicultor = Apicultor::findOrFail($id); // categoria que quiero modificar 
        $apicultor->num_colmena=$request->get('num_colmena');
        $apicultor->geoloc_apiario=$request->get('geoloc_apiario');
        $apicultor->prod_anual=$request->get('prod_anual');
        $apicultor->temp_cosecha=$request->get('temp_cosecha');
        $apicultor->tipo_certificacion=$request->get('tipo_certificacion');
        $apicultor->mueve_sus_colmena=$request->get('mueve_sus_colmena');
        $apicultor->a_donde=$request->get('a_donde');
        $apicultor->observaciones=$request->get('observaciones');
        $apicultor->upp=$request->get('upp');
        $apicultor->pgn=$request->get('pgn');
        $apicultor->clave_rast=$request->get('clave_rast');
        $apicultor->save();
        return Redirect::to('compras/apicultores');
    }
 
    /* recibe como parametro un ID | cambiar el estado de la categoria*/
    public function destroy($id)
    {
        $apicultor = Apicultor::findOrFail($id);
        $apicultor->estado ='Inactivo';
        $apicultor->update();
        return Redirect::to('compras/apicultores');	
    }
}  
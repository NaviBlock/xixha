<?php

namespace xixha\Http\Controllers;

use Illuminate\Http\Request;
use xixha\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use xixha\Http\Requests\PersonaFormRequest;

use xixha\Persona; 
use xixha\Api;
use DB;

use Response;
use Illuminate\Support\Collection;
use Illuminate\Database\DatabaseManager;

class ProveedorController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    /*recibe como parametro un objeto del tipo request*/
    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));
            $personas = DB::table('persona as p')
            ->join('apicultor as ap', 'p.idpersona','=','ap.idpersona')
            ->select('p.tipo_persona','p.nombre','p.tipo_documento','p.num_documento','p.direccion','p.telefono','p.email','ap.num_colmena','ap.geoloc_apiario','ap.prod_anual','ap.temp_cosecha','ap.tipo_certificacion','ap.mueve_sus_colmena','ap.a_donde','ap.observaciones','ap.upp','ap.pgn','ap.clave_rast')

            //Consulta por Tipo de Persona
            ->where('p.nombre','LIKE','%'.$query.'%')
            ->orwhere('p.tipo_persona','=','proveedor')
             //Consulta por Telefono
            ->where('p.telefono','LIKE','%'.$query.'%')
            ->orwhere('p.tipo_persona','=','proveedor')
             //Consulta por UPP
            ->where('ap.upp','LIKE','%'.$query.'%')
            ->orwhere('p.tipo_persona','=','proveedor')
             //Consulta por PGN
            ->where('ap.pgn','LIKE','%'.$query.'%')
            ->orwhere('p.tipo_persona','=','proveedor')
             //Consulta por Clave de Rasteabilidad
            ->where('ap.clave_rast','LIKE','%'.$query.'%')
            ->orwhere('p.tipo_persona','=','proveedor')
             //Consulta por Temporada de Cosecha
            ->where('ap.temp_cosecha','LIKE','%'.$query.'%')
            ->orwhere('p.tipo_persona','=','proveedor')
            //Ordenado por el idpersona
            ->orderBy('p.idpersona','desc')
            ->paginate(5);
            return view('compras.proveedor.index',['personas'=>$personas,'searchText'=>$query]);
        }
    }
 
    /* retornar a una vista */
    public function create()
    {   
        return view("compras.proveedor.create");
    }
 
    
    public function store(PersonaFormRequest $request){
        
        $persona = new Persona;
        $persona->tipo_persona='proveedor';
        $persona->nombre=$request->get('nombre');
        $persona->tipo_documento=$request->get('tipo_documento');
        $persona->num_documento=$request->get('num_documento');
        $persona->direccion=$request->get('direccion');
        $persona->telefono=$request->get('telefono');
        $persona->email=$request->get('email');
        $persona->save();

        $apicultor = new Api;
        $apicultor->num_colmena = $request->get('num_colmena');
        $apicultor->geoloc_apiario = $request->get('geoloc_apiario');
        $apicultor->prod_anual = $request->get('prod_anual');
        $apicultor->temp_cosecha = $request->get('temp_cosecha');
        $apicultor->tipo_certificacion = $request->get('tipo_certificacion');
        $apicultor->mueve_sus_colmena = $request->get('mueve_sus_colmena');
        $apicultor->a_donde = $request->get('a_donde');
        $apicultor->observaciones = $request->get('observaciones');
        $apicultor->upp = $request->get('upp');
        $apicultor->pgn = $request->get('pgn');
        $apicultor->clave_rast = $request->get('clave_rast');
        $apicultor->save();

        return Redirect::to('compras/proveedor'); 
    }
 
    /* recibe un parametro de una categoria | retorna una vista*/
    public function show($id)
    {
            return view('compras.proveedor.show',['persona'=>Persona::findOrFail($id)]);
    }
 
    /* llamar a un formulario donde modifico los datos de una categoria especifica */ 
    public function edit($id)
    {
            return view('compras.proveedor.edit',['persona'=>Persona::findOrFail($id)]);
    }
 
    /* recibe 2 parametro de tipo formRequest*/
    public function update(PersonaFormRequest $request,$id)
    {
        $persona = Persona::findOrFail($id); // categoria que quiero modificar 
        $persona->nombre=$request->get('nombre');
        $persona->tipo_documento=$request->get('tipo_documento');
        $persona->num_documento=$request->get('num_documento');
        $persona->direccion=$request->get('direccion');
        $persona->telefono=$request->get('telefono');
        $persona->email=$request->get('email');
        $persona->update();

        $apicultor = Api::findOrFail($id);
        $apicultor->num_colmena = $request->get('num_colmena');
        $apicultor->geoloc_apiario = $request->get('geoloc_apiario');
        $apicultor->prod_anual = $request->get('prod_anual');
        $apicultor->temp_cosecha = $request->get('temp_cosecha');
        $apicultor->tipo_certificacion = $request->get('tipo_certificacion');
        $apicultor->mueve_sus_colmena = $request->get('mueve_sus_colmena');
        $apicultor->a_donde = $request->get('a_donde');
        $apicultor->observaciones = $request->get('observaciones');
        $apicultor->upp = $request->get('upp');
        $apicultor->pgn = $request->get('pgn');
        $apicultor->clave_rast = $request->get('clave_rast');
        $apicultor->save();
        return Redirect::to('compras/proveedor');
    }
 
    /* recibe como parametro un ID | cambiar el estado de la categoria*/
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->tipo_persona ='Inactivo';
        $persona->update();
        return Redirect::to('compras/proveedor');	
    }
}
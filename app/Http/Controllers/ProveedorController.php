<?php

namespace xixha\Http\Controllers;

use Illuminate\Http\Request;
use xixha\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use xixha\Http\Requests\PersonaFormRequest;

use xixha\Persona; 
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
            $personas = DB::table('persona')
            ->select('idpersona','tipo_persona','nombre','tipo_documento','num_documento','direccion','telefono','email', 'num_colmena','geoloc_apiario','prod_anual','temp_cosecha','tipo_certifcacion','mueve_sus_colmena','a_donde','observaciones','upp','pgn','clave_rast')

            ->where('nombre','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')

            ->orwhere('telefono','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')
           
            ->orwhere('tipo_documento','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')

            ->orwhere('num_documento','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')

            ->orwhere('email','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')

            ->orwhere('upp','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')

            ->orwhere('pgn','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')

            ->orwhere('clave_rast','LIKE','%'.$query.'%')
            ->where('tipo_persona','=','proveedor')

            ->orderBy('idpersona','desc')
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
        $persona->num_colmena=$request->get('num_colmena');
        $persona->geoloc_apiario=$request->get('geoloc_apiario');
        $persona->prod_anual=$request->get('prod_anual');
        $persona->temp_cosecha=$request->get('temp_cosecha');
        $persona->tipo_certifcacion=$request->get('tipo_certifcacion');
        $persona->mueve_sus_colmena=$request->get('mueve_sus_colmena');
        $persona->a_donde=$request->get('a_donde');
        $persona->observaciones=$request->get('observaciones');
        $persona->upp=$request->get('upp');
        $persona->pgn=$request->get('pgn');
        $persona->clave_rast=$request->get('clave_rast');
        $persona->save();
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
        $persona->num_colmena=$request->get('num_colmena');
        $persona->geoloc_apiario=$request->get('geoloc_apiario');
        $persona->prod_anual=$request->get('prod_anual');
        $persona->temp_cosecha=$request->get('temp_cosecha');
        $persona->tipo_certifcacion=$request->get('tipo_certifcacion');
        $persona->mueve_sus_colmena=$request->get('mueve_sus_colmena');
        $persona->a_donde=$request->get('a_donde');
        $persona->observaciones=$request->get('observaciones');
        $persona->upp=$request->get('upp');
        $persona->pgn=$request->get('pgn');
        $persona->clave_rast=$request->get('clave_rast');
        $persona->update();
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
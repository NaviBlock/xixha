<?php

namespace xixha\Http\Controllers;

use Illuminate\Http\Request;
use xixha\Http\Requests;

use xixha\Persona; 
use xixha\Api;
use Illuminate\Support\Facades\Redirect;
use xixha\Http\Requests\PersonaFormRequest;
use DB;

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
            $consulta=trim($request->get('searchText'));
            $personas=DB::table('persona as p')
            ->join('apicultor as ap', 'p.idpersona','=','ap.idpersona')
            ->select('p.nombre','p.tipo_documento','p.num_documento','p.direccion','p.telefono','p.email',
            
            'ap.num_colmena','ap.geoloc_apiario','ap.prod_anual','ap.temp_cosecha','ap.tipo_certificacion','ap.mueve_sus_colmeda','ap.a_donde','ap.observaciones','ap.upp','ap.pgn','ap.clave_rast')
            ->where('p.nombre','LIKE','%'.$consulta.'%')
            ->orwhere('p.tipo_persona','=','proveedor')
            ->where('p.telefono','LIKE','%'.$consulta.'%')
            ->orwhere('p.tipo_persona','=','proveedor')
            ->where('ap.upp','LIKE','%'.$consulta.'%')
            ->orwhere('p.tipo_persona','=','proveedor')
            ->where('ap.pgn','LIKE','%'.$consulta.'%')
            ->orwhere('p.tipo_persona','=','proveedor')
            ->where('ap.clave_rast','LIKE','%'.$consulta.'%')
            ->orwhere('p.tipo_persona','=','proveedor')
            ->where('ap.tipo_certificacion','LIKE','%'.$consulta.'%')
            ->orwhere('p.tipo_persona','=','proveedor')
            ->where('ap.temp_cosecha','LIKE','%'.$consulta.'%')
            ->orwhere('p.tipo_persona','=','proveedor')
            ->orderBy('ap.idpersona','desc')
            ->paginate(5);
            return view('compras.proveedor.index',['personas'=>$personas,'searchText'=>$consulta]);
        }
    }
 
    /* retornar a una vista */
    public function create()
    {
        return view('compras.proveedor.create');
    }
 
    /* almacenar el objeto del modelo categoria | tabla categoria de la BD  | validacion formrequest */
    public function store(PersonaFormRequest $request)
    {
        $persona = new Persona;
        $persona->tipo_persona='proveedor';
        $persona->nombre=$request->get('nombre');
        $persona->tipo_documento=$request->get('tipo_documento');
        $persona->num_documento=$request->get('num_documento');
        $persona->direccion=$request->get('direccion');
        $persona->telefono=$request->get('telefono');
        $persona->email=$request->get('email');
/*----------------------------------------------------------------------------------------------------*/
        $apicultor
        $persona->num_colmena = 'num_colmena';
        $persona->geoloc_apiario = 'geoloc_apiario';
        $persona->prod_anual = 'prod_anual';
        $persona->temp_cosecha = 'temp_cosecha';
        $persona->tipo_certificacion = 'tipo_certificacion';
        $persona->mueve_sus_colmeda = 'mueve_sus_colmeda';
        $persona->a_donde = 'a_donde';
        $persona->observaciones = 'observaciones';
        $persona->upp = 'upp';
        $persona->pgn = 'pgn';
        $persona->clave_rast = 'clave_rast';
/*----------------------------------------------------------------------------------------------------*/
        $persona->save();
        return Redirect::to('compras/proveedor'); 
        /* direcciona al listado del ventas ciente */
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
/*----------------------------------------------------------------------------------------------------*/
        $persona->num_colmena = 'num_colmena';
        $persona->geoloc_apiario = 'geoloc_apiario';
        $persona->prod_anual = 'prod_anual';
        $persona->temp_cosecha = 'temp_cosecha';
        $persona->tipo_certificacion = 'tipo_certificacion';
        $persona->mueve_sus_colmeda = 'mueve_sus_colmeda';
        $persona->a_donde = 'a_donde';
        $persona->observaciones = 'observaciones';
        $persona->upp = 'upp';
        $persona->pgn = 'pgn';
        $persona->clave_rast = 'clave_rast';
/*----------------------------------------------------------------------------------------------------*/
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
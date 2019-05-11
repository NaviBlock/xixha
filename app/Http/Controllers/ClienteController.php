<?php

namespace xixha\Http\Controllers;
 
use Illuminate\Http\Request;
use xixha\Http\Requests;

use xixha\Persona;
use Illuminate\Support\Facades\Redirect;
use xixha\Http\Requests\PersonaFormRequest;
use DB;

class ClienteController extends Controller
{
    public function __construct()
   {
 
   }

   /*recibe como parametro un objeto del tipo request*/
   public function index(Request $request)
   {
   	if ($request) {
   		$consulta=trim($request->get('searchText'));
        $personas=DB::table('persona')->where('nombre','LIKE','%'.$consulta.'%')->where('tipo_persona','=','cliente')->orwhere('num_documento','LIKE','%'.$consulta.'%')->where('tipo_persona','=','cliente')->orwhere('telefono','LIKE','%'.$consulta.'%')->where('tipo_persona','=','cliente')->orderBy('idpersona','desc')->paginate(5);
   		return view('ventas.cliente.index',['personas'=>$personas,'searchText'=>$consulta]);
   	}

   }

   /* retornar a una vista */
   public function create()
   {
   		return view('ventas.cliente.create');
   }

   /* almacenar el objeto del modelo categoria | tabla categoria de la BD  | validacion formrequest */
   public function store(PersonaFormRequest $request)
   {
   		$persona = new Persona;
        $persona->tipo_persona=$request->get('Cliente');
        $persona->nombre=$request->get('nombre');
        $persona->tipo_documento=$request->get('tipo_documento');
        $persona->num_documento=$request->get('num_documento');
        $persona->direccion=$request->get('direccion');
        $persona->telefono=$request->get('telefono');
        $persona->email=$request->get('email');
   		$persona->save();
   		return Redirect::to('ventas/cliente'); /* direcciona al listado del ventas ciente */
   }

   /* recibe un parametro de una categoria | retorna una vista*/
   public function show($id)
   {
   		return view('ventas.cliente.show',['persona'=>Persona::findOrFail($id)]);
   }

   /* llamar a un formulario donde modifico los datos de una categoria especifica */ 
   public function edit($id)
   {
   		return view('ventas.cliente.edit',['persona'=>Persona::findOrFail($id)]);
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
   		return Redirect::to('ventas/cliente');
   }

   /* recibe como parametro un ID | cambiar el estado de la categoria*/
   public function destroy($id)
   {
   		$persona=Persona::findOrFail($id);
        $persona->tipo_persona='Inactivo';
        $persona->update();
        return Redirect::to('ventas/cliente');	
   }
}
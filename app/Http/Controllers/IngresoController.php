<?php

namespace xixha\Http\Controllers;

use Illuminate\Http\Request;
use xixha\Http\Requests;

use xixha\Articulo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use xixha\Http\Requests\ArticuloFormRequest;
use DB;
 
class IngresoController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){
        if($request){
            $consulta=trim($request->get('searchText'));
            $ingresos=DB::table('ingreso')
            ->select('idingreso','idproveedor','tipo_comprobante','serie_comprobante','num_comprobante','fecha_hora','impuesto')->where('idingreso','LIKE','%'.$consulta.'%')->orwhere('idproveedor','LIKE','%$'.$consulta.'%')->orderBy('idingreso','desc')->paginate(5);
        }
    }

    public function create(){
        $ingreso=DB::table('ingreso')->where('estado','=','Activo')->get();   
        return view('compras.ingreso.create',['ingresos'=>$ingresos]);

    }
    
    public function store(){}

    public function show($id){
        return view('compras.ingreso.show',['ingreso'=>Ingreso::findOrFail($id)]);
    }

    public function edit($id){
        $consulta=Ingreso::findOrFail($id);
        $ingresos=DB::table('ingreso')->where('estado','=','Activo')->get();   
        return view('compras.ingreso.create',['ingresos'=>$ingresos]);
    }

    public function update(){}

    public function destroy($id){
        $ingreso=Ingreso::findOrFaild($id);
        $ingreso->estado='desactivo';
        $ingreso->update();
        return Redirect::to('compras/ingreso');
    }
    

}

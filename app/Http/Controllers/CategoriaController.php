<?php
namespace xixha\Http\Controllers;
use Illuminate\Http\Request;
use xixha\Http\Requests;
use xixha\Categoria;
use Illuminate\Support\Facades\Redirect;
use xixha\Http\Requests\CategoriaFormRequest;
use DB;
 
class CategoriaController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   public function index(Request $request)
   {
   	if ($request) {
   		$consulta = trim($request->get('searchText'));
         $categorias = DB::table('categoria')
         ->where('nombre','LIKE','%'.$consulta.'%')
   		->where('condicion','=','1')
   		->orderBy('idcategoria','desc')
   		->paginate(5);
   		return view('almacen.categoria.index',['categorias'=>$categorias,'searchText'=>$consulta]);
   	}
   }
   
   public function create()
   {
   		return view('almacen.categoria.create');
   }
   
   public function store(CategoriaFormRequest $request)
   {
   		$categoria = new Categoria;
   		$categoria->nombre=$request->get('nombre');
   		$categoria->descripcion=$request->get('descripcion');
   		$categoria->condicion=1;
   		$categoria->save();
   		return Redirect::to('almacen/categoria');
   }
   
   public function show($id)
   {
   		return view('almacen.categoria.show',['categoria'=>Categoria::findOrFail($id)]);
   }
   
   public function edit($id)
   {
   		return view('almacen.categoria.edit',['categoria'=>Categoria::findOrFail($id)]);
   }
   
   public function update(CategoriaFormRequest $request,$id)
   {
   		$categoria = Categoria::findOrFail($id); // categoria que quiero modificar 
   		$categoria->nombre=$request->get('nombre');
   		$categoria->descripcion=$request->get('descripcion');
   		$categoria->update();
   		return Redirect::to('almacen/categoria');
   }
   
   public function destroy($id)
   {
   		$categoria = Categoria::findOrFail($id);
         $categoria->condicion = 0;
         $categoria->update();
   		return Redirect::to('almacen/categoria');	
   }
}
<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
   namespace xixha\Http\Controllers;
   use Illuminate\Http\Request;
   use xixha\Http\Requests;
   use xixha\Categoria;
   use Illuminate\Support\Facades\Redirect;
   use xixha\Http\Requests\CategoriaFormRequest;
   use DB;
   /*
   |--------------------------------------------------------------------------
   | Componente constructor
   |--------------------------------------------------------------------------
   | Crea una nueva instancia en middleware que verifica
   | los permisos en auth 
   */      
   class CategoriaController extends Controller{
      public function __construct(){
         $this->middleware('auth');
      }
    /*
    |--------------------------------------------------------------------------
    | Componente index
    |--------------------------------------------------------------------------
    | Si request es true, realiza una consulta a la DB
    | regresando la vista, la consulta hecha por el usuario
    | y la instancia  
    */
      public function index(Request $request){
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
   /*
   |--------------------------------------------------------------------------
   | Componente create
   |--------------------------------------------------------------------------
   | Regresa la vista de create al usuario
   | 
   */      
      public function create()
      {
            return view('almacen.categoria.create');
      }
   /*
   |--------------------------------------------------------------------------
   | Componente store
   |--------------------------------------------------------------------------
   | EL componente store guarda los cambios realizado en el componente create
   | y lo redirecciona a la vista almacen/categoria
   */   
   public function store(CategoriaFormRequest $request)
   {
   	$categoria = new Categoria;
   	$categoria->nombre=$request->get('nombre');
   	$categoria->descripcion=$request->get('descripcion');
   	$categoria->condicion=1;
   	$categoria->save();
   	return Redirect::to('almacen/categoria');
   }
   /*
   |--------------------------------------------------------------------------
   | Componente show
   |--------------------------------------------------------------------------
   | Regresa la vista de show, que recibe como parametro el $id del usuario
   | que retorna un query.
   */
      public function show($id)
      {
         return view('almacen.categoria.show',['categoria'=>Categoria::findOrFail($id)]);
      }
   /*
   |--------------------------------------------------------------------------
   | Componente edit
   |--------------------------------------------------------------------------
   | Regresa la vista de edit, que recibe como parametro el $id del usuario
   | que retorna un dato de referencia.
   | 
   */   
   public function edit($id)
   {
   	return view('almacen.categoria.edit',['categoria'=>Categoria::findOrFail($id)]);
   }
   /*
   |--------------------------------------------------------------------------
   | Componente update
   |--------------------------------------------------------------------------
   | EL componente update actualiza los cambios realizado en el componente edit
   | y lo redirecciona a la vista administradors/padron
   */      
   public function update(CategoriaFormRequest $request,$id)
   {
   	$categoria = Categoria::findOrFail($id);
   	$categoria->nombre=$request->get('nombre');
   	$categoria->descripcion=$request->get('descripcion');
   	$categoria->update();
   	return Redirect::to('almacen/categoria');
   }
   /*
   |--------------------------------------------------------------------------
   | Componente destroy
   |--------------------------------------------------------------------------
   | EL componente destroy actualiza el estado la Categoria a Inactivo
   | y lo redirecciona a la vista almacen/categoria
   */
      public function destroy($id){
         $categoria = Categoria::findOrFail($id);
         $categoria->condicion = 0;
         $categoria->update();
         return Redirect::to('almacen/categoria');	
      }
}
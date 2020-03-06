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
| Controlador CategoriaController
|--------------------------------------------------------------------------
|
*/      
   class CategoriaController extends Controller{
   /*
   |--------------------------------------------------------------------------
   | Componente constructor
   |--------------------------------------------------------------------------
   | Crea una nueva instancia a middleware que verifica
   | los permisos del administrador en auth 
   */         
      public function __construct(){
         $this->middleware('auth');
      }
    /*
    |--------------------------------------------------------------------------
    | Componente index
    |--------------------------------------------------------------------------
    | Si request es true, realiza una consulta a la DB regresando la respuesta
    | al usuario administrador de forma de array.
    */
      public function index(Request $request){
         if ($request) {
            // #Variable $consulta toma el valor de searchText
            $consulta = trim($request->get('searchText'));
				/*
            |   # La variable $categorias realiza una consulta y
            |     almacena un array decuardo al valor de la 
            |     variable $consulta.
            */            
            $categorias = DB::table('categoria')
            ->where('nombre','LIKE','%'.$consulta.'%')
            ->where('condicion','=','1')
            ->orderBy('idcategoria','desc')
            ->paginate(5);
				/*
            |   # Regresamos la vista almacen.categoria.index al usuario administrador
            |     instanciando la variable $categoria al array de la consulta realizada.
            */              
            return view('almacen.categoria.index',['categorias'=>$categorias,'searchText'=>$consulta]);
         }
      }
   /*
   |--------------------------------------------------------------------------
   | Componente create
   |--------------------------------------------------------------------------
   | Por medio de la función cretate regresamos la vista de create al usuario 
   |  cuando es llamada por el routes.
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
   | Por medio de la función store almacena los cambios realizado en el componente create
   | y redireccionamos la vista almacen/categoria al administrador.
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
   | # Por medio de la función show regresamos la vista show al usuario cuando 
   |  es llamado por el route, recibe como parametro un $id la 
	|   función findOrFail que nos permite obtener un registro de la DB.
	*/   
   public function show($id)
   {
      return view('almacen.categoria.show',['categoria'=>Categoria::findOrFail($id)]);
   }
   /*
   |--------------------------------------------------------------------------
   | Componente edit
   |--------------------------------------------------------------------------
   | # Por medio de la función edit regresamos la vista edit al administrador cuando es 
   |   invocado por el routes, recibe como parametro un $id la 
	|   función findOrFail que nos permite obtener un registro de la DB.
   */   
   public function edit($id)
   {
   	return view('almacen.categoria.edit',['categoria'=>Categoria::findOrFail($id)]);
   }
   /*
   |--------------------------------------------------------------------------
   | Componente update
   |--------------------------------------------------------------------------
   | # Por medio de la función update actualiza los cambios realizado por el 
   |  administrador en el componente edit y lo redireccionamos la vista 
   |  almacen/categoria al administrador.
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
   | # Por medio de la funcion destroy actualiza el estado del objeto a la 
   |  condición 0 y lo redireccionamos la vista almacen/categoria al administrador.
   */
      public function destroy($id){
         $categoria = Categoria::findOrFail($id);
         $categoria->condicion = 0;
         $categoria->update();
         return Redirect::to('almacen/categoria');	
      }
}
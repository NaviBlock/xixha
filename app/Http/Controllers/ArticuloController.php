<?php
/*
|--------------------------------------------------------------------------
| Componente a librerias
|--------------------------------------------------------------------------| 
*/
	namespace xixha\Http\Controllers;
	use Illuminate\Http\Request;
	use xixha\Http\Requests;
	use xixha\Articulo;
	use Illuminate\Support\Facades\Redirect;
	use Illuminate\Support\Facades\Input;
	use xixha\Http\Requests\ArticuloFormRequest;
	use DB;  
/*
|--------------------------------------------------------------------------
| Controlador ArticuloController
|--------------------------------------------------------------------------
| # Este controlador añade un capa de logica al manejar las solicitudes URL 
|   por parte del administrador.
*/
class ArticuloController extends Controller{
    /*
    |--------------------------------------------------------------------------
    | Componente constructor
    |--------------------------------------------------------------------------
	| # Crea una nueva instancia en middleware que verifica los permisos del 
	|   administrador en auth.
	*/			
		public function __construct(){
			$this->middleware('auth');
		}		
	/*
    |--------------------------------------------------------------------------
    | Componente index
    |--------------------------------------------------------------------------
    | # Si request es true, realiza una consulta a la DB regresando la respuesta 
    |   al administrador de forma de array.
    */
	   public function index(Request $request){
			if ($request) {
				// #Variable $query toma el valor de searchText
				$consulta = trim($request->get('searchText'));
				/*
                |   # La variable $articulos realiza una consulta y
                |     almacena un array decuardo al valor de la 
                |     variable $consulta.
                */
				$articulos = DB::table('articulo as a')
				->join('categoria as c','a.idcategoria','=','c.idcategoria')
				->select('a.idarticulo','a.nombre','a.codigo','a.stock','c.nombre as categoria','a.descripcion','a.imagen','a.estado')			   
				->where('a.nombre','LIKE','%'.$consulta.'%')
				->where('estado','=','Activo')  			
				->orwhere('a.codigo','LIKE','%'.$consulta.'%')
				->where('estado','=','Activo')  
				->orwhere('a.stock','LIKE','%'.$consulta.'%')
				->where('estado','=','Activo') 			
				->orwhere('c.nombre','LIKE','%'.$consulta.'%')
				->where('estado','=','Activo') 					
				->orderBy('a.idarticulo','desc')
				->paginate(5);
				/*
                |   # Regresamos la vista almacen.articulo.index al usuario administrador
                |     instanciando la variable $articulos al array de la consulta realizada.
                */   
				return view('almacen.articulo.index',['articulos'=>$articulos,'searchText'=>$consulta]);
			}
		}
    /*
    |--------------------------------------------------------------------------
    | Componente create
    |--------------------------------------------------------------------------
	| # Por medio de la función create regresamos la vista create al usuario administrador	 
	|	cuando es invocado por el routes, realizamos una consulta a la DB y regresamos el 
	|	resultado solo si la condicion es 1.
    */
	   public function create(){	   	
	   		$categorias=DB::table('categoria')->where('condicion','=','1')->get();
	   		return view('almacen.articulo.create',['categorias'=>$categorias]);
	   }		
    /*
    |--------------------------------------------------------------------------
    | Componente store
    |--------------------------------------------------------------------------
	| # Por medio de la función store almacenamos los cambios realizado en el 
	|	componente create y redireccionamos la vista almacen/articulo al administrador.
    */
	   public function store(ArticuloFormRequest $request){
	   		$articulo = new Articulo;
	   		$articulo->idcategoria=$request->get('idcategoria');
	   		$articulo->codigo=$request->get('codigo');
	   		$articulo->nombre=$request->get('nombre');
	   		$articulo->stock=$request->get('stock');
	   		$articulo->descripcion=$request->get('descripcion');
	   		$articulo->estado='Activo';
	   			if (Input::hasFile('imagen')) {
					$file=Input::file('imagen');
					// #Enviamos el archivo imagen al directorio /imagenes/perfil, con el nombre nuevo nombre 					   
					$file->move(public_path().'/imagenes/articulos',$file->getClientOriginalName());
					// #Recuperamos el nombre original del archivo
	   				$articulo->imagen=$file->getClientOriginalName();
	   			}
	   		$articulo->save();
	   		return Redirect::to('almacen/articulo');
	   }
	/*
    | # Por medio de la función show regresamos la vista show al administrador
    |   cuando es invocado por el routes, recibe como parametro un $id la 
	|   función findOrFail que nos permite obtener un registro de la DB.
	*/
	   public function show($id){
	   		return view('almacen.articulo.show',['articulo'=>Articulo::findOrFail($id)]);
	   }
    /*
    |--------------------------------------------------------------------------
    | Componente edit
    |--------------------------------------------------------------------------
	| # Por medio de la función edit regresamos la vista edit al administrador 
	|	cuando es invocado por el routes, recibe como parametro un $id la 
	|   función findOrFail que nos permite obtener un registro de la DB.
    */	   
	   public function edit($id){	   		
	   		$articulo=Articulo::findOrFail($id);
	   		$categorias=DB::table('articulo')->where('estado','=','Activo')->get();
	   		return view('almacen.articulo.edit',['articulo'=>$articulo,'categorias'=>$categorias]);
	   }
    /*
    |--------------------------------------------------------------------------
    | Componente update
    |--------------------------------------------------------------------------
	| # Por medio de la función update actualizamos los cambios realizado en la 
	|	vista edit y redireccionamos a la vista almacen/articulo al administrador.
    */
	   public function update(ArticuloFormRequest $request,$id){
	   		$articulo = Articulo::findOrFail($id);
	   		$articulo->idcategoria=$request->get('idcategoria');
	   		$articulo->codigo=$request->get('codigo');
	   		$articulo->nombre=$request->get('nombre');
	   		$articulo->stock=$request->get('stock');
	   		$articulo->descripcion=$request->get('descripcion');
	   			if (Input::hasFile('imagen')) {
	   				$file=Input::file('imagen');
	   				$file->move(public_path().'/imagenes/articulos',$file->getClientOriginalName());
	   				$articulo->imagen=$file->getClientOriginalName();
	   			}
	   		$articulo->update();
	   		return Redirect::to('almacen/articulo');
	   }
	/*
    |--------------------------------------------------------------------------
    | Componente destroy
    |--------------------------------------------------------------------------
	| # Por medio de la función destroy actualiza el estado el Articulo 
	|	Activo a Inactivo cuando de pasamos por parametro un $id y lo redireccionamos
	|	 la vista almacen/articulo al administrador.
    */
	   public function destroy($id){
			$articulo=Articulo::findOrFail($id);
			$articulo->estado='Inactivo';
	   		$articulo->update();
	   		return Redirect::to('almacen/articulo');	
	   }
}
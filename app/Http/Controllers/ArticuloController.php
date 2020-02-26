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
    | Componente constructor
    |--------------------------------------------------------------------------
    | Crea una nueva instancia en middleware que verifica
    | los permisos del users en auth 
    */
		class ArticuloController extends Controller{
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
	   		return view('almacen.articulo.index',['articulos'=>$articulos,'searchText'=>$consulta]);
	   	}
	   }
    /*
    |--------------------------------------------------------------------------
    | Componente create
    |--------------------------------------------------------------------------
    | Regresa una consulta a la vista de create al usuario  
    | 
    */
	   public function create(){	   	
	   		$categorias=DB::table('categoria')->where('condicion','=','1')->get();
	   		return view('almacen.articulo.create',['categorias'=>$categorias]);
	   }		
    /*
    |--------------------------------------------------------------------------
    | Componente store
    |--------------------------------------------------------------------------
    | EL componente store guarda los cambios realizado en el componente create
    | y lo redirecciona a la vista almacen/articulo
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
	   				$file->move(public_path().'/imagenes/articulos',$file->getClientOriginalName());
	   				$articulo->imagen=$file->getClientOriginalName();
	   			}
	   		$articulo->save();
	   		return Redirect::to('almacen/articulo');
	   }
	    /*
    |--------------------------------------------------------------------------
    | Componente show
    |--------------------------------------------------------------------------
    | Regresa la vista de show, que recibe como parametro el $id del usuario
    | que retorna un query.
    */
	   public function show($id){
	   		return view('almacen.articulo.show',['articulo'=>Articulo::findOrFail($id)]);
	   }
    /*
    |--------------------------------------------------------------------------
    | Componente edit
    |--------------------------------------------------------------------------
    | Regresa la vista de edit, que recibe como parametro el $id del usuario
    | que retorna dos datos de referencia.
    | 
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
    | EL componente update actualiza los cambios realizado en el componente edit
    | y lo redirecciona a la vista almacen/articulo
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
    | EL componente destroy actualiza el estado el Articulo a Inactivo
    | y lo redirecciona a la vista almacen/articulo
    */
	   public function destroy($id){
			$articulo=Articulo::findOrFail($id);
			$articulo->estado='Inactivo';
	   		$articulo->update();
	   		return Redirect::to('almacen/articulo');	
	   }
}
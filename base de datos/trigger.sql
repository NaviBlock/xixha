/*********************************************************************/
/*TRIGGER para detalle de ingreso*/
DELIMITER //
CREATE TRIGGER tr_updStockIngreso AFTER INSERT ON detalle_ingreso
FOR EACH ROW BEGIN
	UPDATE articulo SET stock = stock + NEW.cantidad
    WHERE articulo.idarticulo = NEW.idarticulo;
END
//
DELIMITER ; 
/*********************************************************************/
/*TRIGGER para detalle de venta*/
DELIMITER //
CREATE TRIGGER tr_updStockVenta AFTER INSERT ON detalle_venta
FOR EACH ROW BEGIN
    UPDATE articulo SET stock = stock - NEW.cantidad
    WHERE articulo.idarticulo = NEW.idarticulo;
END
//
DELIMITER ;
/*********************************************************************/


/*
https://www.youtube.com/redirect?event=comments&stzid=UggiYAyLBRL1kHgCoAEC.8KmiY4iIqiA8Lq2IhUIcg8&redir_token=Hti7cpXzUPZnHnMpVkciuZouUyR8MTU1ODA5NjA4MkAxNTU4MDA5Njgy&q=https%3A%2F%2Flaravel.com%2Fdocs%2F5.3%2Fauthentication

para cada controller
    $this->middleware('auth');
Route::get('/logout','Auth\LoginController@logout');


\Schema::defaultStringLength(191); dentro de la funcion boot en el AppServiceProvider.php﻿
use Illuminate\Auth\Middleware\Authenticate;﻿
'email' => 'required|string|email|max:50|unique:users'

      <li>
<a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                    Cerrar Sesion
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
   </form>
</li>
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
en las rutas y en el link <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Cerrar</a>﻿

/*Trigger para la tabla de venta/
DELIMITER //
CREATE TRIGGER tr_uppStockVentaAnulada
    AFTER UPDATE ON venta
	FOR EACH ROW 
BEGIN 
    UPDATE articulo 
    INNER JOIN detalle_venta ON detalle_venta.iddetalle_venta = articulo.idarticulo
    INNER JOIN venta ON detalle_venta.iddetalle_venta = NEW.idventa
    SET articulo.stock = articulo.stock + detalle_venta.cantidad;
END 
//
DELIMITER 


CREATE TRIGGER `tr_uppStockVentaAnulada` AFTER UPDATE ON `venta`
    FOR EACH ROW BEGIN UPDATE articulo
    INNER JOIN detalle_venta
    ON detalle_venta.iddetalle_venta = articulo.idarticulo 

    INNER JOIN venta ON 
    detalle_venta.iddetalle_venta = NEW.idventa 
    SET articulo.stock = articulo.stock + detalle_venta.cantidad; 
END $$
DELIMITER //



CREATE TRIGGER tr_updStockAnularVenta AFTER UPDATE ON venta 
FOR EACH ROW 
 update articulo a
    join detalleventa di
      on di.Id_Articulo = a.Id_Articulo
     and di.IdVenta = new.IdVenta
     set a.stock = a.stock + di.cantidad;

CREATE TRIGGER tr_updStockVenta AFTER INSERT ON detalle_venta
 FOR EACH ROW BEGIN
 UPDATE articulo SET stock = stock - NEW.cantidad 
 WHERE articulo.idarticulo = NEW.idarticulo;
END


CREATE TRIGGER tr_updStockAnularVenta AFTER UPDATE ON venta 
FOR EACH ROW 
 update articulo a
    join detalleventa di
      on di.Id_Articulo = a.Id_Articulo
     and di.IdVenta = new.IdVenta
     set a.stock = a.stock + di.cantidad;﻿



/*********************************************************************/
/*Trigger de Compra/
CREATE TRIGGER `tr_uppStockCompraAnulada` AFTER UPDATE ON `ingreso`
 FOR EACH ROW BEGIN 
 UPDATE producto 
    INNER JOIN detallecompra
     ON detallecompra.idProductoDetalleCompra = producto.idProducto
     INNER JOIN compra
     ON detallecompra.idCompraDetalleCompra = NEW.idCompra
     SET producto.stockProducto = producto.stockProducto - detallecompra.cantidadProductoAbastecido;
     END

CREATE TRIGGER `tr_uppStockCompraAnulada` AFTER UPDATE ON `ingreso` FOR EACH ROW UPDATE articulo INNER JOIN detalle_ingreso ON detalle_ingreso.iddetalle_ingreso = articulo.idarticulo INNER JOIN ingreso ON detalle_ingreso.iddetalle_ingreso = NEW.idingreso SET articulo.stock = articulo.stock - detalle_ingreso.cantidad;
/*********************************************************************/
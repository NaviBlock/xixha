/*********************************************************************/
DELIMITER //
CREATE TRIGGER tr_updStockIngreso AFTER INSERT ON detalle_ingreso
FOR EACH ROW BEGIN
	UPDATE articulo SET stock = stock + NEW.cantidad
    WHERE articulo.idarticulo = NEW.idarticulo;
END
//
DELIMITER ;
/*********************************************************************/
/*Trigger para la tabla de venta*/
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






/*********************************************************************/
/*Trigger de Compra*/
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
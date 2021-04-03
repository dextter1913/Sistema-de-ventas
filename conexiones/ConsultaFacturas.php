<?php 
        $registros = mysqli_query($conexion, "SELECT nomProd, categoria, cantidad, totalV, nombreCl, apellidoCl, Nfactura, fechaFactura FROM venta 
        INNER JOIN productos ON productos.idProd = venta.producto 
        INNER JOIN cliente ON cliente.idCl = venta.cliente 
        INNER JOIN facturaVentas ON facturaVentas.Nfactura = venta.Factura
        WHERE Factura = '$criterio'");

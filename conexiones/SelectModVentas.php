<?php 
    $registros = mysqli_query($conexion, "SELECT fechaventa, cliente, nomProd, cantidad, precioProd, precioVenta, nomCategoria, nombreCl, apellidoCl 
    FROM venta INNER JOIN productos ON productos.idProd = venta.producto 
    INNER JOIN cliente ON cliente.idCl = venta.cliente WHERE fechaventa BETWEEN '$_fechaini' AND '$_fechafinal'");

?>
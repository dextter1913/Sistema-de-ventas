<?php
include("../../estructura/menu2.php");
include("../../conexiones/abrir.php");
?>
<div class="container">
    <div class="row">
        <center>
            <h1><i>Ingresar Venta</i></h1>
        </center>
        <div class="col-md-2"></div>
        <div class="col-6 col-md-3">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <form action="ingresar-venta.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <label for="NombreProducto">Ingrese Nombre del Producto:</label>
                    <input type="text" name="nombreproducto" id="NombreProducto" class="form-control" placeholder="Buscar"><br>
                    <input type="submit" value="Buscar" class="btn btn-outline-primary" name="btnBuscarProductoV">
                </form>
            </div>
        </div>
        <div class="col-6 col-md-5">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nombre</th>
                                <th>precio</th>
                                <th>categoria</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_POST['btnBuscarProductoV'])) {
                                $_id = $_POST['nombreproducto'];
                                $consulta = mysqli_query($conexion, "SELECT * FROM  productos WHERE idProd = '$_id' OR nomProd LIKE '$_id%'");
                                while ($row = mysqli_fetch_array($consulta)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['idProd']; ?></td>
                                        <td><?php echo $row['nomProd']; ?></td>
                                        <td><?php echo $row['precioVenta']; ?></td>
                                        <td><?php echo $row['categoria']; ?></td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
                <br>
                <form action="ingresar-venta.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <?php require_once("../../estructura/ModalIngresarVenta.php"); //formulario ingresar venta
                    ?>
                    <input type="submit" value="Ingresar Venta" class="btn btn-outline-primary" name="btningresarVenta">
                </form>
            </div>
            <?php
            $consulta = mysqli_query($conexion, "SELECT * FROM productos");
            $valorP = mysqli_fetch_array($consulta);
            if (isset($_POST['btningresarVenta'])) {
                $_fecVenta = $_POST['fechaventa'];
                $_cantidadU = $_POST['CantidadUnidad'];
                $_id = $_GET['id'];
                $_idprod = $_POST['idprod'];

                $conexion->query("INSERT INTO facturaVentas(fechaFactura) VALUES('$_fecVenta')");
                $consultaF = mysqli_query($conexion, "SELECT * FROM facturaVentas");
                $consultaFactura = mysqli_fetch_array($consultaF);

                $Factura = $consultaFactura['Nfactura'];
                if ($Factura > 0) {
                    while ($Factura > 0) {
                        $Temp = $valorP['precioVenta'] * $_cantidadU;
                        $conexion->query("INSERT INTO venta(fechaventa, cantidad, totalV, cliente, producto, Factura) VALUES('$_fecVenta','$_cantidadU','$Temp','$_id','$_idprod','$Factura')");
                        $_Total = $_Total + $Temp;
                        echo "Venta ingresada, Total: " . $_Total;
                        $Factura = 0;
                    }
                    $nfactura = $consultaFactura['Nfactura'];
                    $conexion->query("UPDATE facturaVentas SET ValorFactura = '$_Total'  WHERE Nfactura = '$nfactura'");
                } else {
                    echo "Error al almacenar factura";
                }
                //terminar ciclo
            ?>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php
include("../../conexiones/cerrar.php");
include("../../estructura/inferior.php");
?>
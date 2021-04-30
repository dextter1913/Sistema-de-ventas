<?php
include("../../estructura/menu2.php");
include("../../conexiones/abrir.php");

?>
<div class="container-fluid">
    <div class="row">
        <center>
            <h1><i>Ingresar Venta</i></h1>
        </center>
        <div class="col-md-1 col-lg-2"></div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <form action="ingresar-venta.php?id=<?php echo $_GET['id']; ?>&idfactura=<?php echo $_GET['idfactura']; ?>" method="post">
                    <label for="NombreProducto">Ingrese Nombre del Producto:</label>
                    <input type="text" name="nombreproducto" id="NombreProducto" class="form-control" placeholder="Buscar"><br>
                    <input type="submit" value="Buscar" class="btn btn-outline-primary" name="btnBuscarProductoV">
                </form>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
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
                <form action="ingresar-venta.php?id=<?php echo $_GET['id']; ?>&idfactura=<?php echo $_GET['idfactura']; ?>" method="post">
                    <?php require_once '../../estructura/ModalIngresarVenta.php'; //formulario ingresar venta
                    ?>
                    <input type="submit" value="Ingresar Venta" class="btn btn-outline-primary" name="btningresarVenta">
                </form>
            </div>
            <?php


            //insertar ventas en la factura
            if (isset($_POST['btningresarVenta'])) {
                $_fecVenta = $_POST['fechaventa'];
                $_cantidadU = $_POST['CantidadUnidad'];
                $_EstadoVenta = $_POST['EstadoVenta'];
                $_id = $_GET['id'];
                $_idprod = $_POST['idprod'];
                //$consulta = mysqli_query($conexion, "SELECT * FROM productos WHERE idprod = '$_idprod'");
                //$valorP = mysqli_fetch_array($consulta);
                //$_Total = $valorP['precioVenta'] * $_cantidadU;
                require_once '../../clases/ConsultarValorVentaProducto.php';
                $ValorVenta = new ConsultarValorVentaProducto($_idprod);
                echo $ValorVenta->ValorVentaProducto()['precioVenta'];
                
                $_idfactura = $_GET['idfactura'];
                $conexion->query("INSERT INTO venta(fechaventa, cantidad, totalV, Estadoventa, cliente, producto, Factura) VALUES('$_fecVenta','$_cantidadU','$_Total','$_EstadoVenta','$_id','$_idprod','$_idfactura')");
                echo "Venta ingresada, Total: " . $_Total . "<br>";
                echo "el Numero de Factura es: <b>" . $_idfactura . "</b>";
                //require_once '../../clases/IngresarVentas.php';
                //$IngresarVenta = new IngresarVentas($_POST['fechaventa'], $_POST['CantidadUnidad'], $_GET['id'], $_POST['idprod'], $_GET['idfactura']);
                //$IngresarVenta->InsertarVenta();

            ?>
                <form action="Facturas.php?criterio2=<?php echo $_idfactura; ?>" method="post">
                    <button type="submit" class="btn btn-outline-danger"><i class="fas fa-wallet"></i></button>
                </form>
            <?php
            }
            ?>
        </div>
        <div class="col-md-1 col-lg-1"></div>
    </div>
</div>
<?php
include("../../conexiones/cerrar.php");
include("../../estructura/inferior.php");
?>
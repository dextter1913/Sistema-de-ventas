<?php
include("../../estructura/menu2.php");
include("../../conexiones/abrir.php");
?>
<?php
if (isset($_POST['btnregistrarventa'])) {
    $criterio = $_POST['criterio'];


    if ($criterio == "") {
        header("location:../buscar-venta.php");
    } else {
        $registros = mysqli_query($conexion, "SELECT nomProd, categoria, cantidad, totalV, nombreCl, apellidoCl, Nfactura, fechaFactura FROM venta 
        INNER JOIN productos ON productos.idProd = venta.producto 
        INNER JOIN cliente ON cliente.idCl = venta.cliente 
        INNER JOIN facturaVentas ON facturaVentas.Nfactura = venta.Factura
        WHERE Factura = '$criterio'");
?>

        <div class="row">
            <div class="col-1 col-md-1"></div>
            <div class="col-10 col-md-10">
                <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Producto</th>
                                    <th>Tipo</th>
                                    <th>Cantidad Unidad</th>
                                    <th>Total</th>
                                    <th>Fecha Factura</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($rows = mysqli_fetch_array($registros)) {
                                ?>
                                    <tr>
                                        <td><?php echo $rows['nomProd']; ?></td>
                                        <td><?php echo $rows['categoria']; ?></td>
                                        <td><?php echo $rows['cantidad']; ?></td>
                                        <td><?php echo $rows['totalV']; ?></td>
                                        <td><?php echo $rows['fechaFactura']; ?></td>
                                    </tr>
                                <?php
                                }
                                include("../../conexiones/cerrar.php");
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-1 col-md-1"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-md-4"></div>
            <div class="col-6 col-md-4">
                <form action="busqueda-registrar-venta.php" method="post">
                    <label for="IDCl">Ingrese ID</label>
                    <input type="text" name="idcl" id="IDCl" class="form-control"><br>
                    <input type="submit" value="Registrar" name="btn2registrarventa" class="btn btn-outline-success">
                </form>
            </div>
            <div class="col-3 col-md-4"></div>
        </div>

        <?php
        if (isset($_POST['btn2registrarventa'])) {
            $_id = $_POST['idcl'];
            include("../../conexiones/abrir.php");
            $registros = mysqli_query($conexion, "SELECT * FROM '$tbcliente' WHERE idCl = '$_id'");
            while ($consulta = mysqli_fetch_array($registros)) {
        ?>
                <div class="row">

                    <div class="col-1 col-md-1"></div>
                    <div class="col-10 col-md-10">
                        <div class="shadow-lg p-3 mb-10 bg-body rounded">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">
                                                <center> Documento</center>
                                            </th>
                                            <th scope="col">
                                                <center> Nombre</center>
                                            </th>
                                            <th scope="col">
                                                <center> Apellido</center>
                                            </th>
                                            <th scope="col">
                                                <center> Ciudad</center>
                                            </th>
                                            <th scope="col">
                                                <center> Direccion</center>
                                            </th>
                                            <th scope="col">
                                                <center> Correo</center>
                                            </th>
                                            <th scope="col">
                                                <center> Telefono</center>
                                            </th>
                                            <th scope="col">
                                                <center> Fecha Nacimiento</center>
                                            </th>
                                            <th scope="col">
                                                <center> Usuario</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>
                                            <center><?= $consulta['idCl'] ?> </center>
                                        </td>
                                        <td>
                                            <center><?= $consulta['nombreCl'] ?>¿</center>
                                        </td>
                                        <td>
                                            <center><?= $consulta['apellidoCl'] ?>¿</center>
                                        </td>
                                        <td>
                                            <center><?= $consulta['ciudadCl'] ?>¿</center>
                                        </td>
                                        <td>
                                            <center><?= $consulta['direccionCl'] ?>¿</center>
                                        </td>
                                        <td>
                                            <center><?= $consulta['correoCl'] ?>¿</center>
                                        </td>
                                        <td>
                                            <center><?= $consulta['telefonoCl'] ?>¿</center>
                                        </td>
                                        <td>
                                            <center><?= $consulta['fechanacCl'] ?>¿</center>
                                        </td>
                                        <td>
                                            <center><?= $consulta['user'] ?>¿</center>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 col-md-1"></div>
                </div>
<?php

            }
        }
        include("../../conexiones/cerrar.php");
    }
}
?>

<?php
include("../../estructura/inferior.php");
?>
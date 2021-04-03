<?php
include("../estructura/superior.php");
include("../conexiones/abrir.php");
?>
<?php
if (isset($_POST['btnbuscar'])) {
    $_id = $_POST['id'];


    $registros = mysqli_query($conexion, "SELECT * FROM $tbcliente WHERE idCl = '$_id'");
    while ($consulta = mysqli_fetch_array($registros)) {
?>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12"></div>
                <div class="col-12 col-md-12">
                    <div class="shadow-lg p-3 mb-5 bg-body rounded">
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
                                        <th scope="col">
                                            <center> Acciones</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td>
                                        <center><?= $consulta['idCl'] ?></center>
                                    </td>
                                    <td>
                                        <center><?= $consulta['nombreCl'] ?></center>
                                    </td>
                                    <td>
                                        <center><?= $consulta['apellidoCl'] ?></center>
                                    </td>
                                    <td>
                                        <center><?= $consulta['ciudadCl'] ?></center>
                                    </td>
                                    <td>
                                        <center><?= $consulta['direccionCl'] ?></center>
                                    </td>
                                    <td>
                                        <center><?= $consulta['correoCl'] ?></center>
                                    </td>
                                    <td>
                                        <center><?= $consulta['telefonoCl'] ?></center>
                                    </td>
                                    <td>
                                        <center><?= $consulta['fechanacCl'] ?></center>
                                    </td>
                                    <td>
                                        <center><?= $consulta['user'] ?></center>
                                    </td>
                                    <td>
                                        <center>
                                            <?php
                                            //Busca el ultimo ID de factura generado
                                            $_POST['btnIngresarFactura'];
                                            $Facturacion = mysqli_query($conexion, "SELECT * FROM facturaVentas ORDER by Nfactura DESC LIMIT 1;");
                                            $rowFactura  = mysqli_fetch_array($Facturacion);
                                            $Factura = $rowFactura['Nfactura'];
                                            ?>
                                            <form action="submenu/ingresar-venta.php?id=<?php echo $consulta['idCl']; ?>&idfactura=<?php echo $Factura; ?>" method="post">
                                                <button type="submit" class="btn btn-outline-warning" name="btnIngresarFactura"><i class="fas fa-shopping-cart"></i></button>
                                            </form>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12"></div>
            </div>
        </div>

<?php
    }
    include("../conexiones/cerrar.php");
}
?>
<?php
include("../estructura/inferior.php");
?>
<?php
require_once '../clases/BuscarCliente.php';
include("../estructura/superior.php");
include("../conexiones/abrir.php");
?>

<?php
if (isset($_POST['btnbuscarr'])) {
    $busqueda = new BuscarCliente($_POST['id']);
    $busquedatemporal = $busqueda->ConsultaTabla();
    while ($resultados = mysqli_fetch_array($busquedatemporal)) {
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
                                        <center><?php echo $resultados['idCl']; ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $resultados['nombreCl']; ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $resultados['apellidoCl']; ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $resultados['ciudadCl']; ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $resultados['direccionCl']; ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $resultados['correoCl']; ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $resultados['telefonoCl']; ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $resultados['fechanacCl']; ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $resultados['user']; ?></center>
                                    </td>
                                    <td>
                                        <center>
                                            <?php
                                            //Busca el ultimo ID de factura generado
                                            $_POST['btnIngresarFactura'];//boton de ingresar venta del cliente buscado
                                            $NumeroFactura = $busqueda->ConsultaIngresarFactura()['Nfactura']; //consultando numero de factura con el objeto BuscarCliente
                                            ?>
                                            <form action="submenu/ingresar-venta.php?id=<?php echo $resultados['idCl']; ?>&idfactura=<?php echo $NumeroFactura; ?>" method="post">
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
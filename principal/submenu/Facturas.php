<?php
include("../../estructura/menu2.php");
include("../../conexiones/abrir.php");
?>
<?php
$criterio = $_POST['criterio'];
$criterio2 = $_GET['criterio2'];
require_once '../../conexiones/ConsultaFacturas.php';
?>
<form action="Facturas.php" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 col-md-1"></div>
            <div class="col-10 col-md-10">
                <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>
                                        <center>Producto</center>
                                    </th>
                                    <th>
                                        <center>Tipo</center>
                                    </th>
                                    <th>
                                        <center>Cantidad Unidad</center>
                                    </th>
                                    <th>
                                        <center>Total</center>
                                    </th>
                                    <th>
                                        <center>Fecha Factura</center>
                                    </th>
                                    <th>
                                        <center>Numero de Factura</center>
                                    </th>
                                    <th>
                                        <center>Estado de Factura</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($rows = mysqli_fetch_array($registros)) {
                                ?>
                                    <tr>
                                        <td>
                                            <center><?php echo $rows['nomProd']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $rows['nomCategoria']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $rows['cantidad']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $rows['totalV']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $rows['fechaFactura']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $rows['Nfactura']; ?></center>
                                        </td>
                                        <td>
                                            <center>
                                                <select id="categoria" class="form-select" name="EstadoVenta">
                                                    <option selected>Pendiente</option>
                                                    <option>Pagado</option>
                                                    <option>Devuelto</option>
                                                    <option>Anulado</option>
                                                </select>
                                            </center>
                                        </td>
                                    </tr>
                                <?php
                                    $total = $total + $rows['totalV'];
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <td><?php echo $total; ?></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><button type="submit" class="btn btn-outline-primary btn-lg"><i class="far fa-save"></i></button></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-1 col-md-1"></div>
            </div>
        </div>
    </div>
</form>
<?php


include("../../conexiones/cerrar.php");
include("../../estructura/inferior.php");
?>
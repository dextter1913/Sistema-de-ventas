<?php
include("../../estructura/menu2.php");
include("../../conexiones/abrir.php");
?>
<?php
$criterio = $_POST['criterio'];
$criterio2 = $_GET['criterio2'];
require_once("../../conexiones/ConsultaFacturas.php");
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
                            <th>Numero de Factura</th>
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
                                <td><?php echo $rows['Nfactura'];?></td>
                            </tr>
                        <?php
                            $total = $total + $rows['totalV'];
                        }
                        include("../../conexiones/cerrar.php");
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td><?php echo $total; ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col-1 col-md-1"></div>
    </div>
</div>
<?php
include("../../conexiones/cerrar.php");
include("../../estructura/inferior.php");
?>
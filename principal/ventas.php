<?php
include("../estructura/superior.php");
include("../conexiones/abrir.php");
?>
<div class="container-fluid">
    <center>
        <h1><i>Buscar Ventas Totales</i></h1>
    </center>
    <div class="shadow-sm p-3 mb-5 bg-body rounded}">
        <form action="ventas.php" method="post">
            <div class="row">
                <div class="col-12 col-md-3"></div>
                <div class="col-12 col-md-3">
                    <label for="fechaini">Ingrese fecha Inicial</label>
                    <input type="date" name="fechaini" id="fechaini" class="form-control">
                </div>

                <div class="col-12 col-md-3">
                    <label for="fechafin">Ingrese fecha Final</label>
                    <input type="date" name="fechafin" id="fechafin" class="form-control">
                </div>
                <div class="col-12 col-md-3"></div>
            </div><br>
            <div class="row">
                <div class="col-12 col-md-6"></div>
                <div class="col-12 col-md-4"><button class="btn btn-outline-primary"><i class="fas fa-search"></i></button> </div>
                <div class="col-12 col-md-2"></div>
            </div>
        </form>

        <div class="row">

            <div class="col-12"></div>
            <div class="col-12">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <center>Fecha Venta</center>
                                    </th>
                                    <th>
                                        <center>Cedula o Doc</center>
                                    </th>
                                    <th>
                                        <center>Nombre de producto</center>
                                    </th>
                                    <th>
                                        <center>Cantidad</center>
                                    </th>
                                    <th>
                                        <center>Precio Producto</center>
                                    </th>
                                    <th>
                                        <center>Precio Venta</center>
                                    </th>
                                    <th>
                                        <center>Categoria</center>
                                    </th>
                                    <th>
                                        <center>Nombre Cliente</center>
                                    </th>
                                    <th>
                                        <center>Apellido Cliente</center>
                                    </th>
                                    <th>
                                        <center>Acciones</center>
                                    </th>
                                                                        <th>
                                        <center>Estado Venta</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $_fechaini = $_POST['fechaini'];
                                $_fechafinal = $_POST['fechafin'];
                                require("../conexiones/SelectModVentas.php");
                                $registros0 = $registros;

                                while ($consulta = mysqli_fetch_array($registros0)) {

                                ?>
                                    <tr>
                                        <td>
                                            <center><?php echo $consulta['fechaventa']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $consulta['cliente']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $consulta['nomProd']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $consulta['cantidad']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $consulta['precioProd']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $consulta['precioVenta']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $consulta['nomCategoria']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $consulta['nombreCl']; ?></center>
                                        </td>
                                        <td>
                                            <center><?php echo $consulta['apellidoCl']; ?></center>
                                        </td>
                                        <td>
                                            <center><a href="submenu/ver-venta.php?id=<?php echo $consulta['idventa']; ?>"><button class="btn btn-outline-info"><i class="fas fa-eye"></i></button></a> </center>
                                        </td>
                                        <td>
                                            <center><?php echo $consulta['Estadoventa']; ?></center>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>inversion</th>
                                    <th></th>
                                    <th>venta</th>
                                    <th></th>
                                    <th>Ganancias</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><?php
                                        require("../conexiones/SelectModVentas.php");
                                        $registros2 = $registros;
                                        while ($suma = mysqli_fetch_array($registros2)) {
                                            $precioProd = $precioProd + $suma['precioProd'];
                                        }
                                        echo "$" . $precioProd; ?> </td>
                                    <td></td>
                                    <td><?php
                                        require("../conexiones/SelectModVentas.php");
                                        $registros3 = $registros;
                                        while ($suma = mysqli_fetch_array($registros3)) {
                                            $recventa = $recventa + $suma['precioVenta'];
                                        }
                                        echo "$" . $recventa; ?> </td>
                                    <td></td>
                                    <td><?php
                                        $totalGanacias = $recventa - $precioProd;
                                        echo "$" . $totalGanacias;
                                        ?>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3"></div>
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3"></div>
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                <?php require('../estructura/ModalSacarReportePDF.php'); ?>
                            </div>
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12"></div>
        </div>
    </div>
</div>

<?php
include("../conexiones/cerrar.php");
include("../estructura/inferior.php");
?>
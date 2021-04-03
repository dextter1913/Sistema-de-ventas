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
        $registros = mysqli_query($conexion, "SELECT * FROM $tbproductos WHERE idProd = '$criterio'");
        while ($consulta = mysqli_fetch_array($registros)) {
?>

            <div class="row">
                <div class="col-1 col-md-1"></div>
                <div class="col-10 col-md-10">
                    <div class="shadow-lg p-3 mb-5 bg-body rounded">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">
                                            <center> ID Producto</center>
                                        </th>
                                        <th scope="col">
                                            <center>Nombre Producto</center>
                                        </th>
                                        <th scope="col">
                                            <center>Precio</center>
                                        </th>
                                        <th scope="col">
                                            <center>Categoria</center>
                                        </th>
                                        <th scope="col">
                                            <center>Usuario</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td>
                                        <center><?= $consulta['idProd'] ?></center>
                                    </td>
                                    <td>
                                        <center><?= $consulta['nomProd'] ?></center>
                                    </td>
                                    <td>
                                        <center><?= $consulta['precioProd'] ?></center>
                                    </td>
                                    <td>
                                        <center><?= $consulta['categoria'] ?></center>
                                    </td>
                                    <td>
                                        <center><?= $consulta['usuario'] ?></center>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-1 col-md-1"></div>
                </div>
            </div>
        <?php
        }
        include("../../conexiones/cerrar.php");
        ?>
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
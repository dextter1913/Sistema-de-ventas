<?php
include("../estructura/superior.php");
include("../estructura/formularioInsert.php")
?>
<?php //estableciendo conexion y insertando los datos
if (isset($_POST['btningresar'])) {

    $_id = $_POST['id'];
    $_nombre = $_POST['nombre'];
    $_apellido = $_POST['apellido'];
    $_ciudad = $_POST['ciudad'];
    $_direccion = $_POST['direccion'];
    $_correo = $_POST['correo'];
    $_telefono = $_POST['telefono'];
    $fechanac = $_POST['fechanac'];
    $_usuario = $_POST['usuario'];

    include("../conexiones/abrir.php"); //abriendo conexion
    $conexion->query("INSERT INTO $tbcliente(idCl, nombreCl, apellidoCl, ciudadCl, direccionCl, correoCl, telefonoCl, fechanacCl, user) 
    VALUES('$_id','$_nombre','$_apellido','$_ciudad','$_direccion','$_correo','$_telefono','$fechanac','$_usuario')");
    include("../conexiones/cerrar.php"); //cerrando conexion
    echo "<center><b>se registro con exito</b></center>";
}
?>
<?php
if (isset($_POST['btnregistrar'])) {
    $_nombre = $_POST['nombre'];
    $_precio = $_POST['precio'];
    $_categoria = $_POST['categoria'];
    $_usuario = $_POST['usuario'];
    $_precioVenta = $_POST['precioVenta'];
    $_descripcionP = $_POST['DescripcionP'];

    include("../conexiones/abrir.php");
    $conexion->query("INSERT INTO $tbproductos (nomProd, precioProd, precioVenta, categoria, descripcionProd, usuario) 
    VALUES('$_nombre','$_precio','$_precioVenta','$_categoria','$_descripcionP','$_usuario')");
    include("../conexiones/cerrar.php");
    echo "<center><b>se registro con exito</b></center>";
}
?>
<?php
include("../estructura/inferior.php");
?>
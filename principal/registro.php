<?php
include("../estructura/superior.php");
include("../estructura/formularioInsert.php")
?>
<?php //estableciendo conexion y insertando los datos
if (isset($_POST['btningresar'])) {
    require_once('../clases/Cliente.php');
    $ingresarCliente = new Cliente($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['ciudad'], $_POST['direccion'], $_POST['correo'], $_POST['telefono'], $_POST['fechanac'], $_POST['usuario']);
    $ingresarCliente->InsertarCliente();
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
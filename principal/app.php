<?php
if (isset($_POST['btniniciarsesion'])) {
    $_user = $_POST['usuario'];
    $_pass = $_POST['contraseña'];
    session_start();
    ob_start();
    $_SESSION['usuario'] = $_user;
    include("../conexiones/abrir.php");
    $consulta = "SELECT * FROM usuarios WHERE user = '$_user' AND pass = '$_pass'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);
    if ($filas) {
        header("Location:./app.php");
    } else {
        echo "Datos incorrectos";
        header("Location:../index.php");
    }
}

?>
<?php
include("../estructura/superior.php");
include("../estructura/slider.php");
?>





<?php
include("../estructura/inferior.php");
?>
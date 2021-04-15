<?php
$host = "atlaz.cvcpedzqpzzg.us-east-2.rds.amazonaws.com";
$user = "admin";
$pass = "12345678";
$db = "atlazdb";
$tbcliente = "cliente";
$tbempleado = "empleados";
$tbusuarios = "usuarios";
$tbproductos = "productos";
$conexion = new mysqli($host, $user, $pass, $db);
error_reporting(0);

if ($conexion->connect_errno) {
    echo "lo sentimos, no se pudo completar, en breve lo solucionaremos";
}

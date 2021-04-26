<?php 
require_once 'Conexion.php';
class CambiarEstadoVenta
{
    private $_EstadoVenta;
    private $IdVenta;

    public function __construct($_EstadoVenta, $IdVenta) {
        $this->_EstadoVenta = $_EstadoVenta;
        $this->IdVenta = $IdVenta;
    }
    public function CambiarEstadoVenta(){
        $_idventa = $this->IdVenta;
        $_EstadoVenta = $this->_EstadoVenta;
        echo "<center>Se modifico con Exito $_idventa, $_EstadoVenta </center>";
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("UPDATE venta  SET Estadoventa ='$_EstadoVenta' WHERE idventa = '$_idventa'");
        
        
    }
}

?>
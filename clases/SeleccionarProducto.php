<?php 
class SeleccionarProducto  
{
    private $NombreProducto;

    public function __construct($NombreProducto)
    {
        $this->NombreProducto = $NombreProducto;
    }

    protected function SeleccionarProducto()
    {
        $NombreProducto = $this->NombreProducto;
        require_once 'Conexion.php';
        $conexion = new Conexion();
        $consulta = mysqli_query($conexion->EstablecerConexion(), "SELECT * FROM  productos WHERE idProd = '$NombreProducto' OR nomProd LIKE '$NombreProducto%'");
        return $consulta;
        $conexion->__destruct();
    }
}

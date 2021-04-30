<?php 
require_once 'Conexion.php';
    class ConsultarValorVentaProducto  
    {
        private $_idprod;

        public function __construct($_idprod) {
            $this->_idprod = $_idprod;
        }

        public function ValorVentaProducto(){
            $_idprod = $this->_idprod;
            $conexion = new Conexion();
            $Query = "SELECT * FROM productos WHERE idprod = '$_idprod'";
            $consulta = mysqli_query($conexion->EstablecerConexion(), $Query);
            $ValorVentaUnidad = mysqli_fetch_array($consulta);
            return $ValorVentaUnidad;
            echo "el resultado es $ValorVentaUnidad";
        }
    }
    

?>
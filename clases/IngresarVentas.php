<?php 
require_once 'Productos.php';
require_once 'Conexion.php';
    class IngresarVentas extends Productos
    {
        
        private $_fechaventa;
        private $_cantidad;
        private  $_idprod;
        private $Nfactura;
        public function __construct($_fechaventa, $_cantidad, $id, $_idprod, $Nfactura) {
            
            $this->_fechaventa = $_fechaventa;
            $this->_cantidad = $_cantidad;
            $this->_id = $id;
            $this->_idprod = $_idprod;
            $this->Nfactura = $Nfactura;
        }

        private function ConsultarProducto(){
            $conexion = new Conexion();
            $consulta = mysqli_query($conexion->EstablecerConexion(), "SELECT * FROM productos WHERE idprod = '$this->_idprod'");
            $valorP = mysqli_fetch_array($consulta);
            return $valorP;
        }

        private function CalculoValorTotal(){
            $ValorTotal = $this->ConsultarProducto()['precioVenta'] * $this->_cantidad;

            return $ValorTotal;
        }

        public function InsertarVentas(){
            $_fechaventa = $this->_fechaventa;
            $_cantidad = $this->_cantidad;
            $_Total = $this->CalculoValorTotal();
            $_id = $this->_id;
            $_idprod = $this->_idprod;
            $Nfactura = $this->Nfactura;
            $conexion = new Conexion();
            $conexion->EstablecerConexion()->query("INSERT INTO venta(fechaventa, cantidad, totalV, cliente, producto, Factura) 
            VALUES('$_fechaventa','$_cantidad','$_Total','$_id','$_idprod','$Nfactura')");
        }


    }
    


?>
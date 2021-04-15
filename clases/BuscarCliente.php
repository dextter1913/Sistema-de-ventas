<?php 
    class BuscarCliente  extends Persona
    {
        public function __construct($_id) {
            $this->_id = $_id;
        }

        public function Consultar(){
            require_once 'Conexion.php';
            $Conexion  = new Conexion();
            $consulta = mysqli_query($Conexion->EstablecerConexion(),"SELECT * FROM cliente WHERE idCl = '$this->_id'");
            return $consulta;
        }
    }
    



?>
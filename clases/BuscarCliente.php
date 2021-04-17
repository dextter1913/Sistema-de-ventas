<?php 
require_once 'Conexion.php';
    class BuscarCliente
    {
        private $_id;//atributo que recibe el id 
        private $_consulta;// atributo que recibe la consulta
        private $_conexion;// atributo que recibe la conexion 

        public function __construct($_id) {
            $this->_id = $_id; //llevando el id del cliente
            $_consulta = "SELECT * FROM cliente WHERE idCl = '$this->_id'";//haciendo la consulta de el id del cliente y almacenandola en el atributo 
            $this->_consulta = $_consulta; //almacenando la consulta en el atributo
            $conexionTemporal = new Conexion();// creando la variable conexion temporal 
            $this->_conexion = $conexionTemporal->EstablecerConexion(); // almacenando la conexion en el atributo 
            

        }
        public function ConsultaTabla(){
            $resultado = mysqli_query($this->_conexion, $this->_consulta);

            return $resultado;
        }

    }
    



?>
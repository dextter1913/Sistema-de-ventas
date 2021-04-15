<?php 
require_once 'Conexion.php';
require_once 'Persona.php';
    class InsertarCliente extends Persona
    {
        private $_usuario;

        public function __construct($_id,$_nombre,$_apellido,$_ciudad,$_direccion,$_correo,$_telefono,$_fechanac,$_usuario) {
            $this->_id = $_id;
            $this->_nombre = $_nombre;
            $this->_apellido = $_apellido;
            $this->_ciudad   = $_ciudad;
            $this->_direccion= $_direccion;
            $this->_correo   = $_correo;
            $this->_telefono = $_telefono;
            $this->_fechanac = $_fechanac;
            $this->_usuario  = $_usuario;
        }
        //insertando datos llamando la clase conexion 
        public function Insertar(){
            $_id =$this->_id;
            $_nombre=$this->_nombre;
            $_apellido = $this->_apellido;
            $_ciudad = $this->_ciudad;
            $_direccion = $this->_direccion;
            $_correo = $this->_correo;
            $_telefono = $this->_telefono;
            $_fechanac = $this->_fechanac;
            $_usuario = $this->_usuario;
            $conexion = new Conexion();
            $conexion->EstablecerConexion()->query("INSERT INTO cliente(idCl, nombreCl, apellidoCl, ciudadCl, direccionCl, correoCl, telefonoCl, fechanacCl, user) 
            VALUES('$_id','$_nombre','$_apellido','$_ciudad','$_direccion','$_correo','$_telefono','$_fechanac','$_usuario')");
            echo "<CENTER>Se registro correctamente</CENTER>";
        }
    }
    
?>
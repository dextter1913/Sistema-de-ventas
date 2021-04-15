<?php 
class Conexion
{
    protected $host;
    protected $user;
    protected $pass;
    protected $db;
    protected $tbcliente;
    protected $tbempleado;
    protected $tbusuarios;
    protected $tbproductos;
    public function __construct($host = "atlaz.cvcpedzqpzzg.us-east-2.rds.amazonaws.com", $user = "admin", $pass = "12345678", $db = "atlazdb", $tbcliente = "cliente", $tbempleado = "empleados", $tbusuarios = "usuarios", $tbproductos = "productos")
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
        $this->tbcliente = $tbcliente;
        $this->tbempleado = $tbempleado;
        $this->tbusuarios = $tbusuarios;
        $this->tbproductos = $tbproductos;
    }

    public function EstablecerConexion()
    {
        $conexion = new mysqli($this->host, $this->user, $this->pass, $this->db);

        error_reporting(0);

        if ($conexion->connect_errno) {
            echo "lo sentimos, no se pudo completar, en breve lo solucionaremos";
        }
        return $conexion;
    }
}

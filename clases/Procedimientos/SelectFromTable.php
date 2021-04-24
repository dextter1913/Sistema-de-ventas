<?php require_once '../Conexion.php';
    class SelectFromTable
    {

        private $NombreTabla;
        private $campo;
        private $condicion;

        public function __construct($NombreTabla, $campo, $condicion) {
            $this->NombreTabla = $NombreTabla;
            $this->campo = $campo;
            $this->condicion = $condicion;
        }

        public function SelectFromTable(){
            $conexion = new Conexion();
            $query = "SELECT * FROM '$this->NombreTabla' WHERE '$this->campo' = '$this->condicion'";
            $consulta = mysqli_query($conexion->EstablecerConexion(),$query);
            $row = mysqli_fetch_array($consulta);
            return $row;
        }

    }
    

?>
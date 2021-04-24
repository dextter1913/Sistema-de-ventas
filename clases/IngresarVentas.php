<?php
require_once 'Productos.php';
require_once 'Conexion.php';
class IngresarVentas extends Productos
{
    private $fechaventa;
    private $cantidad;
    private $totalV;
    private $idProd;
    private $Factura;

    public function __construct($fechaventa, $cantidad, $id, $idProd, $Factura)
    {
        $this->fechaventa = $fechaventa;
        $this->cantidad = $cantidad;
        $this->_id = $id;
        $this->idProd = $idProd;
        $this->Factura = $Factura;
    }

    private function Resultado()
    {
        $_idprod = $this->idProd;
        $conexion = new Conexion();
        $consulta = mysqli_query($conexion->EstablecerConexion(), "SELECT * FROM productos WHERE idprod = '$_idprod'");
        $total = mysqli_fetch_array($consulta);
        $resultado = $total['precioVenta'] * $this->cantidad;
        $this->totalV = $resultado;
    }

    public function InsertarVenta(){
        $fechaventa = $this->fechaventa;
        $cantidad = $this->cantidad;
        $totalV = $this->totalV;
        $id = $this->_id;
        $idProd = $this->idProd;
        $Factura = $this->Factura;
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("INSERT INTO venta(fechaventa, cantidad, totalV, cliente, producto, Factura)
        VALUES('$fechaventa','$cantidad','$totalV','$id','$idProd','$Factura'");
        echo "Se ingreso correctamente";

    }
}
    //INSERT INTO venta(fechaventa, cantidad, totalV, cliente, producto, Factura) 
    //VALUES('$_fecVenta','$_cantidadU','$_Total','$_id','$_idprod','$_idfactura'

<?php
class IngresarVentas
{
    private $fechaventa;
    private $cantidad;
    private $totalV;
    private $Estadoventa;
    private $cliente;
    private $producto;
    private $Factura;

    public function __construct($fechaventa, $cantidad, $totalV, $Estadoventa, $cliente, $producto, $Factura)
    {
        $this->fechaventa = $fechaventa;
        $this->cantidad = $cantidad;
        $this->totalV = $totalV;
        $this->Estadoventa = $Estadoventa;
        $this->cliente = $cliente;
        $this->producto = $producto;
        $this->Factura = $Factura;
    }

    public function InsertandoVenta()
    {
        $_fecVenta = $this->fechaventa;
        $_cantidadU = $this->cantidad;
        $_Total = $this->totalV;
        $_EstadoVenta = $this->Estadoventa;
        $_id = $this->cliente;
        $_idprod = $this->producto;
        $_idfactura = $this->Factura;
        require_once 'Conexion.php';
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("INSERT INTO venta(fechaventa, cantidad, totalV, Estadoventa, cliente, producto, Factura) 
        VALUES('$_fecVenta','$_cantidadU','$_Total','$_EstadoVenta','$_id','$_idprod','$_idfactura')");
        echo "Venta ingresada, Total: " . $_Total . "<br>";
        echo "el Numero de Factura es: <b>" . $_idfactura . "</b>";
        $conexion->__destruct();
    }
}

<?php
require_once 'Productos.php';
require_once 'Conexion.php';
class IngresarVenta extends Productos
{
    function __construct($_nombreProducto, $_precio, $_precioVenta, $_categoria, $_usuario, $_descripcionP)
    {
        $this->_nombreProducto = $_nombreProducto;
        $this->_precio = $_precio;
        $this->_precioVenta = $_precioVenta;
        $this->_categoria = $_categoria;
        $this->_descripcionP = $_descripcionP;
        $this->_usuario = $_usuario;
        
    }

    public function InsertarVenta()
    {
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("INSERT INTO productos(nomProd, precioProd, precioVenta, categoria, descripcionProd, usuario) 
        VALUES('$this->_nombreProducto','$this->_precio','$this->_precioVenta','$this->_categoria','$this->_descripcionP','$this->_usuario')");
    }
    
}

<?php
require_once 'Productos.php';
require_once 'Conexion.php';
class IngresarProductos extends Productos
{
    function __construct($_nombreProducto, $_precio, $_precioVenta, $_categoria, $_usuario, $_descripcionP)//recibiendo los datos de los productos enviados en losparametros del objetos por metodo post
    {
        $this->_nombreProducto = $_nombreProducto;
        $this->_precio = $_precio;
        $this->_precioVenta = $_precioVenta;
        $this->_categoria = $_categoria;
        $this->_descripcionP = $_descripcionP;
        $this->_usuario = $_usuario;
        
    }

    public function InsertarProducto()
    {
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("INSERT INTO productos(nomProd, precioProd, precioVenta, categoria, descripcionProd, usuario) 
        VALUES('$this->_nombreProducto','$this->_precio','$this->_precioVenta','$this->_categoria','$this->_descripcionP','$this->_usuario')");
    }
    
}

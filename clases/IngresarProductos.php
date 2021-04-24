<?php
require_once 'Productos.php';
require_once 'Conexion.php';
class IngresarProductos extends Productos
{
    function __construct($_nombreProducto, $_precio, $_precioVenta, $_categoria, $_usuario, $_descripcionP) //recibiendo los datos de los productos enviados en losparametros del objetos por metodo post
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
        $_nombreProducto = $this->_nombreProducto;
        $_precio = $this->_precio;
        $_precioVenta =  $this->_precioVenta;
        $_categoria =  $this->_categoria;
        $_descripcionP =  $this->_descripcionP;
        $_usuario =  $this->_usuario;
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("INSERT INTO productos(nomProd, precioProd, precioVenta, nomCategoria, descripcionProd, user) 
        VALUES('$_nombreProducto','$_precio','$_precioVenta','$_categoria','$_descripcionP','$_usuario')");
        $conexion->__destruct(); // destruyendo la conexino
    }
}

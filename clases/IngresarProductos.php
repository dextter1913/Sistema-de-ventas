<?php
require_once 'Productos.php';
require_once 'Conexion.php';
class IngresarProductos extends Productos
{
    function __construct($_nombreProducto, $_precio, $_precioVenta, $_categoria, $_descripcionP, $_Stock, $_usuario,) //recibiendo los datos de los productos enviados en losparametros del objetos por metodo post
    {
        $this->_nombreProducto = $_nombreProducto;
        $this->_precio = $_precio;
        $this->_precioVenta = $_precioVenta;
        $this->_categoria = $_categoria;
        $this->_descripcionP = $_descripcionP;
        $this->_Stock = $_Stock;
        $this->_usuario = $_usuario;
        
    }

    public function InsertarProducto()//Ingresando contenido de atributos heredados a variables para insertar
    {
        $_nombreProducto = $this->_nombreProducto;
        $_precio = $this->_precio;
        $_precioVenta =  $this->_precioVenta;
        $_categoria =  $this->_categoria;
        $_descripcionP =  $this->_descripcionP;
        $_Stock = $this->_Stock;
        $_usuario =  $this->_usuario;
        $conexion = new Conexion();
        $conexion->EstablecerConexion()->query("INSERT INTO productos(nomProd, precioProd, precioVenta, nomCategoria, descripcionProd, Stock, user) 
        VALUES('$_nombreProducto','$_precio','$_precioVenta','$_categoria','$_descripcionP','$_Stock','$_usuario')");
        $conexion->__destruct(); // destruyendo la conexino
    }
}

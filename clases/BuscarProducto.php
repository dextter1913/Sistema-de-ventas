<?php
require_once 'SeleccionarProducto.php';
class BuscarProducto 
{

    public function ConsultarProducto()
    {
        $seleccionar = new SeleccionarProducto();
        $resultado = mysqli_fetch_assoc($seleccionar->SeleccionarProducto());
        return $resultado;
    }
}

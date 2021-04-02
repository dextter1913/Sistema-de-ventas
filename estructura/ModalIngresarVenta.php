<form action="ingresar-venta.php" method="post">
    <button name="btnIngresarFactura" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-plus"></i></button>
</form>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i>Ingresar Venta</i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-2"></div>
                        <div class="col-12 col-sm-6 col-md-8">
                            <label for="idProd">ID producto</label>
                            <input type="text" name="idprod" id="idProd" class="form-control" placeholder="Ingrese ID del Producto"><br>
                            <label for="fechaVenta">Ingrese Fecha de venta</label>
                            <input type="date" name="fechaventa" id="fechaVenta" class="form-control"><br>
                            <label for="CantidadUnidad">Cantidad unidad</label>
                            <input type="number" name="CantidadUnidad" id="CantidadUnidad" class="form-control"><br>
                        </div>
                        <div class="col-12 col-sm4 col-md-2"></div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Guardar</button>
            </div>
        </div>
    </div>
</div>
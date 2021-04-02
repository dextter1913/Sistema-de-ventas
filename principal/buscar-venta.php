<?php
include("../estructura/superior.php");
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-1"></div>
        <div class="col-12 col-md-10">
            <div class="shadow-lg p-3 mb-5 bg-body rounded">
                <form action="./submenu/busqueda-venta.php" method="post">
                    <div class="row">
                        <div class="col-12 col-md-3"></div>
                        <div class="col-12 col-md-6">
                            <div class="form-floating">
                                <input type="search" class="form-control" id="criterios" placeholder="Ingrese ID del Producto" name="criterio">
                                <label for="criterios">Ingrese ID del Producto</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-3"></div>
                    </div><br>
                    <div class="row">
                        <div class="col-4 col-md-4"></div>
                        <div class="col-4 col-md-4">
                            <input type="submit" value="Venta" class="btn btn-outline-success btn-lg" name="btnregistrarventa">
                        </div>
                        <div class="col-4 col-md-4"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col2-1 col-md-1"></div>
    </div>
</div>
<?php
include("../estructura/inferior.php");
?>
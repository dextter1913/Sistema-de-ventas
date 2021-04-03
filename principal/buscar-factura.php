<?php
include("../estructura/superior.php");
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-1"></div>
        <div class="col-12 col-md-10">
            <div class="shadow-lg p-3 mb-5 bg-body rounded">
                <form action="./submenu/busqueda-venta.php" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-3"></div>
                            <div class="col-12 col-md-6">
                            <h1><center><i>Buscar Factura</i></center></h1><br><br><br>
                                <div class="form-floating">
                                    <input type="search" class="form-control" id="criterios" placeholder="Ingrese ID de la Factura" name="criterio">
                                    <label for="criterios">Ingrese ID de la Factura</label><br><br>
                                    <center><button type="submit" class="btn btn-outline-success btn-lg" name="btnregistrarventa"><i class="fas fa-money-bill-wave"></i></button></center>
                                </div>
                            </div>
                            <div class="col-12 col-md-3"></div>
                        </div>
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
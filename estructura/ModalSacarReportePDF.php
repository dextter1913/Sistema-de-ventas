<button type="button" class="btn btn-lg btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-file-pdf"></i></button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i>Exportar PDF    </i><i class="far fa-file-pdf"></i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="reporte/reporte.php" method="post">
                        <div class="row">
                            <div class="col-12 col-sm-3 col-md-2 col-lg-1"></div>
                            <div class="col-12 col-sm-3 col-md-4 col-lg-5">
                                <label for="fechaini">Ingrese fecha Inicial</label>
                                <input type="date" name="fechaini" id="fechaini" class="form-control">
                            </div>

                            <div class="col-12 col-sm-3 col-md-4 col-lg-5">
                                <label for="fechafin">Ingrese fecha Final</label>
                                <input type="date" name="fechafin" id="fechafin" class="form-control">
                            </div>
                            <div class="col-12 col-sm-3 col-md-2 col-lg-1"></div>
                        </div><br>
                        <div class="row">
                            <div class="col-12 col-md-6"></div>
                            <div class="col-12 col-md-4"><button class="btn btn-outline-success" name="btnreportepdf">PDF</button>
                            </div>
                            <div class="col-12 col-md-2"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
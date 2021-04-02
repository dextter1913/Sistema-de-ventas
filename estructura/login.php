<br><br>
<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 col-sm-3 col-md-4 col-lg-4"></div>
            <div class="col-10 col-sm-6 col-md-4 col-lg-4">
                <div class="d-grid gap-3">
                    <div class="shadow-lg p-3 mb-5 bg-body rounded">
                        <center>
                            <h1 class="text-danger">Iniciar Sesion</h1><br>
                            <h2 class="text-secondary"><i>Atlaz</i></h2><br>
                        </center>
                        <form action="./principal/app.php" method="POST">
                            <div class="form-floating mb-3">

                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                                <label for="usuario">Usuario</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="Contraseña">
                                <label for="contraseña">Contraseña</label>
                            </div><br><br>
                            <center><input type="submit" value="Iniciar Sesion" name="btniniciarsesion" class="btn btn-secondary"></center>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1 col-sm-3 col-md-4 col-lg-4"></div>
        </div>
    </div>

</div>
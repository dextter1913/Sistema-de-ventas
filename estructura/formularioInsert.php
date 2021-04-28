<div class="container-fluid">
    <div class="row">
        <div class="col-1 col-md-1"></div>
        <div class="col-10 col-md-10">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <div class="col-4 col-md-4"></div>
                            <div class="col-4 col-md-4">
                                <h3><b><i>Registrar Cientes Nuevos</i></b></h3>
                            </div>
                            <div class="col-4 col-md-4"></div>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="shadow p-3 mb-5 bg-body rounded">
                                <form action="registro.php" method="post">
                                    <div class="row">
                                        <div class="col-12 col-md-1"></div>
                                        <div class="col-12 col-md-2">
                                            <label for="id">Documento</label>
                                            <input type="text" name="id" id="id" class="form-control" placeholder="Documento">
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label for="apellido">Apellido</label>
                                            <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido">
                                        </div>
                                        <div class="col-12 col-md-1"></div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-12 col-md-1"></div>
                                        <div class="col-12 col-md-3">
                                            <label for="inputState">Ciudad</label>
                                            <select id="inputState" class="form-select" name="ciudad">
                                                <option selected>Seleccionar</option>
                                                <option>Aguachica Cesar</option>
                                                <option>Apartadó Antioquia</option>
                                                <option>Arauca</option>
                                                <option>Armenia Quindío</option>
                                                <option>Barrancabermeja Santander</option>
                                                <option>Barranquilla Atlántico</option>
                                                <option>Bello Antioquia</option>
                                                <option>Bogotá Distrito Capital</option>
                                                <option>Bucaramanga Santander</option>
                                                <option>Buenaventura Valle del Cauca</option>
                                                <option>Buga Valle del Cauca</option>
                                                <option>Cali Valle del Cauca</option>
                                                <option>Cartago Valle del Cauca</option>
                                                <option>Cartagena Bolívar</option>
                                                <option>Caucasia Antioquia</option>
                                                <option>Cereté Córdoba</option>
                                                <option>Chia Cundinamarca</option>
                                                <option>Ciénaga Magdalena</option>
                                                <option>Cúcuta Norte de Santander</option>
                                                <option>Dosquebradas Risaralda</option>
                                                <option>Duitama Boyacá</option>
                                                <option>Envigado Antioquia</option>
                                                <option>Facatativá Cundinamarca</option>
                                                <option>Florencia Caqueta</option>
                                                <option>Floridablanca Santander</option>
                                                <option>Fusagasugá Cundinamarca</option>
                                                <option>Girardot Cundinamarca</option>
                                                <option>Girón Santander</option>
                                                <option>Ibagué Tolima</option>
                                                <option>Ipiales Nariño</option>
                                                <option>Itagüí Antioquia</option>
                                                <option>Jamundí Valle del Cauca</option>
                                                <option>Lorica Córdoba</option>
                                                <option>Los Patios Norte de Santander</option>
                                                <option>Magangué Bolivar</option>
                                                <option>Maicao Guajira</option>
                                                <option>Malambo Atlántico</option>
                                                <option>Manizales Caldas</option>
                                                <option>Medellín Antioquia</option>
                                                <option>Melgar Tolima</option>
                                                <option>Montería Córdoba</option>
                                                <option>Neiva Huila</option>
                                                <option>Ocaña Norte de Santander</option>
                                                <option>Paipa, Boyacá</option>
                                                <option>Palmira Valle del Cauca</option>
                                                <option>Pamplona Norte de Santander</option>
                                                <option>Pasto Nariño</option>
                                                <option>Pereira Risaralda</option>
                                                <option>Piedecuesta Santander</option>
                                                <option>Pitalito Huila</option>
                                                <option>Popayán Cauca</option>
                                                <option>Quibdó Choco</option>
                                                <option>Riohacha Guajira</option>
                                                <option>Rionegro Antioquia</option>
                                                <option>Sabanalarga Atlántico</option>
                                                <option>Sahagún Córdoba</option>
                                                <option>San Andrés Isla</option>
                                                <option>Santa Marta Magdalena</option>
                                                <option>Sincelejo Sucre</option>
                                                <option>Soacha Cundinamarca</option>
                                                <option>Sogamoso Boyacá</option>
                                                <option>Soledad Atlántico</option>
                                                <option>Tibú Norte de Santander</option>
                                                <option>Tuluá Valle del Cauca</option>
                                                <option>Tumaco Nariño</option>
                                                <option>Tunja Boyacá</option>
                                                <option>Turbo Antioquia</option>
                                                <option>Valledupar Cesar</option>
                                                <option>Villa de leyva</option>
                                                <option>Villa del Rosario Norte de Santander</option>
                                                <option>Villavicencio Meta</option>
                                                <option>Yopal Casanare</option>
                                                <option>Yumbo Valle del Cauca</option>
                                                <option>Zipaquirá Cundinamarca</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <label for="direccion">Direccion</label>
                                            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion">
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label for="correo">Correo</label>
                                            <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo">
                                        </div>
                                        <div class="col-12 col-md-1"></div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-12 col-md-1"></div>
                                        <div class="col-12 col-md-4">
                                            <label for="telefono">Telefono</label>
                                            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono">
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label for="fechanac">Fecha de Nacimiento</label>
                                            <input type="date" name="fechanac" id="fechanac" class="form-control">
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <label for="usuario">Usuario</label>
                                            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Ingrese Usuario">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-12 col-md-6"></div>
                                        <div class="col-12 col-md-2">
                                            <input type="submit" value="Registrar" class="btn btn-outline-success btn-lg" name="btningresar">
                                        </div>
                                        <div class="col-12 col-md-4"></div>
                                    </div>
                                </form><br>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <div class="col-4 col-md-4"></div>
                            <div class="col-4 col-md-4">
                                <h3><b><i>Registrar Productos</i></b></h3>
                            </div>
                            <div class="col-4 col-md-4"></div>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="shadow p-3 mb-5 bg-body rounded">
                                <form action="registro.php" method="post">
                                    <div class="row">
                                        <div class="col-12 col-md-3 col-lg-3">
                                            <label for="nombreN">Nombre producto</label>
                                            <input type="text" name="nombre" id="nombreN" class="form-control" placeholder="Ingrese Producto">
                                        </div>
                                        <div class="col-12 col-md-3 col-lg-3">
                                            <label for="precio">Precio Producto</label>
                                            <input type="number" name="precio" id="precio" class="form-control" placeholder="valor">
                                        </div>
                                        <div class="col-12 col-md-3 col-lg-3">
                                            <label for="precioVenta">Precio Venta</label>
                                            <input type="number" name="precioVenta" id="precioVenta" class="form-control" placeholder="valor">
                                        </div>
                                        <div class="col-12 col-md-2 col-lg-2">
                                            <label for="categoria">Categoria</label>
                                            <select id="categoria" class="form-select" name="categoria">
                                                <option selected>Seleccionar</option>
                                                <option>Mercado</option>
                                                <option>Tecnología</option>
                                                <option>Electrodomésticos</option>
                                                <option>Hogar</option>
                                                <option>Moda y accesorios</option>
                                                <option>Salud y belleza</option>
                                                <option>Bebés, niños y juguetería</option>
                                                <option>Deportes</option>
                                                <option>Bello Antioquia</option>
                                                <option>Ferretería</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-3 col-lg-3">
                                        <label for="usuario1">Usuario:</label>
                                            <input type="text" name="usuario" id="usuario1" class="form-control" placeholder="Ingrese su usuario">
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">

                                            <label for="DescripcionP">Descripcion</label>
                                            <textarea name="DescripcionP" id="DescripcionP" cols="30" rows="3" class="form-control" placeholder="Ingrese Caracteristicas del producto"></textarea>
                                        </div>
                                        <div class="col-12 col-md-2 col-lg-3">
                                            <label for="Stock">Stock y/o Cantidad</label>
                                            <input type="number" name="Stock" id="Stock" class="form-control" placeholder="Cantidad">
                                        </div>
                                        <div class="col-12 col-md-3 col-lg-3"><br/><input type="submit" value="Registrar" class="btn btn-outline-success btn-lg" name="btnregistrar"></div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-1 col-md-1"></div>
</div>
</div>
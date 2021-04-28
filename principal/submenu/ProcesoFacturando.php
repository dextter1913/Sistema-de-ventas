<?php
                        if (isset($_POST['btnModificarEstadoVenta'])) {
                            require_once '../../clases/CambiarEstadoVenta.php';
                            $CambiarEstadoVenta = new CambiarEstadoVenta($_POST['EstadoVenta'], $_POST['IdVenta']);
                            $CambiarEstadoVenta->CambiarEstadoVenta();
                            $criterio = $_GET['criterio'];
                            header("Location:Facturas.php?criterio=$criterio");
                        }

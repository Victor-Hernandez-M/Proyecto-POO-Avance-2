<?php include 'verificarSesion.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/estilos2.css">
    <title>Almacenamiento - Google Drive</title>
    <link rel="icon" href="img/favicon.ico">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="col-2 form-inline">
            <a class="navbar-brand" href="drive.html"><img src="img/drive_dp.png"></a>
            <a class="nav-link mr-auto drive" href="#" id="drive">Drive <span class="sr-only">(current)</span></a>
        </div>
        <div class="col-7">
            <select class="form-control form-control-lg ">
                <option><i class="fas fa-search">Search</i></option>
                <option>PDF</option>
                <option>Documentos</option>
                <option>Hojas de calculo</option>
                <option>Presentaciones</option>
                <option>Imagenes y fotos</option>
                <option>Videos</option>
            </select>
        </div>
        <div class="col-3">
            <div style="float: right;">
                <div class="btn-group">
                    <i type="button" class="far fa-question-circle dropdown-toggle" data-toggle="dropdown"></i>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"> Ayuda</a>
                        <a class="dropdown-item" href="#"> Capacitacion</a>
                        <a class="dropdown-item" href="#"> Actualizaciones</a><hr>
                        <a class="dropdown-item" href="#"> Terminos y politicas</a><hr>
                        <a class="dropdown-item" href="#"> Enviar comentarios</a>
                    </div>
                </div>
                <div class="btn-group">
                    <i type="button" class="fas fa-cog dropdown-toggle" data-toggle="dropdown"></i>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"> Configuracion</a>
                        <a class="dropdown-item" href="#"> Obten drive para escritorio</a>
                        <a class="dropdown-item" href="#"> Combinaciones tecla para acceso directo</a>
                    </div>                    
                </div>
                <div class="btn-group">
                    <i type="button" class="fas fa-grip-vertical dropdown-toggle" data-toggle="dropdown"></i>
                </div>
                <a href="cerrarSesion.php">Cerrar</a>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-3 col-xl-3 col-lg-3 col-md-4 bar-menu">
            <div style="text-align: left;">
                <button onclick="nuevo()" type="button" class="btn nuevo btn-lg dropdown-toggle" data-toggle="dropdown"><img src="img/+.png">Nuevo</button>
                <div class="dropdown-menu dropdown-menu-right" id="botonNuevo">

                </div>
            </div>
            <div>
                <button onclick="miUnidad()" type="button" class="btn menu btn-block"><i class="fas fa-archive" style="padding: 0 20px;"></i> Mi unidad</button> 
            </div>
            <div>
                <button onclick="compartidos()" type="button" class="btn menu btn-block"><i class="fas fa-user-friends" style="padding: 0 20px;"></i> Compartidos conmigo</button>
            </div>
            <div>
                <button onclick="recientes()" type="button" class="btn menu btn-block"><i class="far fa-clock" style="padding: 0 20px;"></i> Recientes</button>
            </div>
            <div>
                <button onclick="destacados()" type="button" class="btn menu btn-block"><i class="far fa-star" style="padding: 0 20px;"></i> Destacados</button>
            </div>
            <div>
                <button onclick="papelera()" type="button" class="btn menu btn-block"><i class="far fa-trash-alt" style="padding: 0 20px;"></i> Papelera</button> 
            </div><hr>
            <div>
                <button onclick="almacenamiento()" type="button" class="btn menu btn-block"><i class="fas fa-server" style="padding: 0 20px;"></i> Almacenamiento</button> 
            </div>
            <div id="informacionAlmacenamiento">
                <p>Lorem ipsum dolor sit amet.</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button id="comprarAlmacenamiento" type="button" class="btn btn-light">Comprar almacenamiento</button>
            </div>
        </div>
        <div class="col-9 col-xl-9 col-lg-9 col-md-8">
            <nav class="navbar navbar-light bg-light" id="navAbajo">

            </nav>
            <?php echo "Bienvenido ".$_COOKIE["nombre"]." ".$_COOKIE["apellido"]; ?>
            <div id="contenido">

            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-tittle">Carpeta Nueva</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input class="form-control form-control-sm" type="text" value="Carpeta sin titulo" style="background-color: #fff; border: 1px solid #C0C0C0;">
                    </div>
                    <div class="modal-footer">   
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="botonCancelar">Cancelar</button>
                        <button type="button" class="btn btn-primary">Crear</button>                    
                    </div>
              </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
</body>
</html>

<?php 

    session_start();
    if (!isset ($_SESSION['usuario'])) {

        header('Location: iniciosesion.html');

    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script type="text/javascript" src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
 

<link rel="stylesheet" href="../css/estilosoficina.css">

<script src="../js/oficinavirtual.js"></script>
  <title>Interfaz Profesionales</title>
</head>
<body>
  
  <header >
    <div>
      <img style="height: 80px;width: 80px;"src="../recursos/imagenes/cecarlogo.png" alt="CECAR">
    </div>
    <div>
        <h1 style="font-size: 40px;">
            CECAR
        </h1>
    </div>
    <div>
        <a href="cerrar.php" class="a" style="color: white; font-size: 15px;" >Cerrar Sesión</a>
        <img src="../recursos/imagenes/Usuario.png" alt="Usuario">
    </div>
  </header>
  
  <div class="template">
    <div >
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ftl-vertical-tab-container">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ftl-vertical-tab-menu">
                <div style="text-align: center; border:1px solid #dddede;">
                  <img src="../recursos/imagenes/Usuario.png" alt=""><br>
                  <?php 
                      echo $_SESSION['usuario'];
                    ?>
                </div>  
                <div class="list-group">
                  <a href="#" class="list-group-item active text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Bienvenida
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Gestión Historias Clinicas
                  </a>
                  <a href="#" class="list-group-item text-center">
                    <h4 class="glyphicon glyphicon-book"></h4><br/>Ver evolución tratamiento
                  </a>
                  
                </div>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ftl-vertical-tab">
                  <!-- flight section -->
                  <div class="ftl-vertical-tab-content active">
                      <center>
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Bienvenido a oficina virtual</h2>
                        
                        <div class="container my_text">
                          <div class="row justify-content-center">
                            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                              <div class="mb-3 ">
                                  <p>
                                    ¡Estimado(a) bienvenido(a) a su oficina virtual!
                                    <br><br>
                                    Acme le brinda una cordial bienvenida a Oficina Virtual, una herramienta de fácil acceso con la que podrá ralizar con toda seguridad y tranquilidad desde su casa o lugar de trabajo, los siguientes trámites: 
                                    <br><br>
                                    <ul>
                                      <li>Listado de pacientes</li>
                                      <li>Registrar Historia CLinica</li>
                                      <li>Ver Historia Clinica</li>
                                      <li>Agendar Citas a los pacientes</li>
                                      <li>Ver Evolución del Tratamiento de los pacientes</li>
                                    </ul>
                                  </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      
                      </center>
                  </div>
                  
                  <!-- train section -->
                  <div class="ftl-vertical-tab-content">
                      <center>
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Listado de Pacientes</h2>
                        <div class="container mt-3 mb-3 my_text">
                            <div style="text-align: center;font-size: 18px; ">
                            </div>
                           <div style="text-align: center;">
                           <label style = "text-aling:center;" for="">Presione este botón si el cliente viene por primera vez</label>
                            <br>
                            <a href="../html/registrarhistoriaclinica.php"><button class="btn btn-dark" style="font-size: 13px; width: 200px;"role="button">Registrar Historia Clinica</button></a>
                            <br>
                            <br>
                            <label for="">Presione este botón si el cliente viene por segunda vez o más</label>
                            <br>
                            <a href="../html/actualizarhistoriaclinica(profesionales).php"><button class="btn btn-dark" style="font-size: 13px; width: 200px" role="button">Registrar Historia Clinica</button></a>
                           </div>
                        </div>
                      </center>
                  </div>
      
                  <!-- hotel search -->
                  <div class="ftl-vertical-tab-content">
                      <center>
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Ver Evolución del tratamiento</h2>
                        
                        <div class="container my_text">

                          <div style="text-align: center;font-size: 18px;">
                            <form action="">
                              <label for="">Número de identificación</label>
                              <br>
                              <input type="number" required name="idpaciente" id="identificacion">
                              <button type="submit" class="btn btn-dark" style="color: white;" role="button">Ver</button>
                            </form>
                            </div>
                          
                           <br>
                          <div class="mb-3" style="overflow-x:auto;">
                            <table class="table table-striped table-ligth border border-5">
                              <thead>
                                <tr>
                                    <th>Fecha Sesión</th>
                                    <th>Servicio</th>
                                    <th>Sesiones</th>
                                    <th>Sesión Actual</th>
                                    <th>Resultados</th>
                                    <th>Evolución</th>
                                    <th>Descripción</th>
                                </tr>
                              </thead>
                                <tbody>
                                  <tr>
                                    <td>22/10/2022</td>
                                    <td>Servicio x</td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>x</td>
                                    <td>Positiva</td>
                                    <td>Xd</td>
                                  </tr>
                                </tbody>
                            </table>
                         </div>
                        </div>
                      </center>
                  </div>
              </div>
          </div>
    </div>
     
  </div>

  <footer class="pie-pagina" style="bottom: 0%;">
    <div class="grupo-1">
        <div class="box">
        </div>
        <div class="box">
            <h1 style="font-size: 50px;">CECAR</h1>
        </div>
        <div class="box">
            <ul class="footer-links" >
                
              </ul>
        </div>
    </div>
</footer>
</body>
</html>

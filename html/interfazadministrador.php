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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript" src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


<link rel="stylesheet" href="../css/estilosoficina.css">

<script src="../js/oficinavirtual.js"></script>
<title>Interfaz Administrador</title>
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
  <div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ftl-vertical-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ftl-vertical-tab-menu">
              <div style="text-align: center; border:1px solid #dddede;">
                <img src="../recursos/imagenes/Usuario.png" alt="">
                <p style="font-size: 20px;">Nombre Usuario</p>
              </div>  
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4 class="glyphicon glyphicon-book"></h4><br/>Bienvenida
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-book"></h4><br/>Gestión Servicios
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-book"></h4><br/>Gestión elementos
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-book"></h4><br/>Gestión categorías
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-book"></h4><br/>Gestión Empleados
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-book"></h4><br/>Gestión profesionales
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-book"></h4><br/>Definición reglas de evolución 
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
                                    <li>Registrar Servicio</li>
                                    <li>Registrar los costos de las materias primas, reactivos y maquinas</li>
                                    <li>Registrar Categorías</li>
                                    <li>Registrar Profesionales</li>
                                    <li>Definir estados de los profesionales</li>
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
                      <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Gestión Servicios</h2>
                      <div class="my_text bg-light " style="text-align: center; ">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Registrar Servicio
                              </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                <div class="row" >
                                  <div class= "col"style="width:auto;">
                                      <label for="">Nombre</label>
                                      <br>
                                    <input type="text"  id ="nombre" aria-label="First name">
                                  </div>
                                  <div  class = "col" style="width: auto;">
                                      <label for="">Categoría</label>
                                      <br>
                                    <select name="categoria" id="categoria">
                                      
                                          <?php

                                      include_once('../controladores/controladorcategoria.php');

                                      $controladorCategoria = new ControladorCategoria();
                                      $resultado = $controladorCategoria->listar();

                                      while ($fila = $resultado->fetch_assoc()){
                                        echo "<option value=".$fila['identificador'].">".$fila['nombre']."</option>";
                                      }
                                          ?>
                                    </select>
                                  </div>  
                                </div>
                                
                                  <div class="row">
                                      <div class = "col" style="width: auto;">
                                          <br>
                                          <label for="">Elementos</label>
                                          <br>
                                        <select name="materiaPrima" id="materiaPrima">
                                        <?php

                                        include_once('../controladores/controladorelementos.php');

                                        $controladorElemento = new ControladorElemento();
                                        $resultado = $controladorElemento->listar();

                                        while ($fila = $resultado->fetch_assoc()){
                                          echo "<option value=".$fila['identificador'].">".$fila["tipoelemento"]." : ".$fila['nombre']."</option>";
                                        }
                                         ?>
                                        </select>
                                        <button class="btn btn-dark" id="agregarMateria" style="font-size: 13px;" role="button">Agregar</button>
                                        <br>
                                        <br>
                                        <div class="mb-3" style="overflow-x:auto;">
                                          <table class="table table-striped table-ligth border border-5">
                                            <thead>
                                              <tr>
                                                  <th>Elementos</th>
                                              </tr>
                                            </thead>
                                              <tbody id="materiasPrimas">
                                                
                                              </tbody>
                                          </table>
                                        </div>
                                      </div>  

                                      <script>

                                        //Función para insertar las materias primas dentro de un array en js y mostrarlos en el front-en
                                        // a medida que se vayan agragando :)

                                        //Materias
                                        let arrayMaterias = [];

                                        function llenarListaMaterias(){
                                        $('#materiasPrimas').html('');

                                        arrayMaterias.map((e, key)=>{
                                        $('#materiasPrimas').append('<tr><td>'+e+'</td></tr>');
                                        });
                                        }

                                        $("#agregarMateria").click(function(){
                                        let valor = $("#materiaPrima").val();

                                        arrayMaterias.push(valor);

                                        llenarListaMaterias();

                                        $("#materiaPrima").val('');
                                        })

                                        llenarListaMaterias();

                                            //Esta función manda los valores de los inputs hacia php mediante ajax :)
                                            function guardar() {
                                              var servicios = JSON.stringify(arrayMaterias);

                                            // mediante ajax, enviamos por POST el json en la variable: arrayDeValores
                                            $.post("../controladores/controladorformulario.php",{arrayServicios:servicios,
                                            controlador:$('#controlador').val(),
                                            operacion:$('#operacion').val(),
                                            nombre:$('#nombre').val(),
                                            categoria:$('#categoria').val(),
                                            porcentajeGanancia:$('#porcentajeGanancia').val(),
                                            },
                                            function(data) {
                                              // Mostramos el texto devuelto por el archivo php
                                              // alert("Se guardó el cliente de manera exitosa!! :)");
                                              alert(data);
                                              $('#nombre').value('');
                                              $('#categoria').val('');
                                              $('#porcentajeGanancia').val('');
                                            });
                                            }
                                      </script>
        
                                  <div class= "col"style="width:auto;">
                                  <br>
                                  
                                    <div class= "col"style="width:auto;">
                                      <label for="">Porcentaje de ganancia</label>
                                      <br>
                                    <input type="number" id="porcentajeGanancia" aria-label="First name">
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row" style="display: flex; justify-content: center;">
                              <button class="btn btn-dark" onclick="guardar()" id="operacion" value="guardar" style="font-size: 13px;" 
                              role="button">Registrar</button>

                              <input type="text" name="" id="controlador" value="servicios" hidden>
                          </div>
                          <br>
                              </div>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                              <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Actualizar Servicio
                              </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                <div>
                                <label for="">Servicios</label>
                                <br>
                                <select name="" id="">
                                  <option value="0">Servicio 1</option>
                                  <option value="1">Servicio 2</option>
                                  <option value="2">Servicio 3</option>
                                </select>
                              </div>
                              <br>
                              <div class="row" >
                                <div class= "col"style="width:auto;">
                                    <label for="">Nombre</label>
                                    <br>
                                  <input type="text"  aria-label="First name">
                                </div>
                                <div class="col">
                                  <label for="">Categoría Actual</label>
                                  <br>
                                  <input type="text" name="" id="" disabled>
                                  <br>
                                </div>
                                <div  class = "col" style="width: auto;">
                                    <label for="">Categoría</label>
                                    <br>
                                  <select name="categoria" id="categoria">
                                    <option value="0">categoria 1</option>
                                    <option value="1">categoria 2</option>
                                    <option value="2">categoria 3</option>
                                  </select>
                                </div>  
                              </div>
                              
                                <div class="row">
                                    <div class = "col" style="width: auto;">
                                        <br>
                                        <label for="">Materias Primas</label>
                                        <br>
                                      <select name="Materias" id="">
                                        <option value="0">Materia P 1</option>
                                        <option value="1">Materia P 2</option>
                                        <option value="2">Materia P 3</option>
                                      </select>
                                      <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                      <br>
                                      <br>
                                      <div class="mb-3" style="overflow-x:auto;">
                                        <table class="table table-striped table-ligth border border-5">
                                          <thead>
                                            <tr>
                                                <th>Nombre Materia Prima</th>
                                            </tr>
                                          </thead>
                                            <tbody>
                                              <tr>
                                                <td>Materia P 1</td>
                                                <td><button class="btn btn-danger" style="font-size: 13px;" role="button">Eliminar</button></td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>  
        
                                    <div class = "col" style="width: auto;">
                                        <br>
                                        <label for="">Maquinas</label>
                                        <br>
                                      <select name="maquinas" id="maquinas">
                                        <option value="0">Maquina 1</option>
                                        <option value="1">Maquina 2</option>
                                        <option value="2">Maquina 3</option>
                                      </select>
                                      <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                      <br>
                                      <br>
                                      <div class="mb-3" style="overflow-x:auto;">
                                        <table class="table table-striped table-ligth border border-5">
                                          <thead>
                                            <tr>
                                                <th>Nombre Maquina</th>
                                            </tr>
                                          </thead>
                                            <tbody>
                                              <tr>
                                                <td>Maquina 1</td>
                                                <td><button class="btn btn-danger" style="font-size: 13px;" role="button">Eliminar</button></td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                    </div> 
                                </div>
                                

                              <div class="row" >
                                <div class = "col" style="width: auto;">
                                    <label for="">Reactivos</label>
                                    <br>
                                  <select name="reactivos" id="reactivos">
                                    <option value="0">Reactivo 1</option>
                                    <option value="1">Reactivo 2</option>
                                    <option value="2">Reactivo 3</option>
                                  </select>
                                  <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                  <br>
                                  <br>
                                  <div class="mb-3" style="overflow-x:auto;">
                                    <table class="table table-striped table-ligth border border-5">
                                      <thead>
                                        <tr>
                                            <th>Nombre Reactivo</th>
                                        </tr>
                                      </thead>
                                        <tbody>
                                          <tr>
                                            <td>Reactivo 1</td>
                                            <td><button class="btn btn-danger" style="font-size: 13px;" role="button">Eliminar</button></td>
                                          </tr>
                                        </tbody>
                                    </table>
                                  </div>
                                </div> 
                                <div class= "col"style="width:auto;">
                                  <label for="">subtotal (costos del servicio)</label>
                                    <br>
                                    <input type="number" disabled aria-label="subtotal">
                                    
                                  <div class= "col"style="width:auto;">
                                    <label for="">Porcentaje de ganancia</label>
                                    <br>
                                  <input type="number"  aria-label="First name">
                                  <br>
                                    <label for="">Total (Precio final del servicio)</label>
                                    <br>
                                    <input type="number" disabled aria-label="subtotal">
                                  </div>
                                </div>
                            </div>
                            <div class="row" style="display: flex; justify-content: center;">
                              <button class="btn btn-dark" style="font-size: 13px;" role="button">Actualizar</button>&emsp;
                          </div>
                          <br>
                              </div>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                              <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Listado de Servicios
                              </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                <div class="mb-3" style="overflow-x:auto;">

                                  <table class="table table-striped table-ligth border border-5">
                                    <thead>
                                      <tr>
                                          <th>Nombre del Servicio</th>
                                          <th>Costo</th>
                                          <th>Precio</th>
                                          <th>Porcentaje de ganancia</th>
                                          <th>Categorias</th>
                                          <th>Elementos</th>
                                      </tr>
                                    </thead>
                                      <tbody>
                                        
                                <?php

                                  include_once('../controladores/controladorservicio.php');

                                  $controladorServicio = new ControladorServicio();
                                  $resultado = $controladorServicio->listar();
                                  while ($fila = $resultado->fetch_assoc()){
                                      echo "<tr>";
                                          echo "<td>".$fila['nombreservicio']."</td>";
                                          echo "<td>".$fila['costo']."</td>";
                                          echo "<td>".$fila['precio']."</td>";
                                          echo "<td>".$fila['porcentajeganancia']."</td>";
                                          echo "<td>".$fila['nombrecategoria']."</td>";
                                          echo "<td>".$fila['nombreElemento']."</td>";
                                          echo "<td>
                                                  <form action='modalelementos.php' method='post'>
                                                      
                                                      <button type='submit' class='btn btn-outline-success' style='text-align: center;'>editar</button>
                                                  </form>
                                                </td>";
                                      echo "</tr>";
                                  }
                                  ?>
                                      </tbody>
                                  </table>
                                </div>
                              </div>
                              </div>
                            </div>
                        </div>
                          
                    </center>
                </div>
    
                <!-- hotel search -->
                <div class="ftl-vertical-tab-content">
                    <center>
                      <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Gestión Elementos</h2>

                      <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Registrar Elementos
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                              <div class="container my_text" style="text-align: center;">
                                <div>
                                  <div>
                                    <form action="../controladores/controladorformulario.php" method="POST">
                                    <label for="">Seleccione el elemento a registrar el precio</label>
                                    <br>
                                      <select name="tipoElemento" id="tipoElemento">
                                        <option value="MateriaPrima">Materia Prima</option>
                                        <option value="Reactivo">Reactivo</option>
                                        <option value="Maquina">Maquina</option>
                                      </select>
                                      <br>
                                      <label for="">Nombre</label>
                                      <br>
                                    <input type="text" aria-label="First name" name="nombre" >
                                  </div>
                                  <div  class = "col" style="width: auto;">
                                      <label for="">Precio</label>
                                      <br>
                                      <input type="text" aria-label="First name" name="precio">
                                      <br>
                                      <br>
                                      <button class="btn btn-dark" style="font-size: 13px;" role="button" name="operacion" value="guardar">Registrar</button>

                                      <input type="text" name ="controlador" value="elemento" hidden>
                                      </form>
                                  </div>  
                                
                                </div>
                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                              Consultar elementos
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                              <div class="container my_text">
                                <div class="row justify-content-center">
                                  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    
                                    <div class="mb-3" style="overflow-x:auto;">
                                      <table class="table table-striped table-ligth border border-5">
                                          <tr>
                                              <th>Identificador</th>
                                              <th>Nombre Elemento</th>
                                              <th>Tipo</th>
                                              <th>Precio</th>
                                              <th>Acciones</th>
                                          </tr>
                                          <?php

                                              include_once('../controladores/controladorelementos.php');

                                              $controladorElemento = new ControladorElemento();
                                              $resultado = $controladorElemento->listar();
                                              
                                              while ($fila = $resultado->fetch_assoc()){
                                                  echo "<tr>";
                                                      echo "<td>".$fila['identificador']."</td>";
                                                      echo "<td>".$fila['tipoelemento']."</td>";
                                                      echo "<td>".$fila['nombre']."</td>";
                                                      echo "<td>".$fila['precio']."</td>";
                                                      echo "<td>
                                                              <form action='modalelementos.php' method='post'>
                                                                  <input type='number' name='identificador' value=".$fila['identificador']." hidden>
                                                                  <input type='text' name='tipoElemento' value=".$fila['tipoelemento']." hidden>
                                                                  <input type='text' name='nombre' value=".$fila['nombre']." hidden>
                                                                  <input type='number' name='precio' value=".$fila['precio']." hidden>
                                                                  <button type='submit' class='btn btn-outline-success' style='text-align: center;'>editar</button>
                                                              </form>
                                                            </td>";
                                                  echo "</tr>";
                                              }
                                            ?>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </center>
                </div>

                <div class="ftl-vertical-tab-content">
                    <center>
                      <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Gestionar Categorías</h2>
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Crear Categoría
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            <form action="../controladores/controladorformulario.php" method="post">
                                <label for="">Identificador</label>
                                <br>
                                <input type="number" aria-label="First name" name="identificador" required autofocus>
                                <br>
                                <label for="">Nombre</label>
                                <br>
                                <input type="text" aria-label="First name" name="nombre" required>
                                <br>
                                <label for="">Descripción</label>
                                <br>
                                <textarea name="descripcion" id="" cols="auto" rows="auto"></textarea>
                                <br>
                                <button class="btn btn-dark" style="font-size: 13px;" role="button" name="operacion" value="guardar">Crear</button>
                                <input type="text" placeholder="Ingrese el nombre del controlador" name="controlador" value = 'categoria' hidden>
                              </form>
                            </div>
                            <br>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                              Consultar Categoría
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                              
                              <div class="mb-3" style="overflow-x:auto;">
                                <table class="table table-striped table-ligth border border-5">
                                    <tr>
                                        <th>Nombre Categoría</th>
                                        <th>Nombre Categoría</th>
                                        <th>Descripción</th>
                                        <th>Acción</th>
                                    </tr>

                                    <?php

                                      include_once('../controladores/controladorcategoria.php');

                                      $controladorCategoria = new ControladorCategoria();
                                      $resultado = $controladorCategoria->listar();

                                      while ($fila = $resultado->fetch_assoc()){
                                          echo "<tr>";
                                              echo "<td>".$fila['identificador']."</td>";
                                              echo "<td>".$fila['nombre']."</td>";
                                              echo "<td>".$fila['descripcion']."</td>";
                                              echo "<td>
                                                      <form action='modalcategorias.php' method='post'>
                                                          <input type='number' name='identificador' value=".$fila['identificador']." hidden>
                                                          <input type='text' name='nombre' value=".$fila['nombre']." hidden>
                                                          <input type='text' name='descripcion' value=".$fila['descripcion']." hidden>
                                                          <button type='submit' class='btn btn-outline-success' style='text-align: center;'>editar</button>
                                                      </form>
                                                    </td>";
                                          echo "</tr>";
                                        }
                                      ?>
                                </table>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </center>
                </div>

                <div class="ftl-vertical-tab-content">
                    <center>
                      <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Gestión Empleados</h2>
                      <div class="container my_text" style="text-align: center;">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Crear Empleados
                              </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                <form action="../controladores/controladorformulario.php" method="POST" >

                                  <div class="row">
                                    <div class="col">
                                      <label for="">Tipo de Usuario</label>
                                      <br>
                                      <select name="tipoUsuario" id="">
                                        <option value="Administrador">Administrador</option>
                                        <option value="Secretaria">Secretaria</option>
                                        <option value="Gerente">Gerente</option>
                                      </select>
                                    </div>
                                    </div>

                                <div class="row">
                                  <div class= "col">
                                      <label for="">Tipo de identificación</label>
                                      <br>
                                    <select name="tipoIdentificacion" id="tipoIdentificación">
                                      <option value="CC">Cedula de ciudadanía</option>
                                      <option value="CC">Cedula de extranjería</option>
                                    </select>
                                  </div>
                                  <div  class = "col" style="width: auto;">
                                      <label for="">#Identificación</label>
                                      <br>
                                      <input type="text" name="numeroIdentificacion" aria-label="First name" required autofocus>
                                  </div>  
                                </div>
                                
                                  <div class="row" style="justify-content: center;">
                                      
                                      <div class = "col" style="width: auto;">
                                          <br>
                                          <label for="">Nombres</label>
                                          <br>
                                          <input type="text" name="nombres" aria-label="First name" required>
                                      </div> 
                                      <div class="col">
                                        <br>
                                      <label for="">Apellidos</label>
                                      <br>
                                      <input type="text" name="apellidos" aria-label="First name" required>
                                      </div>
                                  </div>
      
                                  <div class="row" style="justify-content: center;">  
                                  <div class = "col" style="width: auto;">
                                      <br>
                                      <label for="">Telefonos</label>
                                      <br>
                                      <input type="text" style="width: 150px;" stylearia-label="First name" >
                                      <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                      <br>
                                      <br>
                                      <div class="mb-3" style="overflow-x:auto;">
                                        <table class="table table-striped table-ligth border border-5">
                                          <thead>
                                            <tr>
                                                <th>Telefonos</th>
                                            </tr>
                                          </thead>
                                            <tbody>
                                              <tr>
                                                <td>Telefono uno</td>
                                                <td><button class="btn btn-danger">Eliminar</button></td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                  </div> 
                                  <div class="col" >
                                    <br>
                                      <label for="">Usuario</label>
                                      <br>
                                      <input type="text" name="usuario" id="" > 
                                      <br>
                                      <label for="">Contraseña</label>
                                      <br>
                                        <input type="password" name="" id="" >
                                        <br>
                                      <label for="">Confirmar constraseña</label>
                                      <br>
                                      <input type="password" name="contraseña" id="" >
                                  </div>
                                  </div>
                                  
                                  <br>
                                  <div class="row" style="justify-content: center;">
                                  <button class="btn btn-dark" style="font-size: 13px;" role="button" name="operacion" value="guardar" >Registrar</button>
                                  <input type="text" name="controlador" value="empleado"  hidden>
                                  </div> 
                                </form>
                                  <br>
                                  </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                              <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Consultar empleados
                              </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                <div class="mb-3" style="overflow-x:auto;">
                                  <table class="table table-striped table-ligth border border-5">
                                      <tr>
                                          <th>Tipo de identificación</th>
                                          <th>Número identificación</th>
                                          <th>Nombres</th>
                                          <th>Apellidos</th>
                                          <th>Telefonos</th>
                                          <th>Nombre Usuario</th>
                                          <th>Tipo usuario</th>
                                          <th>Acciones</th>
                                      </tr>
                                      <?php
                                      include_once('../controladores/controladorempleado.php');

                                      $controladorEmpleado = new ControladorEmpleado();
                                      $resultado = $controladorEmpleado->listar();

                                      while ($fila = $resultado->fetch_assoc()){
                                          echo "<tr>";
                                              echo "<td>".$fila['tipoIdentificacion']."</td>";
                                              echo "<td>".$fila['numeroidentificacion']."</td>";
                                              echo "<td>".$fila['nombres']."</td>";
                                              echo "<td>".$fila['apellidos']."</td>";
                                              echo "<td>"."---"."</td>";
                                              echo "<td>".$fila['usuario']."</td>";
                                              echo "<td>".$fila['tipousuario']."</td>";
                                              echo "<td>
                                                      <form action='modalempleados.php' method='post'>
                                                          <input type='text' name='tipoIdentificacion' value=".$fila['tipoIdentificacion']." hidden>
                                                          <input type='text' name='numeroIdentificacion' value=".$fila['numeroidentificacion']." hidden>
                                                          <input type='text' name='nombres' value=".$fila['nombres']." hidden>
                                                          <input type='text' name='apellidos' value=".$fila['apellidos']." hidden>
                                                          <input type='text' name='usuario' value=".$fila['usuario']." hidden>
                                                          <input type='text' name='tipoUsuario' value=".$fila['tipousuario']." hidden>
                                                          <button type='submit' class='btn btn-outline-success' style='text-align: center;'>editar</button>
                                                      </form>
                                                    </td>";
                                          echo "</tr>";
                                        }
                                      ?>
                                  </table>
                                </div>
                              </div>
                              </div>
                            </div>
                          </div>
                        
                        </center>
                          </div>
                    
                    <div class="ftl-vertical-tab-content">
                      <center>
                        <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Gestión profesionales</h2>
                        <div class="container my_text" style="text-align: center;"> 
                          <div class="accordion accordion-flush" id="accordionFlushExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Registrar Profesionales
                              </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                <form action="../controladores/controladorformulario.php" method="post">
                                <div class="row">
                                  <div class= "col"">
                                      <label for="">Tipo de identificación</label>
                                      <br>
                                    <select name="tipoidentificacion" id="tipoidentificacion">
                                      <option value="CC">Cedula de ciudadanía</option>
                                      <option value="CE">Cedula de extranjería</option>
                                    </select>
                                  </div>
                                  <div  class = "col" style="width: auto;">
                                      <label for="">#Identificación</label>
                                      <br>
                                      <input type="text" name="identificacion" aria-label="First name" required autofocus>
                                  </div>  
                                </div>
                                
                                  <div class="row" style="justify-content: center;">
                                      <div class = "col" style="width: auto;">
                                          <br>
                                          <label for="">#Tarjeta Profesional</label>
                                          <br>
                                          <input type="text" name="numerotarjetaprofesional" aria-label="First name" required>
                                      </div>  
                                      <div class = "col" style="width: auto;">
                                          <br>
                                          <label for="">Nombres</label>
                                          <br>
                                          <input type="text" name="nombres" aria-label="First name" required>
                                      </div> 
                                  </div>
      
                                  <div class="row" style="justify-content: center;">
                                  <div class = "col" style="width: auto;">
                                      <br>
                                      <label for="">Apellidos</label>
                                      <br>
                                      <input type="text" name="apellidos" aria-label="First name" required>
                                      <br>
                                      <label for="">Experticia</label>
                                      <br>
                                      <input type="text" style="width: 150px;" stylearia-label="First name">
                                      <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                      <br>
                                      <br>
                                      <div class="mb-3" style="overflow-x:auto;">
                                        <table class="table table-striped table-ligth border border-5">
                                          <thead>
                                            <tr>
                                                <th>Experticia</th>
                                            </tr>
                                          </thead>
                                            <tbody>
                                              <tr>
                                                <td>Experticia 1</td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                      <br>
                                      <label for="">Estudios Realizados</label>
                                      <br>
                                      <input type="text" style="width: 150px;" stylearia-label="First name">
                                      <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                      <br>
                                      <br>
                                      <div class="mb-3" style="overflow-x:auto;">
                                        <table class="table table-striped table-ligth border border-5">
                                          <thead>
                                            <tr>
                                                <th>Estudios Realizados</th>
                                            </tr>
                                          </thead>
                                            <tbody>
                                              <tr>
                                                <td>Estudio Uno</td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                  </div>  
                                  <div class = "col" style="width: auto;">
                                      <br>
                                      <label for="">Telefonos</label>
                                      <br>
                                      <input type="text" style="width: 150px;" stylearia-label="First name">
                                      <button class="btn btn-dark" style="font-size: 13px;" role="button">Agregar</button>
                                      <br>
                                      <br>
                                      <div class="mb-3" style="overflow-x:auto;">
                                        <table class="table table-striped table-ligth border border-5">
                                          <thead>
                                            <tr>
                                                <th>Telefonos</th>
                                            </tr>
                                          </thead>
                                            <tbody>
                                              <tr>
                                                <td>Telefono uno</td>
                                                <td><button class="btn btn-danger">Eliminar</button></td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                      <br>
                                      <label for="">Usuario</label>
                                      <br>
                                      <input type="text" name="usuario" id="" required>
                                      <br>
                                      <label for="">Contraseña</label>
                                      <br>
                                        <input type="password" name="" id="" required>
                                        <br>
                                      <label for="">Confirmar contraseña</label>
                                      <br>
                                      <input type="password" name="contraseña" id="" required>
                                  </div> 
                                  </div>

                                  <br>
                                  <div class="row" style="justify-content: center;">
                                  <button class="btn btn-dark" style="font-size: 13px;" role="button" name="operacion" value="guardar">Registrar</button>
                                  <input type="text" name="controlador" value="profesionales" hidden>
                                  </div> 
                                </form>
                                  <br>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                              <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Consultar profesionales
                              </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                <div class="mb-3" style="overflow-x:auto;">
                                  <table class="table table-striped table-ligth border border-5">
                                      <tr>
                                          <th>Tipo de identificación</th>
                                          <th>Número identificación</th>
                                          <th>Número tarjeta profesional</th>
                                          <th>Nombres</th>
                                          <th>Apellidos</th>
                                          <th>Telefonos</th>
                                          <th>Experticia</th>
                                          <th>Estudios Realizados</th>
                                          <th>Nombre Usuario</th>
                                          <th>Tipo usuario</th>
                                          <th>Estado</th>
                                          <th>Acciones</th>
                                      </tr>
                                      <?php
                                          include ('../controladores/controladorprofesional.php');

                                          $controladorProfesional = new ControladorProfesional();
                                          $resultado = $controladorProfesional->listar();

                                          while ($fila = $resultado->fetch_assoc()){
                                              echo "<tr>";
                                                  echo "<td>".$fila['tipoidentificacion']."</td>";
                                                  echo "<td>".$fila['identificacion']."</td>";
                                                  echo "<td>".$fila['numerotarjetaprofesional']."</td>";
                                                  echo "<td>".$fila['nombres']."</td>";
                                                  echo "<td>".$fila['apellidos']."</td>";
                                                  echo "<td>"."---"."</td>";
                                                  echo "<td>"."---"."</td>";
                                                  echo "<td>"."---"."</td>";
                                                  echo "<td>".$fila['usuario']."</td>";
                                                  echo "<td>".$fila['tipousuario']."</td>";
                                                  echo "<td>".$fila['estado']."</td>";
                                                  echo "<td>
                                                          <form action='modalprofesionales.php' method='post'>
                                                              <input type='text' name='tipoidentificacion' value=".$fila['tipoidentificacion']." hidden>
                                                              <input type='text' name='identificacion' value=".$fila['identificacion']." hidden>
                                                              <input type='text' name='numerotarjetaprofesional' value=".$fila['numerotarjetaprofesional']." hidden>
                                                              <input type='text' name='nombres' value=".$fila['nombres']." hidden>
                                                              <input type='text' name='apellidos' value=".$fila['apellidos']." hidden>
                                                              <input type='text' name='usuario' value=".$fila['usuario']." hidden>
                                                              <input type='text' name='tipoUsuario' value=".$fila['tipousuario']." hidden>
                                                              <input type='text' name='estado' value=".$fila['estado']." hidden>
                                                              <button type='submit' class='btn btn-outline-success' style='text-align: center;'>editar</button>
                                                          </form>
                                                        </td>";
                                              echo "</tr>";
                                          }
                                        ?>
                                  </table>
                                </div>
                              </div>
                              </div>
                            </div>
                          </div>
                      </div>

                      

                        <div class="ftl-vertical-tab-content">
                        <center>
                          <h2 class="border border-3 text-center" style="margin-top: 0;color:#253237">Definición reglas de evolución</h2>
                            
                          <div class="container my_text" style="text-align: center;">
                          
                              <div class="justify-content-center">
                                  <label for="">Servicio</label>
                                  <br>
                                  <select name="" id="serviciosId">

                                  <?php

                                  include_once("../controladores/controldadorservicio.php");

                                  $controladorGenerico = new ControladorServicio();

                                  $resultado= $controladorGenerico->listar();

                                  while($fila= $resultado->fetch_assoc()){
                                    echo "<option value =' ".$fila["identificador"]." '>".$fila["nombre"]."</option>";
                                  }

                                  ?>
                                    
                                  </select>
                                </div>

                            <div class="row justify-content-center">
                              <div class= "col">
                                <label for="">Peso</label>
                                <br>
                                <select name="" id="variacionP">
                                  <option value=""></option>
                                  <option value="Incremento">incremento</option>
                                  <option value="Decremento">decremento</option>
                                </select>
                                <br>
                                
                              </div>

                              <div  class = "col" style="width: auto;">
                                <label for="">Presión sistolica</label>
                                <br>
                                <select name="" id="variacions">
                                  <option value=""></option>
                                  <option value="Incremento">incremento</option>
                                  <option value="Decremento">decremento</option>
                                </select>
                                <br>
                                <label for="">Presion Diastolica</label>
                                <br>
                               <select name="" id="variacionD">
                               <option value=""></option>
                                <option value="Incremento">incremento</option>
                                <option value="Decremento">decremento</option>
                               </select>
                                
                              </div>  

                            </div>

                            <div class="justify-content-center">
                                <label for="">Evolución</label>
                                <br>
                                <select name="" id="evolucion">
                                  <option value="positiva">Positiva</option>
                                  <option value="negativa">Negativa</option>
                                </select>
                            </div>
                            <div class="justify-content-center">
                              <br>
                              <button onclick="definir()" id="operacionE" value="definir" class="btn btn-info" style="font-size: 15px;">Definir</button>
                              <input type="text" name="" id="controladorE" value="evolucion" hidden>
                              <script>

                                        //Función para insertar las materias primas dentro de un array en js y mostrarlos en el front-en
                                        // a medida que se vayan agragando :)

                                            //Esta función manda los valores de los inputs hacia php mediante ajax :)
                                            function definir() {
                                              var servicios = JSON.stringify(arrayMaterias);

                                            // mediante ajax, enviamos por POST el json en la variable: arrayDeValores
                                            $.post("../controladores/controladorformulario.php",{
                                              controladorE:$('#controladorE').val(),
                                              operacionE:$('#operacionE').val(),
                                            serviciosId:$('#serviciosId').val(),
                                            variacionP:$('#variacionP').val(),
                                            variacionS:$('#variacions').val(),
                                            variacionD:$('#variacionD').val(),
                                            evolucion:$('#evolucion').val(),
                                            },
                                            function(data) {
                                              // Mostramos el texto devuelto por el archivo php
                                              // alert("Se guardó el cliente de manera exitosa!! :)");
                                              document.writeln(data);
                                              
                                            });
                                            }
                                      </script>
                          </div>
                          </div>
                          </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>


<footer class="pie-pagina">
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

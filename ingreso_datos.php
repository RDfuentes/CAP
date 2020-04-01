<?php 
require_once("metodos_php/conexion/conexion.php");
?> 


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>CAP SAN PEDRO</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">

    <!-- On of Sideba -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="inicio.php">
        <div> CAP - </div>
        <div class="sidebar-brand-text mx-3" class="sidebar-brand-icon rotate-n-15" >SAN PEDRO</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Ingreso de datos
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-id-badge"></i>
          <span>Datos de personas</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a href="registro_personas.php"> </a>
            <a class="collapse-item" href="ingreso_datos.php"><button class="btn btn-danger btn-block">Ingreso de datos</button></a>
            <a class="collapse-item" href="consultar_datos.php"><button class="btn btn-warning btn-block">Consultar</button></a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fa fa-address-card"></i>
          <span>Vacunas</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="aplicacion_vacunas.php"><button class="btn btn-danger btn-block">Aplicar vacuna</button></a>
            <a class="collapse-item" href="consultar_vacunas.php"><button class="btn btn-warning btn-block">Consultar</button></a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseunificado" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fa fa-cogs"></i>
          <span>Reporte Unificado</span>
        </a>
        <div id="collapseunificado" class="collapse" aria-labelledby="headingunificado" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="generar_reporte_unificado.php"><button class="btn btn-success btn-block" >Generar reporte</button></a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Reportes
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReportes" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fa fa-print"></i>
          <span>Consultar Reportes</span>
        </a>
        <div id="collapseReportes" class="collapse" aria-labelledby="headingReportes" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="reporte_centros.php"><button class="btn btn-danger btn-block" >Reporte Centros</button></a>
          <a class="collapse-item" href="reporte_unificado.php"><button class="btn btn-warning btn-block" >Reporte Unificado</button></a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Agregar Usuarios
      </div>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Usuarios</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="nuevo_usuario.php"><button class="btn btn-success btn-block" >Nuevo Usuario</button></a> 
          </div>
        </div>
      </li>

    
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">


        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">                
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><button class="btn btn-success">Activo</button></span>
              </a>
              
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a href="index.php" class="dropdown-item"><button class="btn btn-danger btn-block">Salir</button></a>
              </div>
              
            </li>
          </ul>

        </nav> 

        <!-- End of Topbar -->

    <!-- ----------------------------------------------  CONTENIDO DE CADA MODULO ---------------------------------------->

    <script>
      function soloLetras(e)
        {
           key = e.keyCode || e.which;
           tecla = String.fromCharCode(key).toLowerCase();
           letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
           especiales = "8-37-39-46";

           tecla_especial = false
           for(var i in especiales){
                if(key == especiales[i]){
                    tecla_especial = true;
                    break;
                }
            }

            if(letras.indexOf(tecla)==-1 && !tecla_especial){
                return false;
            }
        }
    </script>



    <!-- ----------------------------------------------  FIN DE LA VALIDACION  ---------------------------------------- -->


  <!-- ----------------------------------------------  CONTENIDO DE CADA MODULO ---------------------------------------- -->


        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
              <div class="card">
                <div class="header">

                  <div class="content">
                    <form  class="text-center border border-light p-5" action="metodos_php/insert/insertarpersonas.php"  method="POST">
                      
                      <h3 style="color: red">DATOS DEL RESPONSABLE</h3>
                      <p style="color: black">INGRESE LOS DATOS QUE SE SOLICITAN</p>

                      <div class="row">

                                          <div class="col-md-3 col-xs-12">
                                            <div class="form-group">
                                              <label>Primer Nombre</label>
                                              <input type="text"  onkeypress="return soloLetras(event)" placeholder="Primer Nombre" name="primer_nombre_res" class="form-control" required="true">
                                            </div>
                                          </div>

                                          <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                                  <label>Segundo Nombre</label>
                                                  <input type="text" onkeypress="return soloLetras(event)" placeholder="Segundo Nombre" name="segundo_nombre_res"  class="form-control">
                                              </div> 
                                          </div>

                                          <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                                  <label>Primer Apellido</label>
                                                  <input type="text" onkeypress="return soloLetras(event)" placeholder="Primer Apellido" name="primer_apellido_res"  class="form-control" required="true"/>
                                              </div>
                                          </div>

                                          <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                                  <label>Segundo Apellido</label>
                                                  <input type="text" onkeypress="return soloLetras(event)" placeholder="Segundo Apellido" name="segundo_apellido_res" class="form-control">
                                               </div>
                                          </div>
                      </div>

                      <div class="row">

                                          <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                              
                                                  <label>Fecha Nacimiento</label>
                                                  <input type="date" name="fecha_nacimiento_res" class="form-control" required="true" max="<?php echo date('Y-m-d',strtotime(date("Y-m-d", time()) . "-2994 days")); ?>"/>
                                              </div>
                                          </div>

                                          <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                                  <label>Parentesco</label>
                                                  <select type="text"  name="id_persona" class="form-control" required="true" >
                                                  <?php 
                                                  $query_tipo_persona= mysqli_query($conectar, "SELECT id_tipo_persona,persona_tipo FROM tipo_persona"); 
                                                  $resultado_tipo_persona= mysqli_num_rows($query_tipo_persona); 
                                              
                                                  ?> 
                                                  <option disabled selected>Parentesco</option>
                                                    <?php 
                                                    if($resultado_tipo_persona>0){
                                                        while($tipo_persona = mysqli_fetch_array($query_tipo_persona)){
                                                      ?> 
                                                      <option value="<?php echo $tipo_persona['id_tipo_persona']; ?>"> <?php  echo $tipo_persona['persona_tipo']; ?> </option>
                                              <?php
                                                        }
                                                    }
                                              ?> 
                                                  </select>
                                              </div>
                                          </div>

                                          <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                                  <label>No. Telefono</label>
                                                  <input type="number" placeholder="Ingrese telefono" name="telefono_res"  class="form-control" pattern="[0-9]{8}" required="true"/>
                                              </div>
                                          </div>

                                          <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                                  <label>Fallecimiento Niño(a)</label>
                                                  <select name="fall_menor" class="form-control" required="true">
                                                  <option>No</option>
                                                  <option>Si</option>
                                                  </select>
                                              </div>
                                          </div>
                        
                      </div>

                      <div class="row">
                        
                                            <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                                  <label>Departamento</label>
                                                  <select type="text" name="departamento" class="form-control">
                                                  <?php 
                                                  $query_departamento= mysqli_query($conectar, "SELECT id_departamento, nombre_departamento FROM departamento"); 
                                                  $resultado_departamento= mysqli_num_rows($query_departamento); 
                                                  //mysqli_close($conectar);
                                                  ?> 
                                                  <option disabled selected>Departamento</option>
                                                    <?php 
                                                    if($resultado_departamento>0){
                                                        while($departamento_res = mysqli_fetch_array($query_departamento)){
                                                      ?> 
                                                      <option value="<?php echo $departamento_res['id_departamento']; ?>"> <?php echo $departamento_res['nombre_departamento']; ?> </option>
                                              <?php
                                                        }
                                                    }
                                              ?> 
                                                  </select>
                                              </div>
                                          </div>

                                          <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                                  <label>Municipio</label>
                                                  <select  type="text"  name="municipio" class="form-control">
                                                  <?php 
                                                  $query_municipio= mysqli_query($conectar, "SELECT id_municipio, nombre_municipio FROM municipio"); 
                                                  $resultado_municipio= mysqli_num_rows($query_municipio); 
                                                  //mysqli_close($conectar);
                                                  ?> 
                                                    <option disabled selected>Municipio</option>
                                                    <?php 
                                                    if($resultado_municipio>0){
                                                        while($municipio_res = mysqli_fetch_array($query_municipio)){
                                                      ?> 
                                                      <option value="<?php echo $municipio_res['id_municipio']; ?>"> <?php echo $municipio_res['nombre_municipio']; ?> </option>
                                              <?php
                                                        }
                                                    }
                                              ?> 
                                                  </select>
                                              </div>
                                          </div>

                                          <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                                  <label>Comunidad</label>
                                                  <select type="text"  name="comunidad" class="form-control">
                                                 <?php 
                                                  $query_comunidad= mysqli_query($conectar, "SELECT id_comunidad, nombre_comunidad FROM comunidad"); 
                                                  $resultado_comunidad= mysqli_num_rows($query_comunidad); 
                                                  //mysqli_close($conectar);
                                                  ?> 
                                                      
                                                    <?php 
                                                    if($resultado_comunidad>0){
                                                        while($comunidad_res = mysqli_fetch_array($query_comunidad)){
                                                      ?> 
                                                      <option value="<?php echo $comunidad_res['id_comunidad']; ?>"> <?php echo $comunidad_res['nombre_comunidad']; ?> </option>
                                              <?php
                                                        }
                                                    }
                                              ?> 
                                                  </select>
                                               </div>
                                          </div>

                                          <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                                  <label>Calle, zona, lote</label>
                                                  <input type="text" placeholder="calle, zona, lote" name="calle_zona" class="form-control">
                                               </div>
                                          </div>      

                      </div>

                      <div class="row">
                        
                                          <div class="col-md-12 col-xs-12">
                                              <div class="form-group">
                                                  <label>Direccion Alterna</label>
                                                  <input type="text" placeholder="Ingrese direccion alterna" name="direccion_alterna"  class="form-control"/>
                                              </div>
                                          </div>


                      </div>
                                          

                      <h3 style="color: red">DATOS DEL MENOR</h3>

                      <div class="row">
                        
                                              <div class="col-md-12 col-xs-12">
                                                 <div class="form-group">
                                                    <label>Numero de identificacion personal del menor</label>
                                                    <input type="number" placeholder="Ingrese CUI" name="cui_menor" class="form-control" pattern="[0-9]{15}">
                                                 </div>
                                              </div>
                      </div>

                      <div class="row">
                        
                                              <div class="col-md-3 col-xs-12">
                                                  <div class="form-group">
                                                      <label>Primer Nombre</label>
                                                      <input type="text"  placeholder="Primer Nombre" onkeypress="return soloLetras(event)" name="primer_nombre_menor" class="form-control" required="true">
                                                  </div>
                                              </div>

                                              <div class="col-md-3 col-xs-12">
                                                  <div class="form-group">
                                                      <label>Segundo Nombre</label>
                                                      <input type="text"   placeholder="Segundo Nombre" onkeypress="return soloLetras(event)" name="segundo_nombre_menor" class="form-control" >
                                                  </div>
                                              </div>

                                              <div class="col-md-3 col-xs-12">
                                                  <div class="form-group">
                                                      <label>Primer Apellido</label>
                                                      <input type="text"  placeholder="Primer Apellido" onkeypress="return soloLetras(event)"  name="primer_apellido_menor" class="form-control" required="true">
                                                  </div>
                                              </div>

                                              <div class="col-md-3 col-xs-12">
                                                  <div class="form-group">
                                                      <label>Segundo Apellido</label>
                                                      <input type="text"  placeholder="Segundo Apellido" onkeypress="return soloLetras(event)" name="segundo_apellido_menor" class="form-control">
                                                  </div>
                                              </div>

                      </div>

                      <div class="row">
                        
                                          <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                                  <label>Fecha Nacimiento</label>
                                                  <input type="date" name="fecha_nac_menor" class="form-control" placeholder="Company" required="true" min="<?php echo date('Y-m-d',strtotime(date("Y-m-d", time()) . "-6 days")); ?>" max="<?php echo date('Y-m-d',strtotime(date("Y-m-d", time()) . "+0")); ?>"  >
                                              </div>
                                          </div>
                                  
                                           <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                              <label>Sexo</label>
                                                  <select name="sexo_menor" class="form-control" required="true">
                                                  <option disabled selected>Sexo</option>
                                                  <option>Masculino</option>
                                                  <option>Femenino</option>
                                                  </select>
                                              </div>
                                          </div>

                                          <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                              <label>Pueblo</label>
                                              <select type="text"  name="id_pueblo" class="form-control">
                                                  <?php 
                                                  $query_pueblo_menor= mysqli_query($conectar, "SELECT id_pueblo, nombre_pueblo FROM pueblo"); 
                                                  $resultado_pueblo= mysqli_num_rows($query_pueblo_menor); 
                                                
                                                  ?> 
                                                  <option disabled selected>Pueblo</option>
                                                    <?php 
                                                    if($resultado_pueblo>0){
                                                        while($tipo_pueblo = mysqli_fetch_array($query_pueblo_menor)){
                                                      ?> 
                                                      <option value="<?php echo $tipo_pueblo['id_pueblo']; ?>"> <?php  echo $tipo_pueblo['nombre_pueblo']; ?> </option>
                                              <?php
                                                        }
                                                    }
                                              ?> 
                                                  </select>
                                                  
                                          
                                              </div>
                                          </div>
                                       
                                          <div class="col-md-3 col-xs-12">
                                              <div class="form-group">
                                              <label>Comunidad Lingüística</label>
                                              <select type="text"  name="id_comunidad_linguistica" class="form-control">
                                                  <?php 
                                                  $query_comunidad_menor= mysqli_query($conectar, "SELECT id_comunidad_linguistica, nombre_comunidad FROM comunidad_linguistica"); 
                                                  $resultado_comunidad_linguistica= mysqli_num_rows($query_comunidad_menor); 
                                                  mysqli_close($conectar);
                                                  ?> 
                                                  <option disabled selected>Comunidad</option>
                                                    <?php 
                                                    if($resultado_comunidad_linguistica>0){
                                                        while($tipo_comunidad_l = mysqli_fetch_array($query_comunidad_menor)){
                                                      ?> 
                                                      <option value="<?php echo $tipo_comunidad_l['id_comunidad_linguistica']; ?>"> <?php  echo $tipo_comunidad_l['nombre_comunidad']; ?> </option>
                                              <?php
                                                        }
                                                    }
                                              ?> 
                                                  </select>
                                                  
                                              </div>
                                          </div>

                      </div>


                      <button type="submit" class="btn btn-warning btn-info btn-fill pull-left">Guardar</button>

                    </form>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>

        
<!-- ---------------------------------------------------  FINAL DEL CONTENIDO DE CADA MODULO  ------------------------------>
 
<!-- Begin Page Content -->
        <div class="container-fluid"></div>

        </div>
      </div>
    </div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="assets/js/sb-admin-2.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="assets/js/demo/chart-area-demo.js"></script>
  <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>

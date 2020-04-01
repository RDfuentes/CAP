<?php 
require_once("metodos_php/conexion/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

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
<!-- ---------------------------------------------------  CONTENIDO DE CADA MODULO  -------------------------------------------- -->


        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
              <div class="card">
                <div class="header">

                  <div class="content">
                    <form  class="text-center border border-light p-5" action="reporte_unificado.php"  method="POST">
                      
                      <h3 style="color: red">GENERAR REPORTE UNIFICADO</h3>
                      <p style="color: black">INGRESE LOS DATOS QUE SE SOLICITAN</p>

                      <div class="row"> 
                                   
                                         <div class="col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label>Inicio de mes</label>
                                                <input type="Date" max="<?php echo date('Y-m-d',strtotime(date("Y-m-d", time()) . "+0 days")); ?>" name="fecha_inicio" class="form-control" required="true" >
                                            </div>
                                          </div>
                            
                                          <div class="col-md-4 col-xs-12">
                                              <div class="form-group"> 
                                              <label>Mes final</label>
                                              <input type="Date" max="<?php echo date('Y-m-d',strtotime(date("Y-m-d", time()) . "+0 days")); ?>" name="fecha_final" class="form-control" required="true" >
                                              </div>
                                          </div> 

                                        <!--Integrar a funcion de busqueda por cap--> 
                                        <div class="col-md-4 col-xs-12">
                                            <div class="form-group"> 
                                            <label>Centro Aplicacion</label>
                                                <select name="id_cap" id="id_cap" class="form-control" required="true">
                                                <?php 
                                                $buscar_centro_aplicacion= mysqli_query($conectar, "SELECT id_centro_salud, servicio_salud FROM centro_salud"); 
                                                $resultado_centro_aplicacion= mysqli_num_rows($buscar_centro_aplicacion); 
                                                //mysqli_close($conectar);
                                                ?> 
                                                <option disabled selected>Seleccione Centro de Aplicacion</option>
                                                  <?php 
                                                  if($resultado_centro_aplicacion>0){
                                                      while($listar_centro_aplicacion = mysqli_fetch_array($buscar_centro_aplicacion)){
                                                    ?> 
                                                      <option value="<?php echo $listar_centro_aplicacion['id_centro_salud']; ?>"> <?php  echo $listar_centro_aplicacion['servicio_salud']; ?> </option>
                                                <?php
                                                      }
                                                  }
                                                 ?> 
                                                </select>
                                         </div>
                                      </div>
                          </div>

                          <button type="submit" class="btn btn-warning btn-fill pull-right" name="btn1">Buscar por fecha</button>

                          <li class="btn btn-success btn-fill pull-right" ><a onclick="tableToExcel('example1', 'W3C Example Table')" target="_blank" ><i class="fa fa-print"></i> IMPRIMIR EXCEL</a></li>

                          <div class="clearfix"></div>


                    </form>
                  </div>

                  <div class="content">
                          <div class="container-fluid">
                              
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="card">
                                          <div class="header"><br>
                                              <h4 class="title text-center" style="color:red;" ><strong>Reportes generados</strong></h4>
                                          </div>

                                          <div class="content table-responsive table-full-width">

                                              <table id="example1" class="table table-hover table-striped"
                                              summary="Code page support in different versions of MS Windows." rules="groups" frame="hsides" ><caption>REPORTE UNIFICADO</caption>

                                              <thead>
                                                  <tr style="color:black;">
                                                          <td><strong>Nombre Vacuna</strong></td>
                                                          <td><strong>Cantidad Aplicada</strong></td>
                                                          <td><strong>Vacunas aplicadas</strong></td>
                                                          <td><strong>Fecha Aplicacion</strong></td>
                                          
                                                  </tr>
                                              </thead>
                                                          <?php 
                                                          
                                                          
                                                          if(isset($_POST['btn1'])){ 
                                                                  $inicio=$_POST['fecha_inicio']; 
                                                                  $final=$_POST['fecha_final'];
                                                                  $cap=$_POST['id_cap'];
                                                                  $sql="CALL reporte_unificado('$inicio','$final','$cap');"; 
                                                                  $resultado=mysqli_query($conectar,$sql); 
                                                                  while($mostrar=mysqli_fetch_array($resultado)){                                 
                                                          ?> 
                                                          <tr style="color:gray;">             
                                                                  <td><?php echo $mostrar['nombre_vacuna'] ?></td>
                                                                  <td><?php echo $mostrar['cantidad'] ?></td>
                                                                  <td><?php echo $mostrar['servicio_salud'] ?></td>
                                                                  <td><?php echo $mostrar['fecha_registro'] ?></td>

                                                          </tr>
                                                 <?php 
                                                                      }
                                                                  }
                                                                  else{ 
                                                                          echo "No se ha consultado nada";
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
            </div>
          </div>
        </div>

<!-- ---------------------------------------------------  FINAL DEL CONTENIDO DE CADA MODULO  ---------------------------------- -->      
        <!-- Begin Page Content -->
        <div class="container-fluid"></div>

        </div>
      </div>
    </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


    <!-- JavaScript de Excel  -->
<script type="text/javascript" src="assets/datatables/TablaExcel.js"></script>

  <!-- Button Responsive -->
  <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>

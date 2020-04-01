<?php   
include 'conexion.php'; 
    //DATOS SOBRE EL CAP Y LA FECHA
    $fecha=$_POST['fecha'];
    $id_centro_aplicacion=$_POST['id_centro_aplicacion'];
    $hepatitis=$_POST['hepatitis'];
    $bcg=$_POST['bcg'];
  
    $polio1=$_POST['polio1'];
    $penta1=$_POST['penta1'];

    $rota1=$_POST['rota1'];
    $neumococo1=$_POST['neumococo1'];

    $polio2=$_POST['polio2'];
    $penta2=$_POST['penta2'];
    $rota2=$_POST['rota2'];
    $neumococo2=$_POST['neumococo2'];
 
    $polio3=$_POST['polio3'];
    $penta3=$_POST['penta3']; 
    $spr1=$_POST['spr1'];
    $neumococo=$_POST['neumococo'];
    $refuerzo=$_POST['refuerzo'];
    $spr2=$_POST['spr2'];
    $polior1=$_POST['polior1'];
    $dptr1=$_POST['dptr1'];
    $polior2=$_POST['polior2'];
    $dptr2=$_POST['dptr2'];
    $inf1=$_POST['inf1'];
    $inf2=$_POST['inf2'];
    $inf3=$_POST['inf3'];
    $inf4=$_POST['inf4'];
    $inf5=$_POST['inf5'];
    $inf6=$_POST['inf6'];

    $insertar_unificado_vacuna="INSERT INTO unificado_vacunas(id_centro_salud, fecha_registro )VALUES ('$id_centro_aplicacion','$fecha')"; 
    $vac= $conectar->query($insertar_unificado_vacuna); 
    $unificado_vacunas=$conectar->insert_id; 

    $insert_unificado="INSERT INTO unificado(id_vacunas, id_unificado,cantidad) VALUES
    ('1','$unificado_vacunas','$hepatitis'), 
    ('2','$unificado_vacunas','$bcg'),
    ('3','$unificado_vacunas','$polio1'), 
    ('4','$unificado_vacunas','$penta1'),
    ('5','$unificado_vacunas','$rota1'), 
    ('6','$unificado_vacunas','$neumococo1'),
    ('7','$unificado_vacunas','$polio2'), 
    ('8','$unificado_vacunas','$penta2'), 
    ('9','$unificado_vacunas','$rota2'), 
    ('10','$unificado_vacunas','$neumococo2'), 
    ('11','$unificado_vacunas','$polio3'), 
    ('12','$unificado_vacunas','$penta3'), 
    ('13','$unificado_vacunas','$spr1'), 
    ('14','$unificado_vacunas','$neumococo'), 
    ('15','$unificado_vacunas','$refuerzo'), 
    ('16','$unificado_vacunas','$spr2'), 
    ('17','$unificado_vacunas','$polior1'), 
    ('18','$unificado_vacunas','$dptr1'), 
    ('19','$unificado_vacunas','$polior2'), 
    ('20','$unificado_vacunas','$dptr2'), 
    ('21','$unificado_vacunas','$inf1'), 
    ('22','$unificado_vacunas','$inf2'), 
    ('23','$unificado_vacunas','$inf3'), 
    ('24','$unificado_vacunas','$inf4'), 
    ('25','$unificado_vacunas','$inf5'), 
    ('26','$unificado_vacunas','$inf6')";
    $uni = $conectar->query($insert_unificado); 

    if($vac&&$uni){ 
        echo "<script>
        alert('Se guardaron los datos');
        window.location.href = '/cap/generar_reporte_unificado.php';
            </script>"; 
      
    }
    else{ 
        echo "No se insertaron losdatos";
        
    }
?> 

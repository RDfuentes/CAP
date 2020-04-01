<?php 

include 'conexion.php'; 
    if(isset($_POST['btn1'])){ 
        $id_menor=$_POST['id_menor']; 
        $id_vacuna= $_POST['id_vacuna']; 
        $id_dosis= $_POST['id_dosis']; 
        $fecha_aplicacion= $_POST['fecha_aplicacion']; 
        $id_centro_aplicacion= $_POST['id_centro_aplicacion'];
        $id_estado=$_POST['id_estado'];

            $aplicacion_vacunas = "INSERT INTO aplicacion_vacunas(
                    id_menor, 
                    id_vacuna, 
                    id_dosis_aplicada, 
                    id_centro_salud,
                    id_estado,
                    fecha_aplicacion
                        ) 
                        VALUES (
                            '$id_menor',
                            '$id_vacuna',
                            '$id_dosis',
                            '$id_centro_aplicacion', 
                            '$id_estado',
                            '$fecha_aplicacion'
                                )";
            
                                $fin= $conectar->query($aplicacion_vacunas);
                            
                                if($fin){
                                    echo "<script>
                                    alert('Se guardaron los datos');
                                    window.location.href = '/cap/aplicacion_vacunas.php';
                                     </script>"; 
                                    
                                        }
                                else {
                                    echo "No se han guardado los datos!";
                                    }

        }



?> 
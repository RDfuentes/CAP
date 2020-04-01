<?php   
include 'conexion.php'; 
    // datos de direccion 
        $departamento=$_POST['departamento'];
        $municipio=$_POST['municipio'];
        $comunidad=$_POST['comunidad'];
        $calle_zona=$_POST['calle_zona'];
        $direccion_alterna=$_POST['direccion_alterna']; 
    //Datos persona responsable
        $primer_nombre_res=$_POST['primer_nombre_res'];
        $segundo_nombre_res=$_POST['segundo_nombre_res'];
        $primer_apellido_res=$_POST['primer_apellido_res'];
        $segundo_apellido_res=$_POST['segundo_apellido_res'];
        $fecha_nacimiento_res=$_POST['fecha_nacimiento_res'];
        $telefono_res=$_POST['telefono_res'];
        $fallecimiento_menor=$_POST['fall_menor'];
        $id_persona = $_POST['id_persona'];
    //Datos persona menor
        $primer_nombre_menor=$_POST['primer_nombre_menor'];
        $segundo_nombre_menor=$_POST['segundo_nombre_menor'];
        $primer_apellido_menor=$_POST['primer_apellido_menor'];
        $segundo_apellido_menor=$_POST['segundo_apellido_menor'];
        $cui_menor=$_POST['cui_menor'];
        $fecha_nacimiento_menor=$_POST['fecha_nac_menor'];
        $sexo_menor=$_POST['sexo_menor'];
        $pueblo_menor=$_POST['id_pueblo'];
        $comunidad_menor=$_POST['id_comunidad_linguistica'];

    $direccion_responsable ="INSERT INTO  direccion(
                    id_departamento, 
                    id_municipio,
                    id_comunidad, 
                    calle_zona, 
                    direccion_alterna
                    ) VALUES(
                        '$departamento',
                        '$municipio',
                        '$comunidad',
                        '$calle_zona', 
                        '$direccion_alterna'
                    )"; 
                $conectar->query($direccion_responsable);
                $id_direccion_generada =$conectar->insert_id; 
        
    $responsable="INSERT INTO persona(
                    primer_nombre, 
                    segundo_nombre, 
                    primer_apellido,
                    segundo_apellido, 
                    fecha_nacimiento,
                    telefono_responsable, 
                    fallecimiento_hijo, 
                    id_direccion,
                    id_tipo_persona
                    )
                VALUES (
                        '$primer_nombre_res',
                        '$segundo_nombre_res', 
                        '$primer_apellido_res', 
                        '$segundo_apellido_res',
                        '$fecha_nacimiento_res', 
                        '$telefono_res', 
                        '$fallecimiento_menor', 
                        '$id_direccion_generada',
                        '$id_persona'
                    )"; 

                        $conectar->query($responsable);
                        $persona_id =$conectar->insert_id;

    $menor="INSERT INTO datos_menor (
                primer_nombre_menor,
                segundo_nombre_menor,
                primer_apellido_menor,
                segundo_apellido_menor,
                cui_menor,
                fecha_nacimiento_menor,
                sexo,
                id_pueblo,
                id_comunidad_linguistica,
                id_responsable
                ) 
                    VALUES (
                        '$primer_nombre_menor',
                        '$segundo_nombre_menor', 
                        '$primer_apellido_menor',
                        '$segundo_apellido_menor', 
                        '$cui_menor', 
                        '$fecha_nacimiento_menor', 
                        '$sexo_menor', 
                        '$pueblo_menor', 
                        '$comunidad_menor',
                        '$persona_id'
                         )";
                         $conectar->query($menor);

    if($menor&&$responsable&&$direccion_responsable){ 
        
        echo "<script>
        alert('Se guardaron los datos');
        window.location.href = '/cap/ingreso_datos.php';
            </script>"; 
 
    }
    else{ 
        echo "No se insertaron losdatos";
        
    }
?> 

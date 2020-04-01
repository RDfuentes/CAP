<?php 
require_once("metodos_php/insert/conexion.php");

            class Persona{
                public $consultar; 

            public function pueblo($resultado_tipo_persona){
                $query_tipo_persona= mysqli_query($conectar, "SELECT id_tipo_persona,persona_tipo FROM tipo_persona"); 
                $resultado_tipo_persona= mysqli_num_rows($query_tipo_persona); 
            
            }
            }
?> 
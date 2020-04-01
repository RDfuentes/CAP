<?php 
$host = "localhost"; 
$user = "root"; 
$clave = ""; 
$bd= "cap";

$conectar = mysqli_connect($host,$user,$clave,$bd);


function conectar()
{
//Datos para la conexión con el servidor
$servidor   = "localhost";
$nombreBD   = "registro_vacunas";
$usuario    = "root";
$contrasena = "";
//Creando la conexión, nuevo objeto mysqli
$conexion = new mysqli($servidor,$usuario,$contrasena,$nombreBD);
//Si sucede algún error la función muere e imprimir el error
    if($conexion->connect_error){
    die("Error en la conexion : ".$conexion->connect_errno."-".$conexion->connect_error);
    }
    //Si nada sucede retornamos la conexión
    return $conexion;
}
?> 
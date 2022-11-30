<?php

/*
function Conexion(){
    $nombre_bd = "crud";
    $usuario = "root";
    $contrasena = "";
    $host = "localhost";

    $conexion = mysqli_connect($host,$usuario,$contrasena,$nombre_bd);

    if($conexion){
        echo"";
    }else{
        echo "BD no conectada";
    }
    return $conexion;
}
*/

$nombre_bd = "bolsas";
$usuario = "root";
$contrasena = "";
$host = "localhost";

try{
    $conec = new PDO(
        'mysql:host=localhost;
        dbname='.$nombre_bd,$usuario,$contrasena);
       // echo"se conecto...";
    
}catch(Exception $e){
    echo "No funciono la conexion por que: ".$e->getMessage();
}
?>

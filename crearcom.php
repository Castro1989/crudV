<?php
//validacion
if(empty($_POST['inputCodigoc']) || empty($_POST['inputCantidad']) || empty($_POST['inputPrecioc']) || empty($_POST['inputTotalc'])){
    echo "Error, complete todo el formulario";
    Exit();
}

include 'conexion.php';

$codigoc = $_POST['inputCodigoc'];
$cantidad = $_POST['inputCantidad'];
$precioc = $_POST['inputPrecioc'];
$totalc = $_POST['inputTotalc'];

//echo $codigoc, $cantidad, $precioc, $totalc;
$consulta = $conec->prepare("INSERT INTO compras(codigoc,cantidad,precioc,totalc) VALUES (?,?,?,?)");
$resultado = $consulta->execute([$codigoc,$cantidad,$precioc,$totalc]);

if($resultado){
    header("Location: datomaestro.php");
}else{
    echo "Su registro ha fallado";
}

?>
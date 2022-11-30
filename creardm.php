<?php
//validacion
if(empty($_POST['inputCodigo']) || empty($_POST['inputNombre']) || empty($_POST['inputProveedor'])){
    echo "Error, complete todo el formulario";
    Exit();
}

include 'conexion.php';

$codigoc = $_POST['inputCodigo'];
$nombre = $_POST['inputNombre'];
$proveedor = $_POST['inputProveedor'];
$estado = "V";

echo $codigoc, $nombre, $proveedor, $estado;

$consulta = $conec->prepare("INSERT INTO datomaestro(codigo,nombre,proveedor,estado) VALUES (?,?,?,?)");
$resultado = $consulta->execute([$codigoc,$nombre,$proveedor,$estado]);

if($resultado){
    header("Location: datomaestro.php");
}else{
    echo "Su registro ha fallado";
}
?>
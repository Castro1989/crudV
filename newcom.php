<?php include 'conexion.php';
$sentencia = $conec->query("SELECT * from compras");
$compras = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
</html>

<div class="container">
<div class="card mb-4">
    <div class="card-header text-center">Ingrese una nueva compra</div>
    <form action="crearcom.php"  method="POST">
        <div class="mb-2 ml-2 mr-2">
        <label>Codigo</label>
        <input class="form-control" type="text" placeholder="Ingrese codigo" name="inputCodigoc" aria-label="default input example" required>
        </div>
        <div class="ml-2 mb-2 mr-2">
        <label>Cantidad</label>
        <input class="form-control" type="text" placeholder="Ingrese la cantidad en millar" name="inputCantidad" aria-label="default input example" required>
        </div>
        <div class="mb-2 ml-2 mr-2">
        <label>Precio</label>
        <input class="form-control" type="text" placeholder="Ingrese el precio por millar" name="inputPrecioc" aria-label="default input example" required>
        </div>
        <div class="mb-2 ml-2 mr-2">
        <label>Total</label>
        <input class="form-control" type="text" placeholder="Ingrese total de medida" name="inputTotalc" aria-label="default input example" required>
        </div>
        <input type="submit" class="btn btn-primary mb-2 ml-2" value="Crear">
    </form>
    </div>
    <br/><br/>
</div>

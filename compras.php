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
    <div class="row">
        <table class="table table-striped">
        <h3 class="text-center">Compras</h3>
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Total</th>
                    <th scope="col" colspan=2 class="text-center">Acciones</th>
            </thead>
            <tbody>
                <?php foreach($compras as $dato){ //as pasa valor a dato?> 
                <tr>
                <?php echo $dato->id_compra ?>
                    <td><?php echo $dato->codigoc ?></td>
                    <td><?php echo $dato->cantidad ?></td>
                    <td><?php echo $dato->precioc ?></td>
                    <td><?php echo $dato->totalc ?></td>
                    <td class="text-center"><a href="editcom.php?id=<?php echo $dato->id_compra ?>" target="content-frame" class="btn btn-primary">Editar</a><a href="controllers/eliminar.php?id=<?php echo $dato-> id ?>" class="btn btn-danger ml-2">Eliminar</td>
                 </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="newcom.php" target="content-frame" type="submit" class="btn btn-primary mb-2 ml-2">Nueva Compra</a>
    </div>
</div>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>

<?php 
    require_once "config.php";

    $conexion = new mysqli(IP_DB,USER_DB,PASS_DB,NAME_DB);
    $sql = "SELECT * FROM producto WHERE id =" . $_GET['id'];
    $resultado = $conexion -> query($sql)  -> fetch_all(MYSQLI_ASSOC)[0];

?>

<form action="./modificarProducto.php" method="post">
    ID: <input type="text" name="id" value="<?= $resultado['id'] ?>" readonly> <br />
    Nombre: <input type="text" name="nombre" value="<?= $resultado['nombre'] ?>" > <br />
    Descripcion: <input type="text" name="descripcion" value="<?= $resultado['descripcion'] ?>" > <br />
    Stock: <input type="number" name="stock" value="<?= $resultado['stock'] ?>" > <br />
    <input type="submit" value="Modificar">
</form>

</body>
</html>
<?php 

include 'db_connect.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $update="SELECT * FROM datos where id = '$id'";
    $result=mysqli_query($connection, $update);

    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_array($result);
        $id=$row['id'];
        $nombre=$row['nombre'];
        $direccion=$row['direccion'];
        $telefono=$row['telefono'];
        $correo=$row['correo'];
    }
}

if(isset($_POST['update'])){
    $id=$_GET['id'];
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];

    $update="UPDATE datos SET nombre='$nombre',direccion='$direccion',telefono='$telefono',correo='$correo' WHERE id='$id'";
    $result=mysqli_query($connection,$update);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD PHP</title>
</head>
<body>
    <h1 class="title">UPDATE CRUD PHP</h1>
    <div class="contenedor">
        <div class="form">
            <form name="form" action="update.php?id=<?php echo $_GET['id'] ?>" method="post">
                <input name="id" type="hidden" placeholder="ID" value="<?php echo $id; ?>" autofocus>
                <input name="nombre" type="text" placeholder="Nombre" value="<?php echo $nombre; ?>" required>
                <input name="direccion" type="text" placeholder="Direccion" value="<?php echo $direccion; ?>" required>
                <input name="telefono" type="text" placeholder="Telefono" value="<?php echo $telefono; ?>" required>
                <input name="correo" type="text" placeholder="Correo" value="<?php echo $correo; ?>" required>
                <input name="update" type="submit" value="Modificar" class="button">
            </form>
        </div>
        </div>
    </div>
</body>
</html>



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
    <h1 class="title">CRUD PHP</h1>
    <div class="contenedor">
        <div class="form">
            <form name="form" action="create.php" method="post">
                <input name="id" type="text" placeholder="ID">
                <input name="nombre" type="text" placeholder="Nombre">
                <input name="direccion" type="text" placeholder="Direccion">
                <input name="telefono" type="text" placeholder="Telefono">
                <input name="correo" type="text" placeholder="Correo">
                <input name="agregar" type="submit" value="Agregar" class="button">
            </form>
        </div>
        <div class="mostrar">
            <div class="tabla">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php 
                            include 'db_connect.php';
                            $read="SELECT *FROM datos";
                            $resultado=mysqli_query($connection, $read);
                            while($row = mysqli_fetch_array($resultado)){
                                ?> 
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['direccion'] ?></td>
                            <td><?php echo $row['telefono'] ?></td>
                            <td><?php echo $row['correo'] ?></td>
                            <td><a href="update.php?id=<?= $row['id']; ?>"><img class="img img1" width="50px" src="img/modificar.png" title="Modificar" alt="Boton para modificar fila de datos."></a><a href="delete.php?id=<?= $row['id']; ?>"><img class="img img2" width="50px" src="img/eliminar.png" title="Eliminar" alt="Boton para eliminar fila de datos."></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>  
                </table>   
            </div>
        </div>
    </div>
</body>
</html>
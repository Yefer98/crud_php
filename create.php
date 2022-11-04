<?php

include 'db_connect.php';

 if(isset($_POST{'agregar'})){
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];

    $create="INSERT INTO datos (id, nombre, direccion, telefono, correo) VALUES ('$id', '$nombre', '$direccion', '$telefono', '$correo')";

    if(mysqli_query($connection, $create)){
        header('Location: index.php');
    }
 }

?>
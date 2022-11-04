<?php 
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $dbName = 'sistema';
  $port = 3306; //opcional por defecto

  try {
    $connection = mysqli_connect($host, $user, $password, $dbName, $port);
    // echo 'Conexión exitosa a la base de datos';
  } catch (ErrorException $error) {
    $error->getMessage();
    echo $error;
    // echo 'No se pudo conectar a la base de datos';
  }

//   Valido pero se recomienda try catch

//   if(!$connection){
//     echo 'No se pudo conectar a la base de datos';
//   }else{
//     echo 'Conexión exitosa';
//   }


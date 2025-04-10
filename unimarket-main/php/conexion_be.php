<?php

    $conexion = mysqli_connect("localhost", "root", "", "unimarket");


    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    /*
    if($conexion){
        echo 'Conectado exitosamente a la base de datos';
        
    }else{
        echo 'No se ha podido conectar a la base de datos';
    }
    */

    
?>

<?php
header("Location: ../homecomprador.php");
exit; 

/*
    include 'conexion_be.php';

    $correo = $_POST['correo_institucional'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_institucional = '$correo' and contrasena = '$contrasena' ");

    if(mysqli_num_rows($validar_login) > 0){
        header("location: ../home.php");
        exit;
        
    }else{
        echo '
            <script>
                alert("Usuario no registrado, verifica los datos o regístrate");
                window.location = "../inicio.php";
            </script>
        ';
        exit;
    }
*/
?>
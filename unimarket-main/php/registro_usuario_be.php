<?php
include 'conexion_be.php';

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$carrera = $_POST['carrera'];
$correo = $_POST['correo_institucional'];
$contrasena = $_POST['contrasena']; // Contraseña en texto plano
$rol = $_POST['rol'];

// Hashear la contraseña antes de almacenarla en la base de datos
$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);



$registrarusuario = "INSERT INTO usuarios (Cedula, Nombre, Apellidos, Carrera, Correo_institucional, Contrasena, Rol)
            VALUES ('$cedula', '$nombre', '$apellidos', '$carrera', '$correo', '$contrasena_hash', '$rol')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_institucional = '$correo'");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
        alert("Este correo ya está registrado, usa otro correo.");
        window.location = "../inicio.php";
    </script>
    ';
    exit();
}


$ejecutar = mysqli_query($conexion, $registrarusuario);

if ($ejecutar) {
    echo '
    <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../inicio.php";
    </script>
    ';
} else {
    echo '
    <script>
        alert("Intentalo de nuevo, usuario no almacenado");
        window.location = "../inicio.php";
    </script>
    ';
}

mysqli_close($conexion);
?>

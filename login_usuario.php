<?php

session_start();

include 'conexion.php';

$correo = $_POST['correo'];
$password= $_POST['password'];
$password = hash('sha512',$password);



$validar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' and password='$password'");

if(mysqli_num_rows($validar_login)>0){
    $_SESSION['usuario']=$correo;
    header("Location: bienvenido.php");
    exit;
}else{
    echo '
    <script>
    alert("El usuario no existe, verifique los datos");
    window.location = "login01.php";
    </script>
    ';
    exit;
}
?>
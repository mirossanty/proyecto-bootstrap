<?php

session_start();
if(isset($_SESSION['usuario'])){
    header ("location : bienvenido.php");
}



?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/estiloslogin01.css">
    <title>Login y registro</title>
</head>
<body>
    

<main>

<div class="contenedor__todo">

<div class="caja__trasera">
    <div class="caja__trasera-login">
        <h3>¿Ya tienes una cuenta?</h3>
        <p>Inicia sesión para acceder</p>
        <button id="btn__iniciar-sesion">Iniciar sesion</button>
    </div>
    <div class="caja__trasera-register">
        <h3>¿Aún no tienes una cuenta?</h3>
        <p>Registrate para iniciar sesión</p>
        <button id="btn__registrarse">Registrarse</button>
    </div>
</div>
<!--formulario login y registro-->
<div class="contenedor__login-register">
<!--login -->
    <form method="POST" action="login_usuario.php" class="formulario__login">
    <h2>Iniciar sesión</h2>
    <input type="text" placeholder="Correo electrónico" name="correo">
    <input type="password" placeholder="Contraseña" name="password">
    <button>Entrar</button>


</form>
<!--registro-->
<form method="POST" action="registro_usuario.php" class="formulario__register">
    <h2>Regístrarse</h2>
    <input type="text" placeholder="Nombre completo"name="nombre_completo">
    <input type="text" placeholder="Correo electronico"name="correo">
    <input type="text" placeholder="Usuario" name="usuario">
    <input type="password" placeholder="Contraseña"name="password">
    <button>Registrarse</button>
</form>

</div>
</div>




</main>


<script src="js/scriptlogin01.js"></script>

</body>
</html>


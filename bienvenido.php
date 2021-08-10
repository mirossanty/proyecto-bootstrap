<?php
$conexion= mysqli_connect("localhost",
"root","","login_register_bd");
/*
if($conexion){
    echo 'conectado exitosamente';
}else{
    echo 'no se ha podido conectar';
}*/
?>


<?php 

session_start();

if(!isset($_SESSION['usuario'])){
    echo'
    <script>
       alert("Por favor inicie sesion");
       window.location = "login01.php";
    </script>
    
    ';
    session_destroy();
    die();

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap" rel="stylesheet">
   <?php echo "<link rel='stylesheet' type='text/css' href='estilos/fontello.css'>"; ?>
<?php echo "<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>"; ?>
<?php echo "<link rel='stylesheet' type='text/css' href='estilos/tablaestilos.css'>"; ?>
</head>



<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logotipo" src="img/logotic.png" alt=""> Registro Covid-19</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
  <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="cerrar_sesion.php">cerrar sesion</a>
      </div>
    </div>
  </div>
</nav>
<main>

    

<!--<a href="cerrar_sesion.php ">cerrar sesion</a>-->

<div class="tabla">
<h1>Lista de personas contagiadas </h1>
    <table>
    <thead>
    <tr class="cabecera">
        <th>Id</th>
        <th>Nombre completo</th>
        <th>correo</th>
        <th>Usuario</th> 

    </tr>
    </thead>

       <?php
       $consulta = "SELECT*FROM usuarios";
       $ejecutar_consulta = mysqli_query($conexion,$consulta);
       $ver_filas = mysqli_num_rows($ejecutar_consulta);
       $fila = mysqli_fetch_array($ejecutar_consulta);
       
       
        if(!$ejecutar_consulta){
            echo "error en la consulta";
        }else{
            if($ver_filas<1){
                echo "<tr><td>sin registros</td></tr>";
            }else{
                for($i=0; $i<=$fila; $i++){
                    echo'
                    <tr>

        <th>'.$fila[0].'</th>
        <th>'.$fila[1].'</th>
        <th>'.$fila[2].'</th>
        <th>'.$fila[3].'</th>
       

         </tr>
    ';
    $fila = mysqli_fetch_array($ejecutar_consulta);
                }
            }
        }


       ?>

    </table>

</div>
    </main>



  <!-- <footer>
<img class="logotipo-footer" src="img/logotic.png" alt="">
<div class="sociales">
  <a class="icon-gmail" href="#"></a>
  <a class="icon-facebook" href="#"></a>
  <a class="icon-twitter" href="#"></a>
  <a class="icon-instagram" href="#"></a>
</div>
<br> -->
<p class="copy"> Registro Covid-19 Santiago Luis Miroslava&copy; 2021 </p>
<!-- </footer>   -->



<script src="js/bootstrap.min.js"></script>
    <script src="jquery/Jquery.js"></script>
</body>
</html>
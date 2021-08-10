<?php 

include 'conexion.php';

 $nombre_completo=$_POST['nombre_completo'];
 $correo=$_POST['correo'];
 $usuario=$_POST['usuario'];
 $password=$_POST['password'];
 //encriptamiento de la contraseña
 $password = hash('sha512',$password);

 $query= "INSERT INTO usuarios (nombre_completo,correo,usuario,password) VALUES('$nombre_completo','$correo','$usuario','$password')";

//ver que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT*FROM usuarios WHERE correo='$correo' ");
if(mysqli_num_rows($verificar_correo)>0){
    echo '
    <script>
    alert("Este correo ya esta registrado, intenta con otro diferente");
    window.location = "login01.php";
    </script>
    ';
    exit();
}

//ver que el nombre de usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT*FROM usuarios WHERE usuario='$usuario' ");
if(mysqli_num_rows($verificar_usuario)>0){
    echo '
    <script>
    alert("Este usuario ya esta registrado, intenta con otro diferente");
    window.location = "login01.php";
    </script>
    ';
    exit();
}




 $ejecutar = mysqli_query($conexion,$query);

if($ejecutar){
    echo '
    <script>
    alert("Usuario registrado exitosamente");
    window.location = "login01.php";
    </script>
    ';
}else{
    echo '
    <script>
    alert("Intentelo de nuevo, usuario no registrado");
    window.location = "login01.php";
    </script>
    ';
}
mysqli_close($conexion);

?>
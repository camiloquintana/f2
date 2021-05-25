<?php
require_once ('C:\xampp\htdocs\5L\PROYECTO\f2\paginas\conexion.php');

session_start();
$usuario = $_POST ['usuario'];
$contraseña = $_POST ['contraseña'];

$q = "SELECT COUNT(*) as contar FROM usuarios WHERE Usuario='$usuario' and Contraseña='$contraseña'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['user'] = $usuario ;
    header ('Location: /5L/Proyecto/f2/paginas/inicio.php');
}else{
    
}
?>

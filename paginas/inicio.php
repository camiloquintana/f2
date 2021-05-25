<?php
require_once ('C:\xampp\htdocs\5L\PROYECTO\f2\paginas\menu.php');
require_once ('C:\xampp\htdocs\5L\PROYECTO\f2\paginas\autenticar.php');

session_start();
$usuario = $_SESSION['user'] ;
echo "bienvenido";
?>
  
</body>

</html>

<?php
require_once ('C:\xampp\htdocs\5L\PROYECTO\f2\paginas\footer.php');
?>
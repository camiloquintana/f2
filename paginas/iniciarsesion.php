<?php
?>

<!DOCTYPE html>
<html lang="es">



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Autores" content="CamiloQuintana-AndresPerdomo-AndresGaviria">
  <meta name="Descripción" content="VacunaciónSanitas">
  <link rel="stylesheet" href="/5L/Proyecto/f2/anexos/css/bootstrap.min.css">
  <link rel="stylesheet" href="/5L/Proyecto/f2/anexos/css/styles.css">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
  <title>VACUNACIÓN EPS SANITAS</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark">
    <a href="/5L/Proyecto/f2/index.php" class="nav-enlace ml-auto ">Inicio</a>
    <a href="/5L/Proyecto/f2/paginas/diagnostico.php" class="nav-enlace ml-auto ">Diagnostico</a>
    <a href="/5L/Proyecto/f2/paginas/insumos.php" class="nav-enlace ml-auto">Insumos</a>
    <a href="/5L/Proyecto/f2/paginas/usuarios.php" class="nav-enlace ml-auto">Usuarios</a>
    <a href="/5L/Proyecto/f2/paginas/vacunas.php" class="nav-enlace ml-auto">Vacunas</a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-dark btn btn-primary py-1" href="/5L/Proyecto/f2/paginas/iniciarsesion.php">Inicia sesión</a>
      </li>
    </ul>
  </nav>


  <section >
    <div class="h1"><p> Iniciar Sesion</p></div>
    <div class="modal-dialog text-center">
      <div class="col-sm-8 main-section">
          <div class="modal-content">
              <div class="col-12 user-img">
                  <img src="/5L/Proyecto/f2/anexos/img/user.png" width="100"/>
              </div>
              <form class="col-12" th:action="@{/login}" method="get">
                  <div class="form-group" id="user-group">
                      <input type="text" class="form-control" placeholder="Nombre de usuario" name="username"/>
                  </div>
                  <div class="form-group" id="contrasena-group">
                      <input type="password" class="form-control" placeholder="Contrasena" name="password"/>
                  </div>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
              </form>
              <div class="col-12 forgot">
                  <a href="#">Recordar contrasena?</a>
              </div>
          </div>
      </div>
  </div>
      <p> &nbsp;</p>
      &nbsp;
  </section>

</body>


<footer>
    <div id="footer"><p><marquee  direction=left>
      Copyright © 2021 - Software Distribución Vacunas EPS SANITAS Camilo Quintana - Andres Perdomo - Andres Gaviria
     </marquee></p></div>
</footer>


</html>
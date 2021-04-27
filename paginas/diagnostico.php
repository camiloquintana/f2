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

  <section>
    <div class="h1"><p> Diagnostico</p></div>

      <div style="text-align:center;">
    <table border="1" style="margin: 0 auto;">
      <tr>
        <th><b>SINTOMAS</b></th>
        <th><b>MARQUE LA OPCION</b></th>
      </tr>

      <tr>
        <td>¿Has estado en contacto estrecho (cercano), sin usar elementos de protección,<br>por más de 15 minutos con una persona con diagnóstico confirmado de COVID-19? </td>
        <td><input type="checkbox">SI  <input type="checkbox">NO</td>
      </tr>

      <tr>
        <td>¿Has estado compartiendo el mismo lugar por más de 120 minutos con una persona<br> con diagnóstico confirmado de COVID-19?</td>
        <td><input type="checkbox">SI  <input type="checkbox">NO</td>
      </tr>

      <tr>
        <td>¿Tienes tos seca y persistente?</td>
        <td><input type="checkbox">SI  <input type="checkbox">NO</td>
      </tr>

      <tr>
        <td>¿Tienes fiebre? (+38.2ºC)</td>
        <td><input type="checkbox">SI  <input type="checkbox">NO</td>
      </tr>

      <tr>
        <td>¿Tienes sensación de falta de aire de inicio brusco?</td>
        <td><input type="checkbox">SI  <input type="checkbox">NO</td>
      </tr>

      <tr>
        <td>¿Tienes mucosidad, congestión nasal, o estornudos?</td>
        <td><input type="checkbox">SI  <input type="checkbox">NO</td>
      </tr>

      <tr>
        <td>¿Tienes dolor muscular? Ataque al estado general</td>
        <td><input type="checkbox">SI  <input type="checkbox">NO</td>
      </tr>

      <tr>
        <td>¿Tienes sintomatología gastrointestinal? Diarrea / nausea / dolor abdominal</td>
        <td><input type="checkbox">SI  <input type="checkbox">NO</td>
      </tr>

      <tr>
        <td>¿Padeces de diabetes? </td>
        <td><input type="checkbox">SI  <input type="checkbox">NO</td>
      </tr>

      <tr>
        <td>¿Tienes sobrepeso?</td>
        <td><input type="checkbox">SI  <input type="checkbox">NO</td>
      </tr>

      <tr>
        <td>¿Tienes presión alta?</td>
        <td><input type="checkbox">SI  <input type="checkbox">NO</td>
      </tr>

      <tr>
        <td>¿Fumas? ¿Estás expuest@ cigarro frecuentemente?</td>
        <td><input type="checkbox">SI  <input type="checkbox">NO</td>
      </tr>


    </table>
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
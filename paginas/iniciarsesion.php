<?php
require_once ('C:\xampp\htdocs\5L\PROYECTO\f2\paginas\menu.php');

?>
  
  <section >
    <div class="h1"><p> Iniciar Sesion</p></div>
    <div class="modal-dialog text-center">
      <div class="col-12 text-center">
          <div class="modal-content">
              <div class="col-12 user-img">
                  <img src="/5L/Proyecto/f2/anexos/img/user.png" width="100"/>
              </div>
              <form class="col-12" action="/5L/Proyecto/f2/paginas/autenticar.php" method="POST">
                  <div class="form-group" >
                      <input type="text" class="form-control" placeholder="Ingrese usuario" name="usuario"/>
                  </div>
                  <div class="form-group" >
                      <input type="password" class="form-control" placeholder="Ingrese contrasena" name="contraseña"/>
                  </div>
                  <button type="submit" class="btn btn-primary"> Ingresar </button>
              </form>
          </div>
      </div>
    </div>
    <p> &nbsp;</p>
  </section>

</body>
</html>

<?php
require_once ('C:\xampp\htdocs\5L\PROYECTO\f2\paginas\footer.php');


?>
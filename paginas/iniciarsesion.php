<?php
require_once ('C:\xampp\htdocs\5L\PROYECTO\f2\paginas\menu.php');
?>


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
  </section>

</body>
</html>

<?php
require_once ('C:\xampp\htdocs\5L\PROYECTO\f2\paginas\footer.php');


?>
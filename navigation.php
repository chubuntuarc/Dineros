<?php
require("connect.php");
$sql = "SELECT * FROM users WHERE id_user = $user";
//se envia la consulta
$result=$mysqli->query($sql);
$rows = $result->num_rows;
while($row = mysqli_fetch_assoc($result)){
    $name = $row["name"];
    $mail = $row["mail"];
}
?>
<nav class="navbar is-transparent-is-fixed-top">
  <div class="navbar-brand ">
    <a class="navbar-item" href="dashboard.php">
      <img src="nav-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="35" height="28">
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="dashboard.php">
        Inicio
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" href="/documentation/overview/start/">
          Cuentas
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="account.php?type=cre">
            Crédito
          </a>
          <a class="navbar-item" href="account.php?type=deb">
            Débito
          </a>
          <a class="navbar-item" href="account.php?type=efe">
            Efectivo
          </a>
        </div>
      </div>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" href="/documentation/overview/start/">
          Movimientos
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="/documentation/overview/start/">
            Créditos
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
            Entradas
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
            Pagos
          </a>
        </div>
      </div>

    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link" href="/documentation/overview/start/">
             <?php echo $name; ?>
            </a>
            <div class="navbar-dropdown is-boxed">
              <a class="navbar-item" href="/documentation/overview/start/">
                Perfil
              </a>
              <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                Ajustes
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item is-active" href="logout.php?logout=Salir">
                Cerrar sesión
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

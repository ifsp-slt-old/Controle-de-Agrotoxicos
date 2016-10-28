<?php
  include_once('controllers/header-controller.php');
  $controller = new HeaderController();
?>
<nav class="nav">
  <div class="nav-left">
    <a class="nav-item is-active" href="#">
      Home
    </a>
  </div>

  <span class="nav-toggle">
    <span></span>
    <span></span>
    <span></span>
  </span>

  <div class="nav-right nav-menu">
    <a class="nav-item" href="views/new-entry.php">
      Nova Entrada
    </a>
    <a class="nav-item" href="views/new-dropoff.php">
      Nova Saida
    </a>
    <a class="nav-item" href="views/balance.php">
      Relatorios
    </a>

    <span class="nav-item">
      <a class="button is-info" href="controllers/logout-controller.php">
        <span>Logout</span>
      </a>
    </span>
  </div>
</nav>

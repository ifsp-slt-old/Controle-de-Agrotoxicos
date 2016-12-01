<?php
  session_start();
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

    <?php
      if($_SESSION['permissaoUsuario'] == 'E'){
        echo '<a class="nav-item" href="new-entry.php">
                Nova Entrada
              </a>
              <a class="nav-item" href="new-dropoff.php">
                Nova Saida
              </a>
              <a class="nav-item" href="new-embalagem.php">
                Nova Embalagem
              </a>
              <a class="nav-item" href="new-fornecedor.php">
                Novo Fornecedor
              </a> 
              <a class="nav-item" href="new-fabricante.php">
                Novo Fabricante
              </a>';
      }
    ?>

    <?php
      if($_SESSION['permissaoUsuario'] == 'U' || $_SESSION['permissaoUsuario'] == 'O'){
        echo '<a class="nav-item" href="balance.php">
                Relatorios
              </a>';
      }
    ?>

    <?php
      if($_SESSION['permissaoUsuario'] == 'U' || $_SESSION['permissaoUsuario'] == 'O'){
        echo '<a class="nav-item" href="signup.php">
                Cadastro
              </a>';
      }
    ?>

    <span class="nav-item">
      <a class="button is-info" href="help.php">
        <span>Ajuda</span>
      </a>
    </span>

    <span class="nav-item">
      <a class="button is-info" href="../controllers/logout-controller.php">
        <span>Logout</span>
      </a>
    </span>
  </div>
</nav>

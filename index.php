<?php
	// Inicia sessao
	session_start();
?>
<html>
	<head>
    <link rel="stylesheet" type="text/css" href="node_modules/bulma/css/bulma.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
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
		        echo '<a class="nav-item" href="views/new-entry.php">
		                Nova Entrada
		              </a>
		              <a class="nav-item" href="views/new-dropoff.php">
		                Nova Saida
		              </a>';
		      }
		    ?>

		    <?php
		      if($_SESSION['permissaoUsuario'] == 'U' || $_SESSION['permissaoUsuario'] == 'O'){
		        echo '<a class="nav-item" href="views/balance.php">
		                Relatorios
		              </a>';
		      }
		    ?>

		    <?php
		      if($_SESSION['permissaoUsuario'] == 'U' || $_SESSION['permissaoUsuario'] == 'O'){
		        echo '<a class="nav-item" href="views/signup.php">
		                Cadastro
		              </a>';
		      }
		    ?>


		    <span class="nav-item">
		      <a class="button is-info" href="controllers/logout-controller.php">
		        <span>Logout</span>
		      </a>
		    </span>
		  </div>
		</nav>

		<div class="container">
		  <div class="notification">
				<span class="title"><h3>Home page</h3></span>

				<?php
					echo 'Bem Vindo ' . $_SESSION['nomeUsuario'];
				?>
		  </div>
		</div>

	</body>
</html>

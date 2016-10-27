<html>
	<head>
    <link rel="stylesheet" type="text/css" href="node_modules/bulma/css/bulma.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
  	<?php
			session_start();

		 include_once("views/partials/_header.php");
	  ?>

		<div class="container">
		  <div class="notification">
				<span class="title"><h3>Home page</h3></span>

				<?php
				echo 'dasdsa';
					echo $_SESSION['nomeUsuario'];
				?>
		  </div>
		</div>

	</body>
</html>

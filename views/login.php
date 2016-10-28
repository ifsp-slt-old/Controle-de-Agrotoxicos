<html>
	<head>
    <link rel="stylesheet" type="text/css" href="../node_modules/bulma/css/bulma.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	</head>
	<body>
    <div class="container margin-top-20">
      <form class="margin-top-10" method="POST">
        <p class="control has-icon margin-top-10">
          <input class="input is-medium" type="text" placeholder="Login" name="login_user" id="login_user">
          <i class="fa fa-envelope"></i>
        </p>
        <p class="control has-icon margin-top-10">
          <input class="input is-medium" type="password" placeholder="Password" name="pass_user" id="pass_user">
          <i class="fa fa-lock"></i>
        </p>
        <p class="control">
          <button class="button is-info" type="submit">
            Entrar
          </button>
        </p>
      </form>
    </div>
	</body>

	<?php
		include_once('../controllers/login-controller.php');
		if(!empty($_POST)){
			$controller = new LoginController();
			$controller->do_login($_POST["login_user"], $_POST["pass_user"]);
		}
	?>
</html>

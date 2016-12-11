<!-- 
    @_AndreOliveira
    @_PedroPaes
-->
<html>
	<head>
    <link rel="stylesheet" type="text/css" href="../node_modules/bulma/css/bulma.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	</header>
	<body>
		<?php include_once("partials/_header.php"); ?>

    <div class="container margin-top-20">
			<span class="title"><h3>Cadastro</h3></span>
      <form action="" method="POST" class="margin-top-10">
        <p class="control">
          <input class="input" type="text" placeholder="Nome" name="nome">
        </p>
				<p class="control">
          <input class="input" type="text" placeholder="Login" name="login">
        </p>
		<p class="control">
			<input class="input" type="password" placeholder="Senha" name="senha">
		</p>
		<p class="control">
			<input class="input" type="password" placeholder="Confirmar senha" name="senha_conf">
		</p>
		<div class="columns center">
			<label class="radio column">
		    <input type="radio" name="permissao" value="O">
		    Gerente operacional
		  </label>
		  <label class="radio column">
		    <input type="radio" name="permissao" value="U">
		    Gerente de unidade
		  </label>
			<label class="radio column">
				<input type="radio" name="permissao" value="E">
				Encarregado de estoque
			</label>
			<label class="radio column">
				<input type="radio" name="permissao" value="A">
				Encarregado de aplicação
			</label>
		</div>
		<div class="columns margin-top-20">
			<button class="button is-info column" type="submit">
				Cadastrar
			</button>
		</div>
      </form>
    </div>
	</body>

	<?php
		include_once('../controllers/signup-controller.php');
		if(!empty($_POST)){ //Verifica se existe algo a ser submetido
			if($_POST["senha"] == $_POST["senha_conf"]){
				$controller = new SignupController(); //Realiza novo cadastro
				$controller->do_signup($_POST["nome"], $_POST["login"], $_POST["senha"], $_POST["permissao"]);
			} else {
				echo "<span style='color:red'> Senha e Confirmação de senhas precisam ser iguais.</span>";
			}

		}
	?>
</html>

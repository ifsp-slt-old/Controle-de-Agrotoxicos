<html>
	<head>
    <link rel="stylesheet" type="text/css" href="../node_modules/bulma/css/bulma.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="../node_modules/vanilla-masker/lib/vanilla-masker.js"></script>
    <script src="../lib/jsmodal-1.0d.min.js"></script>
	</header>
	<body>
		<?php include_once("partials/_header.php"); ?>
    <?php 
          include_once("../controllers/new-fornecedor-controller.php");
          $controller = new NewFornecedorController();
    ?>

    <div class="container margin-top-20">
			<span class="title"><h3>Novo Fornecedor</h3></span>

      <form action="" method="POST" class="margin-top-10">

        <p class="control">
          <input class="input" type="text" name="nomeFornecedor" placeholder="Nome">
        </p>
        </p>
        <div class="columns margin-top-20">
          <button class="button is-info column" type="submit">
            Criar Fornecedor
          </button>
        </div>
      </form>
    </div>
    

	</body>

  <?php
    if(!empty($_POST)){
        $controller->new_entry_fornecedor($_POST["nomeFornecedor"]);
    }
  ?>

</html>

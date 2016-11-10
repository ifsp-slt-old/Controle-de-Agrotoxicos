<html>
	<head>
    <link rel="stylesheet" type="text/css" href="../node_modules/bulma/css/bulma.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="../node_modules/vanilla-masker/lib/vanilla-masker.js"></script>
	</header>
	<body>
		<?php include_once("partials/_header.php"); ?>

    <div class="container margin-top-20">
			<span class="title"><h3>Nova Entrada</h3></span>
      <form action="" method="POST" class="margin-top-10">
        <p class="control">
          <input class="input" type="text" name="receitaEntrada" placeholder="Receita">
        </p>
        <p class="control">
          <input class="input" type="text" name="nfNumEntrada" placeholder="Numero Nota Fiscal">
        </p>
    		<p class="control">
          <input class="input" type="text" name="dataNfEntrada" placeholder="Data de Entrada NF">
        </p>
    		<p class="control">
          <input class="input" type="text" name="dataFabEntrada" placeholder="Data de Fabricação">
        </p>
    		<p class="control">
          <input class="input" type="text" name="dataValEntrada" placeholder="Data de Validade">
        </p>
    		<p class="control">
          <input class="input" type="text" name="dataEntrada" placeholder="Data de Entrada">
        </p>  
        <div class="columns margin-top-20">
          <button class="button is-info column" type="submit">
            Gerar nova Entrada
          </button>
        </div>
      </form>
    </div>

	</body>
    
  <script type="text/javascript" src="../js/entry.js"></script>

</html>

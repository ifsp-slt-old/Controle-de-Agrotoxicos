<html>
	<head>
    <link rel="stylesheet" type="text/css" href="../node_modules/bulma/css/bulma.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	</header>
	<body>
		<?php include_once("partials/_header.php"); ?>

    <div class="container margin-top-20">
			<span class="title"><h3>Nova Entrada</h3></span>
      <form action="" method="POST" class="margin-top-10">
        <p class="control">
          <input class="input" type="text" name="receitaEntrada" placeholder="receitaEntrada">
        </p>
        <p class="control">
          <input class="input" type="text" name="nfNumEntrada" placeholder="nfNumEntrada">
        </p>
		<p class="control">
          <input class="input" type="text" name="dataNfEntrada" placeholder="dataNfEntrada">
        </p>
		<p class="control">
          <input class="input" type="text" name="dataFabEntrada" placeholder="dataFabEntrada">
        </p>
		<p class="control">
          <input class="input" type="text" name="dataValEntrada" placeholder="dataValEntrada">
        </p>
		<p class="control">
          <input class="input" type="text" name="dataEntrada" placeholder="dataEntrada">
        </p>
		<p class="control">
          <input class="input" type="text" name="qtdAtualEntrada" placeholder="qtdAtualEntrada">
        </p>
		<p class="control">
          <input class="input" type="text" name="stattusUsoEntrada" placeholder="stattusUsoEntrada">
        </p>
      </form>
    </div>

	</body>
</html>

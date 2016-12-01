<html>
	<head>
	    <link rel="stylesheet" type="text/css" href="../node_modules/bulma/css/bulma.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<script type="text/javascript" src="../js/balance.js"></script>
	</head>
	<body>
		<?php 
			include_once("partials/_header.php");
			include_once("../controllers/balance-controller.php");
			$controller = new BalanceController();
			
		 ?>

	<form class="form padding-20" action="" method="POST">
		<div class="columns" >
			<div class="column">
				<label class="label"> Data final </label>
				<input type="date" class="input" name="initialDate">
			</div>
			<div class="column">
				<label class="label"> Data final </label>
				<input type="date" class="input" name="finalDate">
			</div>
		</div>	
	    <button class="button is-info column" type="submit" style="width:100%;">
            Mostrar Relatorio	
	    </button>
	</form>	

	</body>

    <?php
    	if(!empty($_POST)){
			$rows = $controller->get_entry_balance($_POST['initialDate'], $_POST['finalDate']);
    	}
  ?>

</html>

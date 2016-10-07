<html>
	<head>
    <link rel="stylesheet" type="text/css" href="../node_modules/bulma/css/bulma.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

		<script type="text/javascript" src="../js/balance.js"></script>
	</head>
	<body>
		<?php include_once("partials/_header.php"); ?>

    <div class="container margin-top-20">
			<span class="title"><h3>Relátorios</h3></span>
			<span onclick="showEntry()">Entradas</span>
			<div id="entry" style="display:none"><?php include_once("partials/_balance-entry.php"); ?></div>
			</br>
			<span onclick="showDropoff()">Saidas</span>
			<div id="dropoff" style="display:none"><?php include_once("partials/_balance-entry.php"); ?></div>
    </div>

	</body>

</html>

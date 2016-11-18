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
          include_once("../controllers/new-entry-controller.php");
          include_once("../controllers/new-agtx-controller.php");
          $entryController = new NewEntryController();
          $agtxController = new NewAgtxController();
    ?>

    <div class="container margin-top-20">
			<span class="title"><h3>Nova Entrada</h3></span>
      
      <!-- Modal -->
      <div id="myModal" class="modal">
        <?php include_once('./new-agtx.php'); ?>
      </div>

      <form action="" method="POST" class="margin-top-10">
          <div class="columns">
            <div class="column">
              <select class="select is-three-quarters" name="AgtxUnidade_idAgtxUnidade" style="width:100%">
                <?php
                   $agtxs = $entryController->do_new_entry_get_agtx();  
                   foreach ($agtxs as $agtx){
                      echo "<option>" . $agtx['nomeComercialAgtx'] . "</option>";
                   }
                ?>
              </select>
            </div>
            <div class="column">
              <input type="button" class="button" id="myBtn" value="Novo Agrotoxico">
            </div>

          </div>

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

  <?php
    if(!empty($_POST)){
      if(empty($_POST['nomeComercialAgtx'])){
        echo 1;
        $entryController->new_entry($_POST["receitaEntrada"], $_POST["nfNumEntrada"], $_POST["dataNfEntrada"], $_POST["dataFabEntrada"], $_POST["dataValEntrada"], $_POST["dataEntrada"], $_POST["AgtxUnidade_idAgtxUnidade"]);
      } else {
        echo 2;
        //salvar banco
        // echo '<script>location.reload();</script>';
      }
    }
  ?>
  <script>
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
  </script>
    
  <script type="text/javascript" src="../js/entry.js"></script>

</html>

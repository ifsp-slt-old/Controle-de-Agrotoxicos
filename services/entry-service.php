<?php

	class EntryService{
		
	private $dbh;
	
    function __construct(){
      try {
          //Faz conexao com o banco
          $this->dbh = new PDO("mysql:host=127.0.0.1;port=8889;dbname=ctrl_agrotoxicos", 'root', 'root');
      } catch (PDOException $e) {
          print "Error!: " . $e->getMessage() . "<br/>";
          die();
      }
    }
	
	
    public function new_entry($receitaEntrada, $nfNumEntrada, $dataNfEntrada, $dataFabEntrada, $dataValEntrada, $dataEntrada, $qtdAtualEntrada,
	  $stattusUsoEntrada){

      //realiza query
      $sql = $this->dbh->query("INSERT INTO entrada(receitaEntrada, nfNumEntrada, dataNfEntrada, dataFabEntrada, dataValEntrada, dataEntrada, qtdAtualEntrada
	  stattusUsoEntrada) VALUES ('$receitaEntrada', '$nfNumEntrada', '$dataNfEntrada', '$dataFabEntrada', '$dataValEntrada', '$dataEntrada', '$qtdAtualEntrada',
	  '$stattusUsoEntrada')");
     // $result = $sql->fetch();
      $this->dbh = null;
     
    }
		
		
		
		
		
	}

?>

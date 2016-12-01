<?php
  class BalanceService{

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

  	public function get_entry_balance($initialDate, $finalDate){
      //realiza query
      $sql = $this->dbh->query("SELECT Agtxunidade.*, Fornecedor.*, Entrada.* from Agtxunidade 
								inner join Fornecedor on Fornecedor_idFornecedor = idFornecedor 
								inner join Entrada on AgtxUnidade_idAgtxUnidade = idAgtxUnidade
								WHERE Entrada.dataEntrada between '$initialDate' and '$finalDate' ");

      $result = $sql->fetchAll();

      $this->dbh = null;
      return $result;
  	}

  }
?>

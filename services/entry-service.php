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
	
	
    public function new_entry($receitaEntrada, $nfNumEntrada, $dataNfEntrada, $dataFabEntrada, $dataValEntrada, $dataEntrada, $qtdAtualEntrada, $stattusUsoEntrada, $AgtxUnidade_idAgtxUnidade){
      //realiza query
      $sql = $this->dbh->exec("INSERT INTO Entrada(receitaEntrada, nfNumEntrada, dataNfEntrada, dataFabEntrada, dataValEntrada, dataEntrada, qtdAtualEntrada, stattusUsoEntrada, AgtxUnidade_idAgtxUnidade, AgtxUnidade_Fabricante_idFabricante, AgtxUnidade_Fornecedor_idFornecedor, AgtxUnidade_Embalagem_idEmbalagem) VALUES ('$receitaEntrada', '$nfNumEntrada', '$dataNfEntrada', 
        '$dataFabEntrada', '$dataValEntrada', '$dataEntrada', '1', 'A', '$AgtxUnidade_idAgtxUnidade')");
     

     //print_r($result);
      $this->dbh = null;
     
    }
		

   public function new_entry_embalagem($tipoEmbalagem, $unMedidaEmbalagem, $qtdMedidaEmbalagem){
      //realiza query
      $sql = $this->dbh->query("INSERT INTO embalagem(tipoEmbalagem, undMedidaEmbalagem, qtdMedidaEmbalagem) VALUES ('$tipoEmbalagem', '$unMedidaEmbalagem', '$qtdMedidaEmbalagem')");

      if($sql){
        echo "sucesso.";
      } else {
        echo "erro";
      }

      $this->dbh = null;
     
    }
	
   public function new_entry_fornecedor($nomeFornecedor){
      //realiza query
      $sql = $this->dbh->query("INSERT INTO fornecedor(nomeFornecedor) VALUES ('$nomeFornecedor')");

      if($sql){
        echo "sucesso.";
      } else {
        echo "erro";
      }

      $this->dbh = null;


     
    }
		
   public function new_entry_fabricante($nomeFabricante){
      //realiza query
      $sql = $this->dbh->query("INSERT INTO fabricante(nomeFabricante) VALUES ('$nomeFabricante')");

      if($sql){
        echo "sucesso.";
      } else {
        echo "erro";
      }
      
      $this->dbh = null;
     
    }

    /*
    	select para exibição na pagina com os agrotoxicos ja cadastrados, trazendo seus respectivos fornecedores, embalagens e fabricantes
    */
    public function new_entry_get_agtx(){
      //realiza query
      $sql = $this->dbh->query("SELECT * FROM AgtxUnidade");
      $result = $sql->fetchAll();
      $this->dbh = null;

      return $result;
     
    }

    public function do_new_entry_get_fabricante(){
      //realiza query
      $sql = $this->dbh->query("SELECT * FROM Fabricante");
      $result = $sql->fetchAll();
      $this->dbh = null;

      return $result;
     
    }

    public function do_new_entry_get_fornecedor(){
      //realiza query
      $sql = $this->dbh->query("SELECT * FROM Fornecedor");
      $result = $sql->fetchAll();
      $this->dbh = null;

      return $result;
     
    }

    public function do_new_entry_get_embalagem(){
      //realiza query
      $sql = $this->dbh->query("SELECT * FROM Embalagem");
      $result = $sql->fetchAll();
      $this->dbh = null;

      return $result;
     
    }
		
    public function new_agtx($nomeComercialAgtx, $classeAplicacaoAgtx, $principioAtivoAgtx, $concentracaoAgtx,                       $formulacaoAgtx, $statusAgtx, $idFabricante, $idFornecedor, $idEmbalagem){
	    
	    
      /*
		Os ids podem ser obtidos com as queries de select em cada tabela, atribui cada id em uma variavel e passa na query abaixo.

	    */


       $sql = $this->dbh->exec("INSERT INTO AgtxUnidade(nomeComercialAgtx, classeAplicacaoAgtx, principioAtivoAgtx, concentracaoAgtx, formulacaoAgtx, statusAgtx, Fabricante_idFabricante,Fornecedor_idFornecedor, Embalagem_idEmbalagem) 
VALUES ('$nomeComercialAgtx', '$classeAplicacaoAgtx', '$principioAtivoAgtx', '$concentracaoAgtx', '$formulacaoAgtx', '$statusAgtx', '$idFabricante', '$idFornecedor', '$idEmbalagem')");
      $result = $sql->fetch();
       echo $result;
       print_r($sql);
       $this->dbh = null;
      // echo '<script>location.reload();</script>';


    }
		
  
		
		
		
		
	}

?>

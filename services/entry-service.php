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
      $sql = $this->dbh->query("INSERT INTO entrada(receitaEntrada, nfNumEntrada, dataNfEntrada, dataFabEntrada, dataValEntrada, dataEntrada, qtdAtualEntrada
	  stattusUsoEntrada) VALUES ('$receitaEntrada', '$nfNumEntrada', '$dataNfEntrada', '$dataFabEntrada', '$dataValEntrada', '$dataEntrada', '$qtdAtualEntrada',
	  '$stattusUsoEntrada')");
     // $result = $sql->fetch();
      $this->dbh = null;
     
    }
		

   public function new_entry_embalagem($tipoEmbalagem, $unMedidaEmbalagem, $qtdMedidaEmbalagem){
      //realiza query
      $sql = $this->dbh->query("INSERT INTO embalagem(tipoEmbalagem, unMedidaEmbalagem, qtdMedidaEmbalagem) VALUES ('$tipoEmbalagem', '$unMedidaEmbalagem', '$qtdMedidaEmbalagem')");
     // $result = $sql->fetch();
      $this->dbh = null;
     
    }
	
   public function new_entry_fornecedor($nomeFornecedor){
      //realiza query
      $sql = $this->dbh->query("INSERT INTO fornecedor(nomeFornecedor) VALUES ('$nomeFornecedor')");
     // $result = $sql->fetch();
      $this->dbh = null;
     
    }
		
   public function new_entry_fabricante($nomeFabricante){
      //realiza query
      $sql = $this->dbh->query("INSERT INTO fabricante(nomeFabricante) VALUES ('$nomeFabricante')");
     // $result = $sql->fetch();
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
		
	/*
		Abaixo, queries para trazer cada um dos aliados do agrotoxico (embarcador, fornecedor e embalagem)
		de acordo com o ID
		
		A idéia é quando o usuario selecionar algum agrotoxico que esteja no campo de seleção, ele vai carregar o agrotoxico
		trazendo os respectivos ID's dessas tabelas, se existirem. Ai é possivel rodar as queries e pegar os nomes.
		
		Se não existir, usa-se as queries de INSERT acima para inclusão, e automaticamente pega-se o id inserido.
	*/

    public function new_entry_get_info_emb($id){
      //realiza query
      $sql = $this->dbh->query("SELECT embalagem.* FROM embalagem
      WHERE idEmbalagem = '$id'");
      $result = $sql->fetch();
      $this->dbh = null;
     
    }

    public function new_entry_get_info_for($id){
      //realiza query
      $sql = $this->dbh->query("SELECT fornecedor.* FROM fornecedor
      WHERE idFornecedor = '$id'");
      $result = $sql->fetch();
      $this->dbh = null;
     
    }
   
    public function new_entry_get_info_fab($id){
      //realiza query
      $sql = $this->dbh->query("SELECT fabricante.* FROM fabricante
      WHERE idFabricante = '$id'");
      $result = $sql->fetch();
      $this->dbh = null;
     
    }

    public function new_agtx($nomeComercialAgtx, $classeAplicacaoAgtx, $principioAtivoAgtx, $concentracaoAgtx,                       $formulacaoAgtx, $statusAgtx){
      echo $nomeComercialAgtx;

      // $sql = $this->dbh->query("SELECT fabricante.* FROM fabricante WHERE idFabricante = '$id'");
      // $result = $sql->fetch();
      // $this->dbh = null;
      // echo '<script>location.reload();</script>';


    }
		
  
		
		
		
		
	}

?>

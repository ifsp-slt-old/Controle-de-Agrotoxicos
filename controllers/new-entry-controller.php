<?php
	
  include_once("../services/entry-service.php");
  
  class NewEntryController{
		  /*------------
	  @_AndreOliveira
	  @_EduardoPedroso
	  */
	  
	  // Cria nova entrada
	  public function do_new_entry($receitaEntrada, $nfNumEntrada, $dataNfEntrada, $dataFabEntrada, $dataValEntrada, $dataEntrada, $qtdAtualEntrada, $stattusUsoEntrada, $idAgtx){
	
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      $service->new_entry($receitaEntrada, $nfNumEntrada, $dataNfEntrada, $dataFabEntrada, $dataValEntrada,	$dataEntrada, $qtdAtualEntrada, $stattusUsoEntrada, $idAgtx);
	  
	  }
	  
	  // Cria nova embalagem
	  public function do_new_entry_embalagem($tipoEmbalagem, $unMedEmbalagem, $qtdMedEmbalagem){
	
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      $service->new_entry_embalagem($tipoEmbalagem, $unMedEmbalagem, $qtdMedEmbalagem);
	  
	  }
	  
	  // Cria novo fornecedor
	  public function do_new_entry_fornecedor($nomeFornecedor){
	
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      $service->new_entry_fornecedor($nomeFornecedor);
	  
	  }
	  
	  // Cria novo fabricante
	  public function do_new_entry_fabricante($nomeFabricante){
	
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      $service->new_entry_fabricante($nomeFabricante);
	  
	  }
	  
	  
	  /*
	  Funções de SELECT
	  */
	  
	  // Seleciona agrotoxicos
	  public function do_new_entry_get_agtx(){
		
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      return $service->new_entry_get_agtx();

	  }
	  // Seleciona fornecedores
  	  public function do_new_entry_get_fornecedor(){
		
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      return $service->do_new_entry_get_fornecedor();
	      		
	  }
	  // Seleciona embalagens
  	  public function do_new_entry_get_embalagem(){
		
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      return $service->do_new_entry_get_embalagem();
	      		
	  }
	  //Seleciona fabricantes
	  public function do_new_entry_get_fabricante(){
		
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      return $service->do_new_entry_get_fabricante();
	      		
	  }
	  
  }
?>

<?php
	
  include_once("../services/entry-service.php");
  
  class NewEntryController{
	  
	  public function do_new_entry($receitaEntrada, $nfNumEntrada, $dataNfEntrada, $dataFabEntrada, $dataValEntrada, $dataEntrada, $qtdAtualEntrada, $stattusUsoEntrada){
	
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      $service->new_entry($receitaEntrada, $nfNumEntrada, $dataNfEntrada, $dataFabEntrada, $dataValEntrada,	$dataEntrada, $qtdAtualEntrada, $stattusUsoEntrada);
	  
	  }
	  
	  
	  public function do_new_entry_embalagem($tipoEmbalagem, $unMedEmbalagem, $qtdMedEmbalagem){
	
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      $service->new_entry_embalagem($tipoEmbalagem, $unMedEmbalagem, $qtdMedEmbalagem);
	  
	  }
	  
	  public function do_new_entry_fornecedor($nomeFornecedor){
	
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      $service->new_entry_fornecedor($nomeFornecedor);
	  
	  }
	  
	 public function do_new_entry_fabricante($nomeFabricante){
	
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      $service->new_entry_fabricante($nomeFabricante);
	  
	  }
	  
	  
	  /*
	  Funções de SELECT
	  */
	  
	  public function do_new_entry_get_agtx(){
		
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      return $service->new_entry_get_agtx();

	  }
	  
  	  public function do_new_entry_get_fornecedor(){
		
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      return $service->do_new_entry_get_fornecedor();
	      		
	  }

  	  public function do_new_entry_get_embalagem(){
		
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      return $service->do_new_entry_get_embalagem();
	      		
	  }

	  public function do_new_entry_get_fabricante(){
		
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      return $service->do_new_entry_get_fabricante();
	      		
	  }
	  
  }
?>

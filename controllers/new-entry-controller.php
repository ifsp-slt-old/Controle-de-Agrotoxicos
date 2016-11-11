<?php
	
  include_once("../services/entry-service.php");
  
  class NewEntryController{
	  
	  public function do_new_entry($receitaEntrada, $nfNumEntrada, $dataNfEntrada, $dataFabEntrada, $dataValEntrada, $dataEntrada, $qtdAtualEntrada, $stattusUsoEntrada){
	
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      $service->new_entry($receitaEntrada, $nfNumEntrada, $dataNfEntrada, $dataFabEntrada, $dataValEntrada,				   $dataEntrada, $qtdAtualEntrada, $stattusUsoEntrada);
	  
	  }
	  
  }
?>

<?php
	
  include_once("../services/entry-service.php");
  
  class NewEntryController{
	  
	  public function do_new_entry($receitaEntrada, $nfNumEntrada, $dataNfEntrada, $dataFabEntrada, $dataValEntrada, $dataEntrada, $qtdAtualEntrada, $stattusUsoEntrada){
	
	   	  $service = new EntryService();
	      $service->new_entry($receitaEntrada, $nfNumEntrada, $dataNfEntrada, $dataFabEntrada, $dataValEntrada,				   $dataEntrada, $qtdAtualEntrada, $stattusUsoEntrada);
	  
	  }
	  
  }
?>

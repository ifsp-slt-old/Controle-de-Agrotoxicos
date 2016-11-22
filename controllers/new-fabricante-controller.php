<?php
  include_once("../services/entry-service.php");

  class NewFabricanteController{

  	public function new_entry_embalagem($tipoEmbalagem, $undMedidaEmbalagem, $qtdMedidaEmbalagem){

  		$service = new EntryService();
  		$service->new_entry_embalagem($tipoEmbalagem, $undMedidaEmbalagem, $qtdMedidaEmbalagem);

  	}
  }

?>

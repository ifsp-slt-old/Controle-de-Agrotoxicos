<?php
  include_once("../services/entry-service.php");

  class NewFornecedorController{

  	public function new_entry_fornecedor($nomeFornecedor){

  		$service = new EntryService();
  		$service->new_entry_fornecedor($nomeFornecedor);

  	}
  }

?>

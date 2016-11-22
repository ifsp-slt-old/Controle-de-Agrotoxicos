<?php
  include_once("../services/entry-service.php");

  class NewFabricanteController{

  	public function new_entry_fabricante($nomeFabricante){

  		$service = new EntryService();
  		$service->new_entry_fabricante($nomeFabricante);

  	}
  }

?>

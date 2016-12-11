<?php
  include_once("../services/entry-service.php");

  class NewFabricanteController{

    /*------------
    @_EduardoPedroso 
    */

  	public function new_entry_fabricante($nomeFabricante){

  		$service = new EntryService();
  		$service->new_entry_fabricante($nomeFabricante);

  	}
  }

?>

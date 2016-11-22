<?php
  include_once("../services/entry-service.php");

  class NewAgtxController{

  	public function new_agtx($nomeComercialAgtx, $classeAplicacaoAgtx, $principioAtivoAgtx, $concentracaoAgtx, 						$formulacaoAgtx, $statusAgtx){

  		$service = new EntryService();
  		$service->new_agtx($nomeComercialAgtx, $classeAplicacaoAgtx, $principioAtivoAgtx, $concentracaoAgtx, 				$formulacaoAgtx, $statusAgtx);

  	}
  }

?>

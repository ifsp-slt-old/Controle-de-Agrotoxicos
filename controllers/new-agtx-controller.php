<?php
  include_once("../services/entry-service.php");

  class NewAgtxController{

  	public function new_agtx($nomeComercialAgtx, $classeAplicacaoAgtx, $principioAtivoAgtx, $concentracaoAgtx, 						$formulacaoAgtx, $statusAgtx, $idFabricante, $idFornecedor, $idEmbalagem){

  		$service = new EntryService();
  		$service->new_agtx($nomeComercialAgtx, $classeAplicacaoAgtx, $principioAtivoAgtx, $concentracaoAgtx, 				$formulacaoAgtx, $statusAgtx, $idFabricante, $idFornecedor, $idEmbalagem);

  	}
  }

?>

<?php
  include_once("../services/balance-service.php"); 	
  class BalanceController{

  	public function get_entry_balance($initialDate, $finalDate) {
  		$service = new BalanceService();
  		$rows = $service->get_entry_balance($initialDate, $finalDate);
  		$this->mountTable($rows);
  	}

  	static function mountTable($rows){
  		echo "<table class='table'>
  		<thead>
		    <tr>
		      <th>Data Entrada</th>
		      <th>Nome Comercial Agrotoxico</th>
		      <th>Data NF</th>
		      <th>Nome Fornecedor</th>
		    </tr>
		  </thead>
		  <tbody>";

		  foreach ($rows as $r){
		  	$dataEntrada = date("d/m/Y", strtotime($r['dataEntrada']));
		  	$nomeAgtx = $r['nomeComercialAgtx'];
		  	$dataNfEntrada = date("d/m/Y", strtotime($r['dataNfEntrada']));
		  	$nomeFornecedor = $r['nomeFornecedor'];
  		  	echo "<tr> <td> $dataEntrada </td> <td> $nomeAgtx </td> <td> $dataNfEntrada</td> <td> $nomeFornecedor </td></tr>";
  		  } 

  		  echo "</tbody></table>";	

  	}

  }
?>

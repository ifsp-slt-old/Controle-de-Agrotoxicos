<?php
	
  include_once("../services/entry-service.php");
  
  class NewEntryController{
	  
	  public function do_new_entry($receitaEntrada, $nfNumEntrada, $dataNfEntrada, $dataFabEntrada, $dataValEntrada, $dataEntrada, $qtdAtualEntrada, $stattusUsoEntrada){
	
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
	      $service->new_entry($receitaEntrada, $nfNumEntrada, $dataNfEntrada, $dataFabEntrada, $dataValEntrada,				   $dataEntrada, $qtdAtualEntrada, $stattusUsoEntrada);
	  
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
	          $service->new_entry_get_agtx();
		  
		  //CASO SEJA NECESSARIO TRATAR OS DADOS, PODE-SE FAZER NESTE TRECHO
		  
	  }
	  
	  public function do_new_entry_get_fornecedor($id){
		 
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
		 $agtx_fornecedor = array();
		 $agtx_fornecedor_nome = '';
	         $agtx_fornecedor =  $service->new_entry_get_agtx_for($id);
		  
		  if($agtx_fornecedor){
			  $agtx_fornecedor_nome = $agtx_fornecedor['nomeFornecedor'];
			  return $agtx_fornecedor_nome;
		  }else{
			  return 'SEMDADOS';
		  }
		  
		 
		  
	  }
	  
	    public function do_new_entry_get_fabricante($id){
		 
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
		 $agtx_fabricante = array();
		 $agtx_fabricante_nome = '';
	         $agtx_fabricante =  $service->new_entry_get_agtx_fab($id);
		  
		  if($agtx_fabricante){
			  $agtx_fabricante_nome = $agtx_fabricante['nomeFabricante'];
			  return $agtx_fabricante_nome;
		  }else{
			  return 'SEMDADOS';
		  }
		  
		 
		  
	  }
	  
	    public function do_new_entry_get_embalagem($id){
		 
		  //instancia serviço		
	   	  $service = new EntryService();
	   	  //Realiza nova entrada
		 $agtx_embalagem = array();
		 $emb = array();
		// $agtx_embalagem_tipo = '';
		// $agtx_embalagem_unidade = '';
		// $agtx_embalagem_qtde = '';
	         $agtx_embalagem =  $service->new_entry_get_agtx_emb($id);
		  
		  if($agtx_embalagem){
			  for($i=0; $i<sizeof($agtx_embalagem); $i++){
				  $emb[$i]['tipoEmbalagem'] =  $agtx_embalagem['tipoEmbalagem'];
				  $emb[$i]['unMedEmbalagem'] =  $agtx_embalagem['unMedEmbalagem'];
				  $emb[$i]['qtdMedEmbalagem'] =  $agtx_embalagem['qtdMedEmbalagem'];
			  }
			 
			  return $emb;
		  }else{
			  return 'SEMDADOS';
		  }
		  
		 
		  
	  }
	  
	  
	  
	  
  }
?>

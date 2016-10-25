<?php
  class LoginController {
	  
	  /*------------
	  @_AndreOliveira
	  @_EduardoPedroso
	  */
	  
	
	 
	public function do_login($email, $senha){
		
		//tratar os dados se necessario
		//MD5 PARA SENHA, STRTOLOWER PARA EMAIL
		//E POR AI VAI
		
		do_select($email, $senha) 
	}
	
	public function do_select($email, $senha){
	
	//chama conexao

	$sql = sprintf("SELECT * from usuario WHERE loginUsuario = '%s' AND senhaUsuario = '%s'", $email, $senha);
	//executa a query ($sql->execute();)
	
	if(!$sql){
	return false; //OU ERRO, CASO QUISER TRATAÇÃO ESPECIFICA
	}else{
		//COMO OBRIGATORIAMENTE O SELECT TRAZ APENAS 1 REGISTRO
    //PODEMOS SETAR FIXAMENTE AS VARIAVEIS
    $email_bd = $sql['loginUsuario']; //CASO NÃO FUNCIONE, MUDE PARA $sql->LoginUsuario;
    $pass_bd =  $sql['senhaUsuario'];
		header("Location: ../views/pagina.php"); //DIRECIONA PARA A INDEX DO SITE (ALTERAR CAMINHO)

	}	
		
	}
	   
    
  }
?>

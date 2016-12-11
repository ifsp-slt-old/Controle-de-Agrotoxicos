<?php
  include_once("../services/signup-service.php");
  class SignupController{

    /*------------	
	@_AndreOliveira
	*/

    public function do_signup($nome, $login, $senha, $permissao){
      $service = new SignupService();
      //Realiza cadastro (senha passada como md5)
      $service->do_signup($nome, $login, md5($senha),$permissao);
    }
  }
?>

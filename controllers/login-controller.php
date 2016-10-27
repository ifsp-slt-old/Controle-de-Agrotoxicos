<?php
  include_once("../services/login-service.php");

  class LoginController {

	  /*------------
	  @_AndreOliveira
	  @_EduardoPedroso
	  */

  	public function do_login($email, $senha){

  		//tratar os dados se necessario
  		//MD5 PARA SENHA, STRTOLOWER PARA EMAIL
  		//E POR AI VAI
      $service = new LoginService();
  		$service->do_login(strtolower($email), md5($senha));
  	}

  }
?>

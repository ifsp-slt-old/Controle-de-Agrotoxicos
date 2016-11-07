<?php
  include_once("../services/signup-service.php");
  class SignupController{


    public function do_signup($nome, $login, $senha, $permissao){
      $service = new SignupService();
      $service->do_signup($nome, $login, md5($senha),$permissao);
    }
  }
?>

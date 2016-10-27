<?php
  class LoginService{

    public function do_login($email, $senha){

      //chama conexao
      echo 'chegou';
      // $sql = sprintf("SELECT * from usuario WHERE loginUsuario = '%s' AND senhaUsuario = '%s'", $email, $senha);
      // $sql->execute();
      //
      // if(!$sql){
      //   return false; //OU ERRO, CASO QUISER TRATAÇÃO ESPECIFICA
      // } else {
      //   //COMO OBRIGATORIAMENTE O SELECT TRAZ APENAS 1 REGISTRO
      //   //PODEMOS SETAR FIXAMENTE AS VARIAVEIS
      //   $email_bd = $sql['loginUsuario']; //CASO NÃO FUNCIONE, MUDE PARA $sql->LoginUsuario;
      //   $pass_bd =  $sql['senhaUsuario'];
      //   header("Location: ../views/index.php"); //DIRECIONA PARA A INDEX DO SITE (ALTERAR CAMINHO)
      // }

    }
  }
?>

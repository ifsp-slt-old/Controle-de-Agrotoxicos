<?php
  class LoginService{

    private $dbh;

    function __construct(){
      try {
          //Faz conexao
          $this->dbh = new PDO("mysql:host=127.0.0.1;port=8889;dbname=ctrl_agrotoxicos", 'root', 'root');
      } catch (PDOException $e) {
          print "Error!: " . $e->getMessage() . "<br/>";
          die();
      }
    }

    public function do_login($email, $senha){

      //realiza query
      $sql = $this->dbh->query("SELECT * from `usuario` WHERE loginUsuario = '$email' AND senhaUsuario = '$senha'");
      $result = $sql->fetch();
      $this->dbh = null;

      if(!$result){
        print_r($result);
        echo "<span style='color:red'> Usuario/Senha invalidos</span>";
      } else {
        print_r($result);
        echo count($result);


        //COMO OBRIGATORIAMENTE O SELECT TRAZ APENAS 1 REGISTRO
        //PODEMOS SETAR FIXAMENTE AS VARIAVEIS
        // $email_bd = $sql['loginUsuario']; //CASO NÃO FUNCIONE, MUDE PARA $sql->LoginUsuario;
        // $pass_bd =  $sql['senhaUsuario'];
        header("Location: ../views/index.php"); //DIRECIONA PARA A INDEX DO SITE (ALTERAR CAMINHO)
      }

    }
  }
?>

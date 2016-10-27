<?php
  class LoginService{

    private $dbh;

    function __construct(){
      try {
          //Faz conexao com o banco
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

      if(!$result){ //Verifica se existe o usuario
        echo "<span style='color:red'> Usuario/Senha invalidos</span>";
      } else {
        //Inicia a sessao
        session_start();
        //Salva sessão do usuario
        $_SESSION['nomeUsuario'] = $results['nomeUsuario'];
        $_SESSION['idUsuario'] = $results['idUsuario'];
        $_SESSION['loginUsuario'] = $results['loginUsuario'];

        //Realiza o redirect via javascript
        echo '<script>window.location.href = "../index.php";</script>';
      }

    }
  }
?>

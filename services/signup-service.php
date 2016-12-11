<?php
  class SignupService{
        /*------------
    @_AndreOliveira
    */
    function __construct(){
      try {
          //Faz conexao com o banco
          $this->dbh = new PDO("mysql:host=127.0.0.1;port=8889;dbname=ctrl_agrotoxicos", 'root', 'root');
      } catch (PDOException $e) {
          print "Error!: " . $e->getMessage() . "<br/>";
          die();
      }
    }
	

    public function do_signup($nome, $login, $senha, $permissao){
       // Salva usuario no banco
       $sql = $this->dbh->query("INSERT INTO usuario(nomeUsuario, loginUsuario, senhaUsuario, permissaoUsuario) VALUES ('$nome', '$login', '$senha', '$permissao')");
       $this->dbh = null;
       echo 'Cadastro realizado com sucesso';

       //Realiza o redirect via javascript
       echo '<script>window.location.href = "../index.php";</script>';
    }

  }
?>

<?php
  class HeaderController {

	  /*------------
	  @_AndreOliveira
	  @_EduardoPedroso
	  */

  	public function do_logout() {
      session_start();
      //Destroi sessao do usuario e reseta $_SESSION
      $_SESSION = array();
      session_destroy();
      echo '<script>window.location.href = "../views/login.php";</script>';
  	}

  }
?>

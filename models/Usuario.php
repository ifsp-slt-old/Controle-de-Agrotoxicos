<?php
  class Usuario {
    /*------------
    @_AndreOliveira
    @_EduardoPedroso
    */
    private $nomeUsuario;
    private $loginUsuario;
    private $senhaUsuario;
    private $permissaoUsuario;

    function __construct($nomeUsuario, $loginUsuario, $senhaUsuario, $permissaoUsuario) {
      $this->nomeUsuario = $nomeUsuario;
      $this->loginUsuario = $loginUsuario;
      $this->senhaUsuario = $senhaUsuario;
      $this->permissaoUsuario = $permissaoUsuario;
    }

  }
?>

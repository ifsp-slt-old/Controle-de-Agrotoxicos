<?php
  class Usuario {

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

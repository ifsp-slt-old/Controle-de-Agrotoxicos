<?php
  class Saida {

    private $tipoSaida;
    private $dataSaida;
    private $pesoSaida;

    function __construct($tipoSaida, $dataSaida, $pesoSaida) {
      $this->tipoSaida = $tipoSaida;
      $this->dataSaida = $dataSaida;
      $this->pesoSaida = $pesoSaida;
    }

  }
?>

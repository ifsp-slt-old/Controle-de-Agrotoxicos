<?php
  class Entrada {
    private $receitaEntrada;
    private $nfNumEntrada;
    private $dataNfEntrada;
    private $dataFabEntrada;
    private $dataValEntrada;
    private $dataEntrada;
    private $qtdAtualEntrada;
    private $statusUsoEntrada;

    function __construct($receitaEntrada, $nfNumEntrada, $dataNfEntrada, $dataFabEntrada, $dataValEntrada,
                         $dataEntrada, $qtdAtualEntrada, $statusUsoEntrada) {
      $this->receitaEntrada = $receitaEntrada;
      $this->nfNumEntrada = $nfNumEntrada;
      $this->dataNfEntrada = $dataNfEntrada;
      $this->dataFabEntrada = $dataFabEntrada;
      $this->dataValEntrada = $dataValEntrada;
      $this->dataEntrada = $dataEntrada;
      $this->qtdAtualEntrada = $qtdAtualEntrada;
      $this->statusUsoEntrada = $statusUsoEntrada;
    }
  }
?>

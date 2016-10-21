<?php
  class Requisicao{

    private $tipoRequisicao;
    private $dataRequisicao;
    private $principioAtivoReq;
    private $concentracaoReq;
    private $formulacaoReq;
    private $undMedidaReq;
    private $qtdAplicacaoReq;
    private $nfNumEntradaReq;
    private $tipoEmbalagemReq;
    private $qtdEmbalagemReq;

    function __construct($tipoRequisicao, $dataRequisicao, $principioAtivoReq, $concentracaoReq,
                         $formulacaoReq, $undMedidaReq, $qtdAplicacaoReq, $nfNumEntradaReq, $tipoEmbalagemReq, $qtdEmbalagemReq) {
                           
      $this->tipoRequisicao = $tipoRequisicao;
      $this->dataRequisicao = $dataRequisicao;
      $this->principioAtivoReq = $principioAtivoReq;
      $this->concentracaoReq = $concentracaoReq;
      $this->formulacaoReq = $formulacaoReq;
      $this->undMedidaReq = $undMedidaReq;
      $this->qtdAplicacaoReq = $qtdAplicacaoReq;
      $this->nfNumEntradaReq = $nfNumEntradaReq;
      $this->tipoEmbalagemReq = $tipoEmbalagemReq;
      $this->qtdEmbalagemReq = $qtdEmbalagemReq;
    }

  }
?>

<?php
  class Requisicao{
        /*------------
    @_EduardoPedroso
    */

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

    function __construct($tipoRequisicao, $dataRequisicao, $principioAtivoReq = null, $concentracaoReq = null, $formulacaoReq = null,
                         $undMedidaReq = null, $qtdAplicacaoReq = null, $nfNumEntradaReq = null, $tipoEmbalagemReq = null, $qtdEmbalagemReq = null) {

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

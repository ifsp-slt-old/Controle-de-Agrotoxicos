<?php
  class AgtxUnidade {

    private $nomeComercialAgtx;
    private $classeAplicacaoAgtx;
    private $principioAtivoAgtx;
    private $concentracaoAgtx;
    private $formulacaoAgtx;
    private $statusAgtx;

    function __construct($nomeComercialAgtx, $classeAplicacaoAgtx, $principioAtivoAgtx,
                         $concentracaoAgtx, $formulacaoAgtx, $statusAgtx) {

      $this->nomeComercialAgtx = $nomeComercialAgtx; //Nome comercial do agrotoxico
      $this->classeAplicacaoAgtx = $classeAplicacaoAgtx; //Classe de aplicaçao do agrotoxico
      $this->principioAtivoAgtx = $principioAtivoAgtx; //Principio Ativo
      $this->concentracaoAgtx = $concentracaoAgtx; //Concentraçao em ml/2
      $this->formulacaoAgtx = $formulacaoAgtx; //Formulaçao
      $this->statusAgtx = $statusAgtx; //Status atual
    }

  }
?>

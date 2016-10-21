
CREATE TABLE IF NOT EXISTS ctrl_agrotoxicos.Fabricante (
  idFabricante INT NOT NULL AUTO_INCREMENT,
  nomeFabricante VARCHAR(45) NOT NULL,
  PRIMARY KEY (idFabricante),
  UNIQUE INDEX nomeFabricante_UNIQUE (nomeFabricante ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table ctrl_agrotoxicos.Fornecedor
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS ctrl_agrotoxicos.Fornecedor (
  idFornecedor INT NOT NULL AUTO_INCREMENT,
  nomeFornecedor VARCHAR(45) NOT NULL,
  PRIMARY KEY (idFornecedor),
  UNIQUE INDEX nomeFabricante_UNIQUE (nomeFornecedor ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table ctrl_agrotoxicos.Embalagem
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS ctrl_agrotoxicos.Embalagem (
  idEmbalagem INT NOT NULL AUTO_INCREMENT,
  tipoEmbalagem VARCHAR(10) NOT NULL,
  undMedidaEmbalagem VARCHAR(3) NOT NULL,
  qtdMedidaEmbalagem FLOAT UNSIGNED NOT NULL,
  PRIMARY KEY (idEmbalagem),
  UNIQUE INDEX tipoEmbalagem_UNIQUE (tipoEmbalagem ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table ctrl_agrotoxicos.AgtxUnidade
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS ctrl_agrotoxicos.AgtxUnidade (
  idAgtxUnidade INT NOT NULL AUTO_INCREMENT,
  nomeComercialAgtx VARCHAR(45) NOT NULL,
  classeAplicacaoAgtx VARCHAR(45) NOT NULL,
  principioAtivoAgtx VARCHAR(45) NOT NULL,
  concentracaoAgtx VARCHAR(45) NOT NULL,
  formulacaoAgtx VARCHAR(45) NOT NULL,
  statusAgtx CHAR(1) NOT NULL,
  Fabricante_idFabricante INT NOT NULL,
  Fornecedor_idFornecedor INT NOT NULL,
  Embalagem_idEmbalagem INT NOT NULL,
  PRIMARY KEY (idAgtxUnidade, Fabricante_idFabricante, Fornecedor_idFornecedor, Embalagem_idEmbalagem),
  INDEX fk_AgtxUnidade_Fabricante_idx (Fabricante_idFabricante ASC),
  INDEX fk_AgtxUnidade_Fornecedor_idx (Fornecedor_idFornecedor ASC),
  INDEX fk_AgtxUnidade_Embalagem_idx (Embalagem_idEmbalagem ASC),
  CONSTRAINT fk_AgtxUnidade_Fabricante
    FOREIGN KEY (Fabricante_idFabricante)
    REFERENCES ctrl_agrotoxicos.Fabricante (idFabricante)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_AgtxUnidade_Fornecedor1
    FOREIGN KEY (Fornecedor_idFornecedor)
    REFERENCES ctrl_agrotoxicos.Fornecedor (idFornecedor)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_AgtxUnidade_Embalagem1
    FOREIGN KEY (Embalagem_idEmbalagem)
    REFERENCES ctrl_agrotoxicos.Embalagem (idEmbalagem)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table ctrl_agrotoxicos.Entrada
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS ctrl_agrotoxicos.Entrada (
  idEntrada INT(6) ZEROFILL NOT NULL AUTO_INCREMENT,
  receitaEntrada VARCHAR(45) NOT NULL,
  nfNumEntrada VARCHAR(45) NOT NULL,
  dataNfEntrada DATE NOT NULL,
  dataFabEntrada DATE NOT NULL,
  dataValEntrada DATE NOT NULL,
  dataEntrada DATETIME NOT NULL,
  qtdAtualEntrada FLOAT UNSIGNED NOT NULL,
  statusUsoEntrada CHAR(1) NOT NULL,
  AgtxUnidade_idAgtxUnidade INT NOT NULL,
  AgtxUnidade_Fabricante_idFabricante INT NOT NULL,
  AgtxUnidade_Fornecedor_idFornecedor INT NOT NULL,
  AgtxUnidade_Embalagem_idEmbalagem INT NOT NULL,
  PRIMARY KEY (idEntrada, AgtxUnidade_idAgtxUnidade, AgtxUnidade_Fabricante_idFabricante, AgtxUnidade_Fornecedor_idFornecedor, AgtxUnidade_Embalagem_idEmbalagem),
  INDEX fk_Entrada_AgtxUnidade_idx (AgtxUnidade_idAgtxUnidade ASC, AgtxUnidade_Fabricante_idFabricante ASC, AgtxUnidade_Fornecedor_idFornecedor ASC, AgtxUnidade_Embalagem_idEmbalagem ASC),
  CONSTRAINT fk_Entrada_AgtxUnidade1
    FOREIGN KEY (AgtxUnidade_idAgtxUnidade , AgtxUnidade_Fabricante_idFabricante , AgtxUnidade_Fornecedor_idFornecedor , AgtxUnidade_Embalagem_idEmbalagem)
    REFERENCES ctrl_agrotoxicos.AgtxUnidade (idAgtxUnidade , Fabricante_idFabricante , Fornecedor_idFornecedor , Embalagem_idEmbalagem)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table ctrl_agrotoxicos.Requisicao
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS ctrl_agrotoxicos.Requisicao (
  idRequisicao INT NOT NULL AUTO_INCREMENT,
  tipoRequisicao CHAR(1) NOT NULL,
  dataRequisicao DATE NOT NULL,
  principioAtivoReq VARCHAR(45) NULL,
  concentracaoReq VARCHAR(45) NULL,
  formulacaoReq VARCHAR(45) NULL,
  undMedidaReq VARCHAR(3) NULL,
  qtdAplicacaoReq FLOAT NULL,
  nfNumEntradaReq VARCHAR(45) NULL,
  tipoEmbalagemReq VARCHAR(10) NULL,
  qtdEmbalagemReq INT UNSIGNED NULL,
  PRIMARY KEY (idRequisicao))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table ctrl_agrotoxicos.Saida
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS ctrl_agrotoxicos.Saida (
  idSaida INT NOT NULL AUTO_INCREMENT,
  tipoSaida CHAR(1) NOT NULL,
  dataSaida DATETIME NOT NULL,
  pesoSaida FLOAT UNSIGNED NULL,
  Entrada_idEntrada INT(6) ZEROFILL NOT NULL,
  Entrada_AgtxUnidade_idAgtxUnidade INT NOT NULL,
  Entrada_AgtxUnidade_Fabricante_idFabricante INT NOT NULL,
  Entrada_AgtxUnidade_Fornecedor_idFornecedor INT NOT NULL,
  Entrada_AgtxUnidade_Embalagem_idEmbalagem INT NOT NULL,
  Requisicao_idRequisicao INT NOT NULL,
  PRIMARY KEY (idSaida, Entrada_idEntrada, Entrada_AgtxUnidade_idAgtxUnidade, Entrada_AgtxUnidade_Fabricante_idFabricante, Entrada_AgtxUnidade_Fornecedor_idFornecedor, Entrada_AgtxUnidade_Embalagem_idEmbalagem, Requisicao_idRequisicao),
  INDEX fk_Saida_Entrada_idx (Entrada_idEntrada ASC, Entrada_AgtxUnidade_idAgtxUnidade ASC, Entrada_AgtxUnidade_Fabricante_idFabricante ASC, Entrada_AgtxUnidade_Fornecedor_idFornecedor ASC, Entrada_AgtxUnidade_Embalagem_idEmbalagem ASC),
  INDEX fk_Saida_Requisicao_idx (Requisicao_idRequisicao ASC),
  CONSTRAINT fk_Saida_Entrada1
    FOREIGN KEY (Entrada_idEntrada , Entrada_AgtxUnidade_idAgtxUnidade , Entrada_AgtxUnidade_Fabricante_idFabricante , Entrada_AgtxUnidade_Fornecedor_idFornecedor , Entrada_AgtxUnidade_Embalagem_idEmbalagem)
    REFERENCES ctrl_agrotoxicos.Entrada (idEntrada , AgtxUnidade_idAgtxUnidade , AgtxUnidade_Fabricante_idFabricante , AgtxUnidade_Fornecedor_idFornecedor , AgtxUnidade_Embalagem_idEmbalagem)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_Saida_Requisicao1
    FOREIGN KEY (Requisicao_idRequisicao)
    REFERENCES ctrl_agrotoxicos.Requisicao (idRequisicao)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table ctrl_agrotoxicos.Retorno
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS ctrl_agrotoxicos.Retorno (
  idRetorno INT NOT NULL AUTO_INCREMENT,
  pesoRetorno FLOAT UNSIGNED NOT NULL,
  Saida_idSaida INT NOT NULL,
  Saida_Entrada_idEntrada INT(6) ZEROFILL NOT NULL,
  Saida_Entrada_AgtxUnidade_idAgtxUnidade INT NOT NULL,
  Saida_Entrada_AgtxUnidade_Fabricante_idFabricante INT NOT NULL,
  Saida_Entrada_AgtxUnidade_Fornecedor_idFornecedor INT NOT NULL,
  Saida_Entrada_AgtxUnidade_Embalagem_idEmbalagem INT NOT NULL,
  PRIMARY KEY (idRetorno, Saida_idSaida, Saida_Entrada_idEntrada, Saida_Entrada_AgtxUnidade_idAgtxUnidade, Saida_Entrada_AgtxUnidade_Fabricante_idFabricante, Saida_Entrada_AgtxUnidade_Fornecedor_idFornecedor, Saida_Entrada_AgtxUnidade_Embalagem_idEmbalagem),
  INDEX fk_Retorno_Saida_idx (Saida_idSaida ASC, Saida_Entrada_idEntrada ASC, Saida_Entrada_AgtxUnidade_idAgtxUnidade ASC, Saida_Entrada_AgtxUnidade_Fabricante_idFabricante ASC, Saida_Entrada_AgtxUnidade_Fornecedor_idFornecedor ASC, Saida_Entrada_AgtxUnidade_Embalagem_idEmbalagem ASC),
  CONSTRAINT fk_Retorno_Saida1
    FOREIGN KEY (Saida_idSaida , Saida_Entrada_idEntrada , Saida_Entrada_AgtxUnidade_idAgtxUnidade , Saida_Entrada_AgtxUnidade_Fabricante_idFabricante , Saida_Entrada_AgtxUnidade_Fornecedor_idFornecedor , Saida_Entrada_AgtxUnidade_Embalagem_idEmbalagem)
    REFERENCES ctrl_agrotoxicos.Saida (idSaida , Entrada_idEntrada , Entrada_AgtxUnidade_idAgtxUnidade , Entrada_AgtxUnidade_Fabricante_idFabricante , Entrada_AgtxUnidade_Fornecedor_idFornecedor , Entrada_AgtxUnidade_Embalagem_idEmbalagem)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table ctrl_agrotoxicos.Usuario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS ctrl_agrotoxicos.Usuario (
  idUsuario INT NOT NULL AUTO_INCREMENT,
  nomeUsuario VARCHAR(45) NOT NULL,
  loginUsuario VARCHAR(7) NOT NULL,
  senhaUsuario VARCHAR(45) NOT NULL,
  permissaoUsuario CHAR(1) NOT NULL,
  PRIMARY KEY (idUsuario),
  UNIQUE INDEX loginUsuario_UNIQUE (loginUsuario ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


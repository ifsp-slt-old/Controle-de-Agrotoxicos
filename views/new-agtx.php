
<div class="modal-content">
  <div class="modal-header">
    <span class="close">X </span>
    <h2> Novo Agrotoxico</h2>
  </div>
  <div class="modal-body" style="margin-top:10px">
  <form action="" method="POST">
      <p class="control">
        <input class="input" type="text" name="nomeComercialAgtx" placeholder="Nome comercial">
      </p>
      <p class="control">
        <input class="input" type="text" name="classeAplicacaoAgtx" placeholder="Classe de aplicação">
      </p>
      <p class="control">
        <input class="input" type="text" name="principioAtivoAgtx" placeholder="Principio Ativo">
      </p>
      <p class="control">
        <input class="input" type="text" name="concentracaoAgtx" placeholder="Concentração">
      </p>
      <p class="control">
        <input class="input" type="text" name="formulacaoAgtx" placeholder="Formulação">
      </p>
      <p class="control">
        <input class="input" type="text" name="statusAgtx" placeholder="Status">
      </p>
      <div class="columns">
        <div class="column">
          <select class="select is-three-quarters" name="AgtxUnidade_idAgtxUnidade" style="width:100%">
            <option selected="true" disabled="disabled"> Selecione um fornecedor </option>
            <?php
               $fornecedores = $entryController->do_new_entry_get_fornecedor();  
               foreach ($fornecedores as $f){
                  echo "<option value='" . $f['idFornecedor'] . "'>" . $f['nomeFornecedor'] . "</option>";
               }
            ?>
          </select>
        </div>
        <div class="column">
          <a href="./new-fornecedor.php" onClick="return popup(this, 'notes')" class="button">Novo Fornecedor</a>
        </div>
      </div>
      <div class="columns">
        <div class="column">
          <select class="select is-three-quarters" name="AgtxUnidade_idAgtxUnidade" style="width:100%">
            <option selected="true" disabled="disabled">Selecione uma embalagem </option>
            <?php
               $embalagens = $entryController->do_new_entry_get_embalagem();  
               foreach ($embalagens as $e){
                  echo "<option value='" . $e['idEmbalagem'] . "'>" . $e['tipoEmbalagem'] . " " . $e['qtdMedidaEmbalagem'] . $e['undMedidaEmbalagem'] . "</option>";
               }
            ?>
          </select>
        </div>
        <div class="column">
          <a href="./new-embalagem.php" onClick="return popup(this, 'notes')" class="button">Nova Embalagem</a>
        </div>
      </div>
      <div class="columns">
        <div class="column">
          <select class="select is-three-quarters" name="AgtxUnidade_idAgtxUnidade" style="width:100%">
            <option selected="true" disabled="disabled">Selecione um fabricante</option>
            <?php
               $fabricantes = $entryController->do_new_entry_get_fabricante();  
               foreach ($fabricantes as $f){
                  echo "<option value='" . $f['idFabricante'] . "'>" . $f['nomeFabricante'] . "</option>";
               }
            ?>
          </select>
        </div>
        <div class="column">
          <a href="./new-fabricante.php" onClick="return popup(this, 'notes')" class="button">Novo Fabricante</a>
        </div>
      </div>
    </div>
    <button class="button is-info margin-top-10" style="width:100%;" type="submit">
      Criar novo agrotoxico
    </button>
  </form>
</div>
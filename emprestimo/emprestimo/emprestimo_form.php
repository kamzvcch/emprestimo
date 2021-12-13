<?php error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>
<div class="container-fluid">
<form> 
    <div class="mb-3">
        <input type="hidden" name="id" value="<?=$emprestimo->__get('id');?>"> 
        <input type="hidden" name="op" value="i">

        <label for="descricao" class="formo-label">Descrição </label>
        <input type="text" class="form-control" id="descricao"
            placeholder="Descrição do Objeto emprestado" validate>
    </div>
    <div class="mb-3">
        <label for="estacom" class="formo-label">Está com</label>
        <input type="text" class="form-control" id="estacom"
            placeholder="Pessoa para quem eu emprestei" validate>
    </div>
    <div class="mb-3">
        <label for="telefone" class="formo-label">Telefone</label>
        <input type="text" class="form-control" id="telefone"
            placeholder="Telefone de contato" validate>
    </div>
    <div class="mb-3">
        <label for="dtaemprestimo" class="formo-label">Data</label>
        <input type="date" class="form-control" id="dtaemprestimo"
            placeholder="Data do empréstimo" validate value="<?php echo substr($emprestimo->__get('dtaemprestimo'),0,10); ?>">
    </div>
    <button type="button" onclick="window.history.back()">Voltar</button>
    <input type="reset">
    <input type="submit">
</form>
</div>


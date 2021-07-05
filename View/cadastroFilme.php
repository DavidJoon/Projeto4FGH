<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include("header.php");
?>

<div class="container">
<form action="../Controller/inserirFilme.php" method="get" class="row g-3">
  
  <div class="col-md-8">
    <label for="inputFilme" class="form-label">Filme</label>
    <input type="text" name="filme" class="form-control" id="inputFilme" placeholder="Nome do filme">
  </div>

  <div class="col-md-4">
    <label for="inputGenero" class="form-label">Gênero</label>
    <input type="text"  name="genero" class="form-control" id="inputGenero" placeholder="Gênero do filme">
  </div>
  
  <div class="col-md-2">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="text"  name="ano" class="form-control" id="inputAno" placeholder="Ano do filme">
  </div>
  
  <div class="col-md-10">
    <label for="inputCapa" class="form-label">Capa</label>
    <input type="text"  name="capa" class="form-control" id="inputCapa" placeholder="Capa do filme">
  </div>
  
  <div class="col-12">
    <label for="inputURL" class="form-label">URL</label>
    <input type="text"  name="url" class="form-control" id="inputURL" placeholder="URL do filme">
  </div>
 
  <div class="col-12">
    <label for="inputSinopse" class="form-label">Sinopse</label>
    <textarea class="form-control" name="sinopse" placeholder="Digite a sinopse do filme" id="floatingTextarea2" style="height: 100px"></textarea>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastro</button>
  </div>

</form>
</div>




<?php
include("footer.php");
?>
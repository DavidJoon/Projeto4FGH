<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include("header.php");
?>

<div class="container">
<form action="../Controller/inserirPsum.php" method="get" class="row g-3">
  
  <div class="col-md-10">
    <label for="inputJogo" class="form-label">Jogo</label>
    <input type="text" name="jogo" class="form-control" id="inputFilme" placeholder="Nome do Jogo">
  </div>

  <div class="col-md-2">
    <label for="inputData" class="form-label">Data</label>
    <input type="text"  name="data" class="form-control" id="inputData" placeholder="Data do Jogo">
  </div>

  <div class="col-md-4">
    <label for="inputGenero" class="form-label">Gênero</label>
    <input type="text"  name="genero" class="form-control" id="inputGenero" placeholder="Gênero do Jogo">
  </div>
  
  <div class="col-md-4">
    <label for="inputDesenvolvedora" class="form-label">Desenvolvedora</label>
    <input type="text"  name="desenvolvedora" class="form-control" id="inputDesenvolvedora" placeholder="Desenvolvedora do Jogo">
  </div>
  
  <div class="col-4">
    <label for="inputOutras" class="form-label">Outras Plataformas</label>
    <input type="text"  name="outras" class="form-control" id="inputOutras" placeholder="Outras Plataformas">
  </div>

  <div class="col-md-12">
    <label for="inputCapa" class="form-label">Capa</label>
    <input type="text"  name="capa" class="form-control" id="inputCapa" placeholder="Capa do Jogo">
  </div>

  <div class="col-12">
    <label for="inputSinopse" class="form-label">Sinopse</label>
    <textarea class="form-control" name="sinopse" placeholder="Digite um resumo do Jogo" id="floatingTextarea2" style="height: 100px"></textarea>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastro</button>
  </div>

</form>
</div>




<?php
include("footer.php");
?>
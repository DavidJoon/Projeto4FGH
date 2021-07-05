<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoPsum.php');

$codigo = $_GET["codigo"];

$resul = visuCodigoPsum($conexao, $codigo);
$jogo = mysqli_fetch_assoc($resul);

?>

<div class="container">

  <form action="../Controller/alteraPsum.php" method="post" class="row g-3">

  <div class="col-md-1">
      <label for="inputCodigo" class="form-label">Código</label>
      <input type="text" readonly value="<?=$jogo['codpsum']?>"name="codpsum" class="form-control" id="inputCodigo">
    </div>
    
    <div class="col-md-8">
      <label for="inputJogo" class="form-label">Jogo</label>
      <input type="text" value="<?=$jogo['nomepsum']?>"name="jogo" class="form-control" id="inputJogo">
    </div>

    <div class="col-md-2">
      <label for="inputData" class="form-label">Data</label>
      <input type="text" value="<?=$jogo['datapsum']?>" name="data" class="form-control" id="inputData">
    </div>

    <div class="col-md-3">
      <label for="inputGenero" class="form-label">Gênero</label>
      <input type="text" name="genero" value="<?=$jogo['generopsum']?>" class="form-control" id="inputGenero">
    </div>

    <div class="col-md-3">
      <label for="inputDesenvolvedora" class="form-label">Desenvolvedora</label>
      <input type="text" name="desenvolvedora" value="<?=$jogo['desenpsum']?>" class="form-control" id="inputDesenvolvedora">
    </div>

    <div class="col-md-10">
      <label for="inputCapa" class="form-label">Capa</label>
      <input type="text" value="<?=$jogo['capapsum']?>" name="capa" class="form-control" id="inputCapa">
    </div>

    <div class="col-12">
      <label for="inputOutras" class="form-label">Outras Plataformas</label>
      <input type="text" value="<?=$jogo['outrasplum']?>" name="outras" class="form-control" id="inputOutras">
    </div>

    <div class="form-floating">
      <textarea class="form-control" name="sinopse" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"> <?=$jogo['sinpsum']?></textarea>
      <label for="floatingTextarea2">Sinopse</label>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>

</div>
</form>

<?php
include('footer.php')
?>
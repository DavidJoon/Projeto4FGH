<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoPstres.php');

$codigo = $_GET["codigo"];

$resul = visuCodigoPstres($conexao, $codigo);
$jogo = mysqli_fetch_assoc($resul);

?>

<div class="container mt-4">

  <form action="../Controller/alteraPstres.php" method="post" class="row g-3">

  <div class="col-md-1">
      <label for="inputCodigo" class="form-label">Código</label>
      <input type="text" readonly value="<?=$jogo['codpstres']?>"name="codpstres" class="form-control" id="inputCodigo">
    </div>
    
    <div class="col-md-11">
      <label for="inputJogo" class="form-label">Jogo</label>
      <input type="text" value="<?=$jogo['nomepstres']?>"name="jogo" class="form-control" id="inputJogo">
    </div>

    <div class="col-md-2">
      <label for="inputData" class="form-label">Data</label>
      <input type="text" value="<?=$jogo['datapstres']?>" name="data" class="form-control" id="inputData">
    </div>

    <div class="col-md-5">
      <label for="inputGenero" class="form-label">Gênero</label>
      <input type="text" name="genero" value="<?=$jogo['generopstres']?>" class="form-control" id="inputGenero">
    </div>

    <div class="col-md-5">
      <label for="inputDesenvolvedora" class="form-label">Desenvolvedora</label>
      <input type="text" name="desenvolvedora" value="<?=$jogo['desenpstres']?>" class="form-control" id="inputDesenvolvedora">
    </div>

    <div class="col-md-12">
      <label for="inputCapa" class="form-label">Capa</label>
      <input type="text" value="<?=$jogo['capapstres']?>" name="capa" class="form-control" id="inputCapa">
    </div>

    <div class="col-12">
    <label for="inputSinopse" class="form-label">Sinopse</label>
    <textarea class="form-control" name="sinopse" placeholder="Digite um resumo do Jogo" id="floatingTextarea2" style="height: 100px"><?=$jogo['sinpstres']?></textarea>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-success">Alterar</button>
    </div>

</div>
</form>

<?php
include('footer.php')
?>
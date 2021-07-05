<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once("header.php");
include_once("../Model/bancoPstres.php");
include_once("../Model/conexao.php");
//echo("<script> alert('Oi, tudo bem?.');</script>");
?>
<div class="container">
    <form action="" method="post" class="row g-3">

        <div class="col-12">
            <label class="form-label"> Digite o nome do Jogo </label>
            <input type="text" class="form-control" name="jogo">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary"> Localizar </button>
        </div>

    </form>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Jogo</th>
      <th scope="col">Data</th>
      <th scope="col">Gênero</th>
      <th scope="col">Desenvovedora</th>
      <th scope="col">Capa</th>
      <th scope="col">Resumo</th>
      <th scope="col">Alterar</th>
      <th scope="col">Apagar</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $jogo = isset($_POST["jogo"]) ? $_POST["jogo"]:"";
$dado = visuNomePstres($conexao, $jogo); 

foreach($dado as $dados) :
?>
    <tr>
    <th scope="row"><?=$dados["codpstres"]?></th>
      <td><?=$dados["nomepstres"]?></td>
      <td><?=$dados["datapstres"]?></td>
      <td><?=$dados["generopstres"]?></td>
      <td><?=$dados["desenpstres"]?></td>
      <td><img src="<?=$dados["capapstres"]?>" height="250" width="200" ></td>
      <td><?=$dados["sinpstres"]?></td>
      <td>
      <a class="btn btn-primary" href="alterarJogopstres.php?codigo=<?=$dados["codpstres"]?>">Alterar</a>
      </td>
      <td>
      <form action="../Controller/deletePstres.php" method="Post">
        <input type="hidden" name="codpstres" value="<?=$dados["codpstres"]?>">
        <button type="submit" class="btn btn-danger">Deletar</button>
      </form>
      </td>


    </tr>
<?php
endforeach;
?>

  </tbody>
</table>
<?php
include_once("footer.php");
?>
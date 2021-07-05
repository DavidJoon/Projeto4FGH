<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once("header.php");
include_once("../Model/bancoPc.php");
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
      <th scope="col">Sinopse</th>
      <th scope="col">Alterar</th>
      <th scope="col">Apagar</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $jogo = isset($_POST["jogo"]) ? $_POST["jogo"]:"";
$dado = visuNomePc($conexao, $jogo); 

foreach($dado as $dados) :
?>
    <tr>
    <th scope="row"><?=$dados["codpc"]?></th>
      <td><?=$dados["nomepc"]?></td>
      <td><?=$dados["datapc"]?></td>
      <td><?=$dados["generopc"]?></td>
      <td><?=$dados["desenpc"]?></td>
      <td><img src="<?=$dados["capapc"]?>" width="180" ></td>
      <td><?=$dados["sinpc"]?></td>
      <td>
      <a class="btn btn-primary" href="alterarPc.php?codigo=<?=$dados["codpc"]?>">Alterar</a>
      </td>
      <td>
      <form action="../Controller/deletePc.php" method="Post">
        <input type="hidden" name="codpc" value="<?=$dados["codpc"]?>">
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
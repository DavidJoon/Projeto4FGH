<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once("header.php");
include_once("../Model/bancoAtari.php");
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
        <button type="submit" class="botoes"> Localizar </button>
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
$dado = visuNomeAtari($conexao, $jogo); 

foreach($dado as $dados) :
?>
    <tr>
    <th scope="row"><?=$dados["codatari"]?></th>
      <td><?=$dados["nomeatari"]?></td>
      <td><?=$dados["dataatari"]?></td>
      <td><?=$dados["generoatari"]?></td>
      <td><?=$dados["desenatari"]?></td>
      <td><img src="<?=$dados["capaatari"]?>" height="250" width="200" ></td>
      <td><?=$dados["sinatari"]?></td>
      <td>
      <a class="btn btn-secondary" href="alterarAtari.php?codigo=<?=$dados["codatari"]?>">Alterar</a>
      </td>
      <td>
      <form action="../Controller/deleteAtari.php" method="Post">
        <input type="hidden" name="codatari" value="<?=$dados["codatari"]?>">
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
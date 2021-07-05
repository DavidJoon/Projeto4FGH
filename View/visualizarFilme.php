<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once("header.php");
include_once("../Model/bancoFilme.php");
include_once("../Model/conexao.php");
//echo("<script> alert('Oi, tudo bem?.');</script>");
?>
<div class="container">
    <form action="" method="post" class="row g-3">

        <div class="col-12">
            <label class="form-label"> Digite o nome do Filme </label>
            <input type="text" class="form-control" name="filme">
        </div>

        <div class="col-12">
            <label class="form-label"> Digite o Gênero do Filme </label>
            <input type="text" class="form-control" name="genero">
        </div>

        <div class="col-12">
            <label class="form-label"> Digite o ano do Filme </label>
            <input type="text" min="1900" max="2050" class="form-control" name="ano">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary"> Localizar </button>
        </div>

    </form>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Filme</th>
      <th scope="col">Gênero</th>
      <th scope="col">Ano</th>
      <th scope="col">Capa</th>
      <th scope="col">Alterar</th>
      <th scope="col">Apagar</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $filme = isset($_POST["filme"]) ? $_POST["filme"]:"";
$dado = visuNomeFilme($conexao, $filme); 

foreach($dado as $dados) :
?>
    <tr>
      <th scope="row"><?=$dados["codfil"]?></th>
      <td><?=$dados["nomefil"]?></td>
      <td><?=$dados["generofil"]?></td>
      <td><?=$dados["anofil"]?></td>
      <td><img src="<?=$dados["capafil"]?>" width="50" ></td>
      <td>
      <a class="btn btn-primary" href="alterarFilme.php?codigo=<?=$dados["codfil"]?>">Alterar</a>
      </td>
      <td>
      <form action="../Controller/deleteFilme.php" method="Post">
        <input type="hidden" name="codfil" value="<?=$dados["codfil"]?>">
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
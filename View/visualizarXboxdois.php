<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once("header.php");
include_once("../Model/bancoXboxdois.php");
include_once("../Model/conexao.php");
//echo("<script> alert('Oi, tudo bem?.');</script>");
?>
<div class="container mt-4">
    <form action="" method="post" class="row g-3">

        <div class="col-12">
            <label class="form-label"> Digite o nome do Jogo </label>
            <input type="text" class="form-control" name="jogo">
        </div>

        <div class="col-12">
        <button type="submit" class="botoes"> Localizar </button>
        </div>

    </form>

<?php 
$jogo = isset($_POST["jogo"]) ? $_POST["jogo"]:"";
if(!$jogo){
}else{
$dado = visuNomeXboxdois($conexao, $jogo); 
foreach($dado as $dados) :
?>

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

    <tr>
    <th scope="row"><?=$dados["codxboxdois"]?></th>
      <td><?=$dados["nomexboxdois"]?></td>
      <td><?=$dados["dataxboxdois"]?></td>
      <td><?=$dados["generoxboxdois"]?></td>
      <td><?=$dados["desenxboxdois"]?></td>
      <td><img src="<?=$dados["capaxboxdois"]?>" height="250" width="200" ></td>
      <td><?=$dados["sinxboxdois"]?></td>
      <td>
      <a class="btn btn-secondary" href="alterarXboxdois.php?codigo=<?=$dados["codxboxdois"]?>">Alterar</a>
      </td>
      <td>
      <form action="../Controller/deleteXboxdois.php" method="Post">
        <input type="hidden" name="codxboxdois" value="<?=$dados["codxboxdois"]?>">
        <button type="submit" class="btn btn-danger">Deletar</button>
      </form>
      </td>


    </tr>
<?php
endforeach;
}
?>

  </tbody>
</table>
<?php
include_once("footer.php");
?>
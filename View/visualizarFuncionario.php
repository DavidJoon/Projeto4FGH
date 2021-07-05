<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once("header.php");
include_once("../Model/bancoFuncionario.php");
include_once("../Model/conexao.php");
//echo("<script> alert('Oi, tudo bem?.');</script>");
?>
<div class="container">
    <form action="" method="post" class="row g-3">

        <div class="col-12">
            <label class="form-label"> Digite o nome do Funcionário </label>
            <input type="text" class="form-control" name="funcionario">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary"> Localizar </button>
        </div>

    </form>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Código de funcionário</th>
      <th scope="col">Código de usuário</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Função</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $funcionario = isset($_POST["funcionario"]) ? $_POST["funcionario"]:"";
$dado = visuNomeFuncionario($conexao, $funcionario); 

foreach($dado as $dados) :
?>
    <tr>
      <th scope="row"><?=$dados["codfun"]?></th>
      <td><?=$dados["codusuFK"]?></td>
      <td><?=$dados["nomefun"]?></td>
      <td><?=$dados["fonefun"]?></td>
      <td><?=$dados["funcaofun"]?></td>
      
    </tr>
<?php
endforeach;
?>

  </tbody>
</table>
<?php
include_once("footer.php");
?>
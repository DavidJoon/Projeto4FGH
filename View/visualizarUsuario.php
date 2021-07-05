<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once("header.php");
include_once("../Model/bancoUsuario.php");
include_once("../Model/conexao.php");
//echo("<script> alert('Oi, tudo bem?.');</script>");
?>
<div class="container">
    <form action="" method="post" class="row g-3">

        <div class="col-12">
            <label class="form-label"> Digite o e-mail do Usuário </label>
            <input type="text" class="form-control" name="usuario">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary"> Localizar </button>
        </div>

    </form>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Código de usuário</th>
      <th scope="col">E-mail de login</th>
      <th scope="col">PIN</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $usuario = isset($_POST["usuario"]) ? $_POST["usuario"]:"";
$dado = visuNomeUsuario($conexao, $usuario); 

foreach($dado as $dados) :
?>
    <tr>
      <th scope="row"><?=$dados["codusu"]?></th>
      <td><?=$dados["loginusu"]?></td>
      <td><?=$dados["pinusu"]?></td>

    </tr>
<?php
endforeach;
?>

  </tbody>
</table>
<?php
include_once("footer.php");
?>
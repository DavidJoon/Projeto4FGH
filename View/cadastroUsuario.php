<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include("header.php");
?>

<div class="container">

    <form action="../Controller/inserirUsuario.php" method="post" class="row g-3">

        <div class="col-12">
            <label for="inputlogin" class="form-label">E-mail</label>
            <input type="e-mail" name="login" class="form-control" id="inputlogin" placeholder="Digite um e-mail válido">
        </div>

        <div class="col-6">
            <label for="inputsenha" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="inputsenha">
        </div>

        <div class="col-6">
            <label for="inputpin" class="form-label">PIN</label>
            <input type="number" min="00001" max="99999" name="pin" class="form-control" id="inputpin" placeholder="Número de 5 digitos">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>

<?php
include("footer.php");
?>
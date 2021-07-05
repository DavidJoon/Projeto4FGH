<?php
include_once("../View/header.php");
require_once("../Model/bancoFilme.php");
require_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(insereFilme($conexao, $filme, $genero, $sinopse, $ano, $capa, $url)){
    echo("<div class='alert alert-success' role='alert'>Filme cadastrado com sucesso.</div>");
}else{
    echo("<div class='alert alert-danger' role='alert'>O Filme não foi para o banco de dados.</div>");
}

include_once("../View/footer.php");
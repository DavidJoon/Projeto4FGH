<?php
include_once("../View/header.php");
require_once("../Model/bancoMega.php");
require_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(insereJogoMega($conexao, $jogo, $data, $genero, $desenvolvedora, $capa, $sinopse)){
    echo("<div class='alert alert-success' role='alert'>Jogo cadastrado com sucesso.</div>");
}else{
    echo("<div class='alert alert-danger' role='alert'>O jogo não foi para o banco de dados.</div>");
}

include_once("../View/footer.php");
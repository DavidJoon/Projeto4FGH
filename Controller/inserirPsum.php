<?php
include_once("../View/header.php");
require_once("../Model/bancoPsum.php");
require_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(insereJogoPsum($conexao, $jogo, $data, $genero, $desenvovedora, $capa, $outras, $sinopse)){
    echo("<div class='alert alert-success' role='alert'>Jogo cadastrado com sucesso.</div>");
}else{
    echo("<div class='alert alert-danger' role='alert'>O jogo não foi para o banco de dados.</div>");
}

include_once("../View/footer.php");
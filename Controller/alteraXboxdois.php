<?php
include_once('../View/header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoXboxdois.php');

extract($_REQUEST,EXTR_OVERWRITE);

if(alterJogoXboxdois($conexao, $codxboxdois, $jogo, $data, $genero, $desenvolvedora, $capa, $sinopse)){
echo("<p class='alert alert-success' role='alert'>O Jogo foi alterado com sucesso.</p>");
}else{
echo("<p class='alert alert-danger' role='alert'>O Jogo não foi alterado com sucesso.</p>");
}

include_once('../View/footer.php');

?>
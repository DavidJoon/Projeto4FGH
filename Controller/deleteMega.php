<?php
include_once("../View/header.php");
include_once("../Model/bancoMega.php");
include_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deleteJogoMega($conexao, $codmega)){
echo("<script> alert('O Jogo foi excluido.'); window.history.back(-1);</script>");
//header("Location: ../view/visualizarFilme.php");
}else{
echo("<p>O Jogo não foi excluido.</p>");
}

include_once("../View/footer.php");

?>
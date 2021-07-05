<?php
include_once("../View/header.php");
include_once("../Model/bancoFilme.php");
include_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deleteFilme($conexao, $codfil)){
echo("<script> alert('O filme foi excluido.'); window.history.back(-1);</script>");
//header("Location: ../view/visualizarFilme.php");
}else{
echo("<p>O filme não foi excluido.</p>");
}

include_once("../View/footer.php");

?>
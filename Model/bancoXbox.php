<?php

function insereJogoXbox($conexao, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse)
{
    $query = "insert into tbxbox(nomexbox,dataxbox,generoxbox,desenxbox,capaxbox,sinxbox) values ('{$jogo}', '{$data}', '{$genero}', '{$desenvovedora}', '{$capa}', '{$sinopse}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
};

function visuNomeXbox($conexao, $jogo){

    $query = "Select * from tbxbox where nomexbox like '%{$jogo}%'";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}
function visuCodigoXbox($conexao, $codigo){
    $query = "Select * from tbxbox where codxbox={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterJogoXbox($conexao, $codxbox, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse){
    $query = "update tbxbox set nomexbox='{$jogo}', dataxbox='{$data}', generoxbox ='{$genero}', desenxbox = '{$desenvovedora}', capaxbox = '{$capa}', sinxbox = '{$sinopse}' where codxbox='{$codxbox}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteJogoXbox($conexao, $codxbox){

    $query = "delete from tbxbox where codxbox='{$codxbox}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}
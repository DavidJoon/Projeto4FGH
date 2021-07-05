<?php

function insereJogoXboxseries($conexao, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse)
{
    $query = "insert into tbxboxseries(nomexboxseries,dataxboxseries,generoxboxseries,desenxboxseries,capaxboxseries,sinxxs) values ('{$jogo}', '{$data}', '{$genero}', '{$desenvovedora}', '{$capa}', '{$sinopse}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
};

function visuNomeXboxseries($conexao, $jogo){

    $query = "Select * from tbxboxseries where nomexboxseries like '%{$jogo}%'";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}
function visuCodigoXboxseries($conexao, $codigo){
    $query = "Select * from tbxboxseries where codxboxseries={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterJogoXboxseries($conexao, $codxboxseries, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse){
    $query = "update tbxboxseries set nomexboxseries='{$jogo}', dataxboxseries='{$data}', generoxboxseries ='{$genero}', desenxboxseries = '{$desenvovedora}', capaxboxseries = '{$capa}', sinxxs = '{$sinopse}' where codxboxseries='{$codxboxseries}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteJogoXboxseries($conexao, $codxboxseries){

    $query = "delete from tbxboxseries where codxboxseries='{$codxboxseries}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}
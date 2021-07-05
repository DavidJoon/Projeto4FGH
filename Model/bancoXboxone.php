<?php

function insereJogoXboxone($conexao, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse)
{
    $query = "insert into tbxboxone(nomexboxone,dataxboxone,generoxboxone,desenxboxone,capaxboxone,sinxone) values ('{$jogo}', '{$data}', '{$genero}', '{$desenvovedora}', '{$capa}', '{$sinopse}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
};

function visuNomeXboxone($conexao, $jogo){

    $query = "Select * from tbxboxone where nomexboxone like '%{$jogo}%'";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}
function visuCodigoXboxone($conexao, $codigo){
    $query = "Select * from tbxboxone where codxboxone={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterJogoXboxone($conexao, $codxboxone, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse){
    $query = "update tbxboxone set nomexboxone='{$jogo}', dataxboxone='{$data}', generoxboxone ='{$genero}', desenxboxone = '{$desenvovedora}', capaxboxone = '{$capa}', sinxone = '{$sinopse}' where codxboxone='{$codxboxone}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteJogoXboxone($conexao, $codxboxone){

    $query = "delete from tbxboxone where codxboxone='{$codxboxone}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}
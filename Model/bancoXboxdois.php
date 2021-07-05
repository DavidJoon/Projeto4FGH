<?php

function insereJogoXboxdois($conexao, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse)
{
    $query = "insert into tbxboxdois(nomexboxdois,dataxboxdois,generoxboxdois,desenxboxdois,capaxboxdois,sinxboxdois) values ('{$jogo}', '{$data}', '{$genero}', '{$desenvovedora}', '{$capa}', '{$sinopse}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
};

function visuNomeXboxdois($conexao, $jogo){

    $query = "Select * from tbxboxdois where nomexboxdois like '%{$jogo}%'";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}
function visuCodigoXboxdois($conexao, $codigo){
    $query = "Select * from tbxboxdois where codxboxdois={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterJogoXboxdois($conexao, $codxboxdois, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse){
    $query = "update tbxboxdois set nomexboxdois='{$jogo}', dataxboxdois='{$data}', generoxboxdois ='{$genero}', desenxboxdois = '{$desenvovedora}', capaxboxdois = '{$capa}', sinxboxdois = '{$sinopse}' where codxboxdois='{$codxboxdois}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteJogoXboxdois($conexao, $codxboxdois){

    $query = "delete from tbxboxdois where codxboxdois='{$codxboxdois}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}
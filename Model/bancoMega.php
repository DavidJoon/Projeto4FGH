<?php

function insereJogoMega($conexao, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse)
{
    $query = "insert into tbmega(nomemega,datamega,generomega,desenmega,capamega,sinmega) values ('{$jogo}', '{$data}', '{$genero}', '{$desenvovedora}', '{$capa}', '{$sinopse}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
};

function visuNomeMega($conexao, $jogo){

    $query = "Select * from tbmega where nomemega like '%{$jogo}%'";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}
function visuCodigoMega($conexao, $codigo){
    $query = "Select * from tbmega where codmega={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterJogoMega($conexao, $codmega, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse){
    $query = "update tbmega set nomemega='{$jogo}', datamega='{$data}', generomega ='{$genero}', desenmega = '{$desenvovedora}', capamega = '{$capa}', sinmega = '{$sinopse}' where codmega='{$codmega}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteJogoMega($conexao, $codmega){

    $query = "delete from tbmega where codmega='{$codmega}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}
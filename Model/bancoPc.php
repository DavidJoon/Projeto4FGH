<?php

function insereJogoPc($conexao, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse)
{
    $query = "insert into tbpc(nomepc,datapc,generopc,desenpc,capapc,sinpc) values ('{$jogo}', '{$data}', '{$genero}', '{$desenvovedora}', '{$capa}', '{$sinopse}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
};

function visuNomePc($conexao, $jogo){

    $query = "Select * from tbpc where nomepc like '%{$jogo}%'";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}
function visuCodigoPc($conexao, $codigo){
    $query = "Select * from tbpc where codpc={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterJogoPc($conexao, $codpc, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse){
    $query = "update tbpc set nomepc='{$jogo}', datapc='{$data}', generopc ='{$genero}', desenpc = '{$desenvovedora}', capapc = '{$capa}', sinpc = '{$sinopse}' where codpc='{$codpc}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteJogoPc($conexao, $codpc){

    $query = "delete from tbpc where codpc='{$codpc}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}
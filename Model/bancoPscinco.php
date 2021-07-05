<?php

function insereJogoPscinco($conexao, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse)
{
    $query = "insert into tbpscinco(nomepscinco,datapscinco,generopscinco,desenpscinco,capapscinco,sinpscinco) values ('{$jogo}', '{$data}', '{$genero}', '{$desenvovedora}', '{$capa}', '{$sinopse}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
};

function visuNomePscinco($conexao, $jogo){

    $query = "Select * from tbpscinco where nomepscinco like '%{$jogo}%'";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}
function visuCodigoPscinco($conexao, $codigo){
    $query = "Select * from tbpscinco where codpscinco={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterJogoPscinco($conexao, $codpscinco, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse){
    $query = "update tbpscinco set nomepscinco='{$jogo}', datapscinco='{$data}', generopscinco ='{$genero}', desenpscinco = '{$desenvovedora}', capapscinco = '{$capa}', sinpscinco = '{$sinopse}' where codpscinco='{$codpscinco}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteJogoPscinco($conexao, $codpscinco){

    $query = "delete from tbpscinco where codpscinco='{$codpscinco}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}
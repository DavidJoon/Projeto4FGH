<?php

function insereJogoPsquatro($conexao, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse)
{
    $query = "insert into tbpsquatro(nomepsquatro,datapsquatro,generopsquatro,desenpsquatro,capapsquatro,sinpsquatro) values ('{$jogo}', '{$data}', '{$genero}', '{$desenvovedora}', '{$capa}', '{$sinopse}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
};

function visuNomePsquatro($conexao, $jogo){

    $query = "Select * from tbpsquatro where nomepsquatro like '%{$jogo}%'";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}
function visuCodigoPsquatro($conexao, $codigo){
    $query = "Select * from tbpsquatro where codpsquatro={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterJogoPsquatro($conexao, $codpsquatro, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse){
    $query = "update tbpsquatro set nomepsquatro='{$jogo}', datapsquatro='{$data}', generopsquatro ='{$genero}', desenpsquatro = '{$desenvovedora}', capapsquatro = '{$capa}', sinpsquatro = '{$sinopse}' where codpsquatro='{$codpsquatro}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteJogoPsquatro($conexao, $codpsquatro){

    $query = "delete from tbpsquatro where codpsquatro='{$codpsquatro}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}
<?php

function insereJogoPsdois($conexao, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse)
{
    $query = "insert into tbpsdois(nomepsdois,datapsdois,generopsdois,desenpsdois,capapsdois,sinpsdois) values ('{$jogo}', '{$data}', '{$genero}', '{$desenvovedora}', '{$capa}', '{$sinopse}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
};

function visuNomePsdois($conexao, $jogo){

    $query = "Select * from tbpsdois where nomepsdois like '%{$jogo}%'";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}
function visuCodigoPsdois($conexao, $codigo){
    $query = "Select * from tbpsdois where codpsdois={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterJogoPsdois($conexao, $codpsdois, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse){
    $query = "update tbpsdois set nomepsdois='{$jogo}', datapsdois='{$data}', generopsdois ='{$genero}', desenpsdois = '{$desenvovedora}', capapsdois = '{$capa}', sinpsdois = '{$sinopse}' where codpsdois='{$codpsdois}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteJogoPsdois($conexao, $codpsdois){

    $query = "delete from tbpsdois where codpsdois='{$codpsdois}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}
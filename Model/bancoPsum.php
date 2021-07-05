<?php

function insereJogoPsum($conexao, $jogo, $data, $genero, $desenvovedora, $capa, $outras, $sinopse)
{
    $query = "insert into tbpsum(nomepsum,datapsum,generopsum,desenpsum,capapsum,outrasplum,sinpsum) values ('{$jogo}', '{$data}', '{$genero}', '{$desenvovedora}', '{$capa}', '{$outras}', '{$sinopse}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
};

function visuNomePsum($conexao, $jogo){

    $query = "Select * from tbpsum where nomepsum like '%{$jogo}%'";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}
function visuCodigoPsum($conexao, $codigo){
    $query = "Select * from tbpsum where codpsum={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterJogoPsum($conexao, $codpsum, $jogo, $data, $genero, $desenvovedora, $capa, $outras, $sinopse){
    $query = "update tbpsum set nomepsum='{$jogo}', datapsum='{$data}', generopsum ='{$genero}', desenpsum = '{$desenvovedora}', capapsum = '{$capa}', outrasplum = '{$outras}', sinpsum = '{$sinopse}' where codpsum='{$codpsum}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteJogoPsum($conexao, $codpsum){

    $query = "delete from tbpsum where codpsum='{$codpsum}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}
<?php

function insereJogoPstres($conexao, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse)
{
    $query = "insert into tbpstres(nomepstres,datapstres,generopstres,desenpstres,capapstres,sinpstres) values ('{$jogo}', '{$data}', '{$genero}', '{$desenvovedora}', '{$capa}', '{$sinopse}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
};

function visuNomePstres($conexao, $jogo){

    $query = "Select * from tbpstres where nomepstres like '%{$jogo}%'";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}
function visuCodigoPstres($conexao, $codigo){
    $query = "Select * from tbpstres where codpstres={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterJogoPstres($conexao, $codpstres, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse){
    $query = "update tbpstres set nomepstres='{$jogo}', datapstres='{$data}', generopstres ='{$genero}', desenpstres = '{$desenvovedora}', capapstres = '{$capa}', sinpstres = '{$sinopse}' where codpstres='{$codpstres}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteJogoPstres($conexao, $codpstres){

    $query = "delete from tbpstres where codpstres='{$codpstres}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}
<?php

function insereJogoAtari($conexao, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse)
{
    $query = "insert into tbatari(nomeatari,dataatari,generoatari,desenatari,capaatari,sinatari) values ('{$jogo}', '{$data}', '{$genero}', '{$desenvovedora}', '{$capa}', '{$sinopse}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
};

function visuNomeAtari($conexao, $jogo){

    $query = "Select * from tbatari where nomeatari like '%{$jogo}%'";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}
function visuCodigoAtari($conexao, $codigo){
    $query = "Select * from tbatari where codatari={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterJogoAtari($conexao, $codatari, $jogo, $data, $genero, $desenvovedora, $capa, $sinopse){
    $query = "update tbatari set nomeatari='{$jogo}', dataatari='{$data}', generoatari ='{$genero}', desenatari = '{$desenvovedora}', capaatari = '{$capa}', sinatari = '{$sinopse}' where codatari='{$codatari}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteJogoAtari($conexao, $codatari){

    $query = "delete from tbatari where codatari='{$codatari}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}
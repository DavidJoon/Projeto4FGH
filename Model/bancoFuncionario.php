<?php

function insereFun($conexao, $codusuFK, $nomefun, $fonefun, $funcaofun)
{
    $query = "insert into tbfuncionario(codusuFK,nomefun,fonefun,funcaofun) values ('{$codusuFK}', '{$nomefun}', '{$fonefun}', '{$funcaofun}')";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
};

function limpaCadastroFun(){
    session_destroy();
}

function visuNomeFuncionario($conexao, $funcionario){

    $query = "Select * from tbfuncionario where nomefun like '%{$funcionario}%'";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}
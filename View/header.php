<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="text/css" href="img/logo.jpeg">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <title>Área do Funcionário</title>
</head>

<body background="img/orion.jpg">

<header class="areaf">
<nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a href="areaFuncionario.php"><img class="logotipof" alt="Logo" title="Logo" src="img/logo.jpeg" width="50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">PS1</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="../View/cadastroPsum.php">Cadastrar</a></li>
                  <li><a class="dropdown-item" href="../View/visualizarPsum.php">Buscar</a></li>
                  </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">PS2</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="../View/cadastroPsdois.php">Cadastrar</a></li>
                  <li><a class="dropdown-item" href="../View/visualizarPsdois.php">Buscar</a></li>
                  </ul>
              </li>

              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">PS3</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="../View/cadastroPstres.php">Cadastrar</a></li>
                <li><a class="dropdown-item" href="../View/visualizarPstres.php">Buscar</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">PS4</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="../View/cadastroPsquatro.php">Cadastrar</a></li>
                <li><a class="dropdown-item" href="../View/visualizarPsquatro.php">Buscar</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">PS5</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="../View/cadastroPscinco.php">Cadastrar</a></li>
                  <li><a class="dropdown-item" href="../View/visualizarPscinco.php">Buscar</a></li>
                  </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Xbox</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="../View/cadastroXbox.php">Cadastrar</a></li>
                  <li><a class="dropdown-item" href="../View/visualizarXbox.php">Buscar</a></li>
                  </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Xbox 360</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="../View/cadastroXboxdois.php">Cadastrar</a></li>
                  <li><a class="dropdown-item" href="../View/visualizarXboxdois.php">Buscar</a></li>
                  </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Xbox One</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="../View/cadastroXboxone.php">Cadastrar</a></li>
                  <li><a class="dropdown-item" href="../View/visualizarXboxone.php">Buscar</a></li>
                  </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Xbox X/S</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="../View/cadastroXboxseries.php">Cadastrar</a></li>
                  <li><a class="dropdown-item" href="../View/visualizarXboxseries.php">Buscar</a></li>
                  </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">PC</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="../View/cadastroPc.php">Cadastrar</a></li>
                  <li><a class="dropdown-item" href="../View/visualizarPc.php">Buscar</a></li>
                  </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Atari</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="../View/cadastroAtari.php">Cadastrar</a></li>
                  <li><a class="dropdown-item" href="../View/visualizarAtari.php">Buscar</a></li>
                  </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mega Drive</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="../View/cadastroMega.php">Cadastrar</a></li>
                  <li><a class="dropdown-item" href="../View/visualizarMega.php">Buscar</a></li>
                  </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Funcionário</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="../View/cadastroUsuario.php">Cadastrar</a></li>
                  </ul>
              </li>

              <li class="nav-item dropdown mx-2">
                <a class="nav-link" href="../Controller/logout.php">Sair</a>
              </li>

            </ul>
          </div>

        </div>

      </nav>
</header>
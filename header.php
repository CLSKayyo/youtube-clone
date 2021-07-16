<?php
// Autor: Caio Lucas

$_dir = '//'.$_SERVER['HTTP_HOST'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= (isset($title))? $title : 'Youtube' ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=$_dir?>/style.css">
</head>
<body>
    <nav>
        <div class="links">
            <a class="hamburger-btn" href="#" onclick="toogle_aside()"><i class="bi bi-list"></i></a>
            <a class="brand" href="<?=$_dir?>"><i class="bi bi-youtube"></i> YouTube<sup>Clone</sup></a>
        </div>
        <form action="<?=$_dir?>/results">
            <input type="text" name="search_query" id="search_query" placeholder="Pesquisar"><button type="submit"><i class="bi bi-search"></i></button>
        </form>
        <a class="mobile-search" href="#" onclick="toggle_search_bar()"><i class="bi bi-search"></i></a>
        <img class="user-icon" src="<?=$_dir?>/img/user.png" alt="user" width="32px" height="32px">
    </nav>
    <form class="mobile" action="<?=$_dir?>/results">
        <input type="text" name="search_query" id="search_query" placeholder="Pesquisar"><button type="submit"><i class="bi bi-search"></i></button>
    </form>

    <aside class="desktop">
        <ul class="list-geral">
            <li><a href="<?=$_dir?>"><i class="bi bi-house-door-fill"></i> Início</a></li>
            <li><a href="#"><i class="bi bi-shift-fill"></i> Em alta</a></li>
            <li><a href="#"><i class="bi bi-collection-play-fill"></i> Inscrições</a></li>
        </ul>
        <ul class="list-conta">
            <li><a href="#"><i class="bi bi-play-btn-fill"></i> Biblioteca</a></li>
            <li><a href="#"><i class="bi bi-clock-history"></i> Histórico</a></li>
            <li><a href="#"><i class="bi bi-play-circle"></i> Seus vídeos</a></li>
            <li><a href="#"><i class="bi bi-clock-fill"></i> Assistir mais tarde</a></li>
        </ul>
        <h3>Mais do Youtube</h3>
        <ul class="list-mais">
            <li><a href="#"><i class="bi bi-youtube"></i> Youtube Premium</a></li>
            <li><a href="#"><i class="bi bi-film"></i> Filmes</a></li>
            <li><a href="#"><i class="bi bi-controller"></i> Jogos</a></li>
            <li><a href="#"><i class="bi bi-record-btn"></i> Ao vivo</a></li>
            <li><a href="#"><i class="bi bi-lightbulb-fill"></i> Aprender</a></li>
        </ul>
        <ul class="list-config">
            <li><a href="#"><i class="bi bi-gear-fill"></i> Configurações</a></li>
            <li><a href="#"><i class="bi bi-flag-fill"></i> Histórico de denúncias</a></li>
            <li><a href="#"><i class="bi bi-question-circle-fill"></i> Ajuda</a></li>
            <li><a href="#"><i class="bi bi-exclamation-square-fill"></i> Enviar feedback</a></li>
        </ul>
        <p>
            Este Website é um projeto pessoal criado por <a href="//caiolucas.com.br"><b>Caio Lucas</b></a> para fins de estudo,
            não tendo nenhum objetivo financeiro em cima do mesmo. O conteúdo deste Website
            é de total autoria do <a href="//youtube.com"><b>Youtube</b></a>.
        </p>
    </aside>

    <aside class="resumo">
        <ul>
            <li><a href="<?=$_dir?>"><i class="bi bi-house-door-fill"></i> Início</a></li>
            <li><a href="#"><i class="bi bi-shift-fill"></i> Em alta</a></li>
            <li><a href="#"><i class="bi bi-collection-play-fill"></i> Inscrições</a></li>
            <li><a href="#"><i class="bi bi-play-btn-fill"></i> Biblioteca</a></li>
        </ul>
    </aside>

    <aside class="mobile">
        <div class="links">
            <a class="hamburger-btn" href="#" onclick="toogle_aside()"><i class="bi bi-list"></i></a>
            <a class="brand" href="<?=$_dir?>"><i class="bi bi-youtube"></i> YouTube<sup>Clone</sup></a>
        </div>
        <ul class="list-geral">
            <li><a href="<?=$_dir?>"><i class="bi bi-house-door-fill"></i> Início</a></li>
            <li><a href="#"><i class="bi bi-shift-fill"></i> Em alta</a></li>
            <li><a href="#"><i class="bi bi-collection-play-fill"></i> Inscrições</a></li>
        </ul>
        <ul class="list-conta">
            <li><a href="#"><i class="bi bi-play-btn-fill"></i> Biblioteca</a></li>
            <li><a href="#"><i class="bi bi-clock-history"></i> Histórico</a></li>
            <li><a href="#"><i class="bi bi-play-circle"></i> Seus vídeos</a></li>
            <li><a href="#"><i class="bi bi-clock-fill"></i> Assistir mais tarde</a></li>
        </ul>
        <h3>Mais do Youtube</h3>
        <ul class="list-mais">
            <li><a href="#"><i class="bi bi-youtube"></i> Youtube Premium</a></li>
            <li><a href="#"><i class="bi bi-film"></i> Filmes</a></li>
            <li><a href="#"><i class="bi bi-controller"></i> Jogos</a></li>
            <li><a href="#"><i class="bi bi-record-btn"></i> Ao vivo</a></li>
            <li><a href="#"><i class="bi bi-lightbulb-fill"></i> Aprender</a></li>
        </ul>
        <ul class="list-config">
            <li><a href="#"><i class="bi bi-gear-fill"></i> Configurações</a></li>
            <li><a href="#"><i class="bi bi-flag-fill"></i> Histórico de denúncias</a></li>
            <li><a href="#"><i class="bi bi-question-circle-fill"></i> Ajuda</a></li>
            <li><a href="#"><i class="bi bi-exclamation-square-fill"></i> Enviar feedback</a></li>
        </ul>
        <p>
            Este Website é um projeto pessoal criado por <a href="//caiolucas.com.br"><b>Caio Lucas</b></a> para fins de estudo,
            não tendo nenhum objetivo financeiro em cima do mesmo. O conteúdo deste Website
            é de total autoria do <a href="//youtube.com"><b>Youtube</b></a>.
        </p>
    </aside>
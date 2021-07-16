<?php

if(!isset($_GET['v'])){
    header('Location: ../');
    exit;
}

include '../app/youtube-api.php';
$api = new Youtube();

$video = $api->get_video($_GET['v']);

$video_list = $api->get_related_videos($video['id']);

$is_on_watch = true;
$title = $video['nome'].' - Youtube';
require '../header.php';
?>
<link rel="stylesheet" href="watch.css">
<main>
    <div class="video">
        <iframe class="youtube-video"
        src="https://www.youtube.com/embed/<?=$video['id']?>?autoplay=0">
        </iframe>
        <div class="content">
            <h1><?=$video['nome']?></h1>
            <div class="estatisticas">
                <small><?=number_format($video['estatisticas']['views'], 0, ',', '.')?> visualizações • <?=strftime('%d de %b. de %Y', strtotime($video['data']))?></small>
                <div class="likes">
                    <a href="#"><i class="bi bi-hand-thumbs-up-fill"></i><?=number_format($video['estatisticas']['likes'], 0, ',', '.')?></a>
                    <a href="#"><i class="bi bi-hand-thumbs-down-fill"></i><?=number_format($video['estatisticas']['dislikes'], 0, ',', '.')?></a>
                </div>
                <a href="#" class="share"><i class="bi bi-share-fill"></i> Compartilhar</a>
                <a href="#" class="save"><i class="bi bi-plus-square-fill"></i> Salvar</a>
            </div>
        </div>
        <div class="info">
            <a href="<?=$_dir.'/channel/'.$video['user']['id']?>" class="user">
                <img src="<?=$video['user']['img']?>" alt="<?=$video['user']['nome']?>" width="48px" height="48px">
                <div class="user-data">
                    <h3 class="nome"><?=$video['user']['nome']?></h3>
                    <small><?=number_format($video['user']['inscritos'], 0, ',', '.')?> inscritos</small>
                </div>
            </a>
            <button>Inscrever-se</button>
        </div>
        <div class="descricao">
            <p><?=preg_replace("/\r\n|\r|\n/", '<br/>', $video['descricao'])?></p>
            <div class="mostrar-mais">
                <a href="javascript:void(0)" onclick="toggle_description()">mostrar mais</a>
            </div>
        </div>
    </div>
    <div class="relacionados">
        <?php foreach ($video_list as $item) { ?>
            <a href="<?=$_dir?>/watch?v=<?=$item['id']?>" class="listed-video">
                <img src="<?=$item['thumbnail']?>" alt="<?=$item['nome']?>" class="thumb">
                <div class="video-list-info">
                    <h4><?=$item['nome']?></h4>
                    <span><?=$item['user']['nome']?></span>
                    <small><?=number_format($item['estatisticas']['views'], 0, ',', '.')?> visualizações • <br><?=strftime('%d de %b. de %Y', strtotime($item['data']))?></small>
                </div>
            </a>
        <? }?>
    </div>
</main>
    
<?php require '../footer.php'; ?>
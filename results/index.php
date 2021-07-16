<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_GET['search_query'])){
    header('Location: ../');
    exit;
}

include '../app/youtube-api.php';
$api = new Youtube();

$video_list = $api->search_videos($_GET['search_query']);

$title = $_GET['search_query'].' - Youtube';
require '../header.php';
?>

<link rel="stylesheet" href="results.css">
<main>
    <div class="video-results">
        <?php foreach ($video_list as $item) { ?>
            <a href="<?=$_dir?>/watch?v=<?=$item['id']?>" class="listed-video">
                <img src="<?=$item['thumbnail']?>" alt="<?=$item['nome']?>" class="thumb">
                <div class="video-list-info">
                    <h2><?=$item['nome']?></h2>
                    <small><?=number_format($item['estatisticas']['views'], 0, ',', '.')?> visualizações • <?=strftime('%d de %b. de %Y', strtotime($item['data']))?></small>
                    <div class="user-data">
                        <img src="<?=$item['user']['img']?>" alt="<?=$item['user']['nome']?>" width="32px" height="32px">
                        <span><?=$item['user']['nome']?></span>
                    </div>
                    <p><?=substr($item['descricao'], 0, 120)?>...</p>
                </div>
            </a>
        <?php }?>
    </div>
</main>

<?php require '../footer.php'; ?>
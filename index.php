<?php

include 'app/youtube-api.php';
$api = new Youtube();

$video_list = $api->get_list_videos();

require 'header.php';
?>

<main>
    <section class="inicio">
        <?php foreach ($video_list as $video) { ?>
            <a href="<?=$dir?>/watch?v=<?=$video['id']?>" class="video-thumb">
                <img class="thumb" src="<?=$video['thumbnail']?>" alt="thumb">
                <div class="content">
                    <img class="user" src="<?=$video['user']['img']?>" alt="user">
                    <div class="data">
                        <h4><?=$video['nome']?></h4>
                        <span><?=$video['user']['nome']?> <i class="bi bi-check-circle-fill"></i></span>
                        <small>20 mil visualizações •<br>há 1 hora</small>
                    </div>
                </div>
            </a>
        <?php }?>
    </section>
</main>

<?php require 'footer.php'; ?>
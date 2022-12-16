<main class="container"> 
<?php
    include __DIR__ . '/../db/data.php';

    foreach ($arr_album as $album) {
?>      <div class="card">
            <img src="<?= $album['poster'] ?>" alt="poster">
            <h2><?=$album['title']?></h2>
            <div><?=$album['author']?></div>
        </div>
    <?
    }
?>
</main>
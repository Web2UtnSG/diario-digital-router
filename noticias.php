<?php
require_once 'db_fake.php';

function showHome()
{
    $noticias = getNoticias();
    require 'layouts/header.php';

    ?>
     <div class="noticias">
    <?php foreach ($noticias as $index => $noticia) 
    { ?>
        <div class="card">
            <img src="<?= $noticia->img ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $noticia->titulo ?></h5>
                <p class="card-text"><?= $noticia->contenido ?></p>
                <a href="noticia/<?= $index ?>" class="btn btn-primary">Leer más</a>
            </div>
        </div>
       
    <?php
    }
    ?>
 </div>
 <?php
    require 'layouts/footer.html';
}

function showNoticia($id)
{  
    $noticia = getNoticiaById($id);
    require 'layouts/header.php';
    ?>
    <h1><?= $noticia->titulo ?></h1>
    <p><?= $noticia->contenido ?></p>
    <img src="<?= $noticia->img ?>" alt="">
    <?php
    require 'layouts/footer.html';

}
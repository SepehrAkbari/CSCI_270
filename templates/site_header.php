<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Homepage for csci270 course at LFC">
        <meta name="keywords" content="CSCI 270, LFC, DMD Program">
        <meta name="author" content="Sepehr Akbari">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
        <link rel="stylesheet" href="static/styles.css">

        <title><?= $page_title ?></title>
        <link rel="icon" type="image/x-icon" href="images/SA_favicon.png">

        <? if ( is_array($extra_stylesheets) ) { ?>
            <? foreach ($extra_stylesheets as $stylesheet) { ?>
            <link rel="stylesheet" type="text/css" href="<?=$stylesheet?>" >
            <? } ?>
        <? } ?>
    </head>
    <body>
        <div id="page_wrapper">
            <a id="top"></a>
            <div id="header">
                <div class="hero-bg">
                    <div class="hero">
                        <div class="col75">
                            <h1>CSCI 270 DMD Project:<br>Web Development</h1>
                        </div>
                        <div class="col25">
                            <img src="images/SA_favicon.png" class="logo" alt="logo" width="70">
                        </div>
                        <div class="clear_float"></div>
                    </div>
                </div>
                <hr>
                <div class="col100">
                    <ul id="nav">
                        <li class=<?= $li_1 ?>><a href="index.php">Home</a></li>
                        <li class=<?= $li_2 ?>><a href="lists.php" target="_blank">Lists</a></li>
                        <li class=<?= $li_3 ?>><a href="blocks.php" target="_blank">Blocks</a></li>
                        <li class=<?= $li_4 ?>><a href="images.php" target="_blank">Images</a></li>
                        <li class=<?= $li_5 ?>><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Surprise</a></li>
                    </ul>
                </div>
                <div class="clear_float"></div>
                <hr>
            </div>
            <div id="main">

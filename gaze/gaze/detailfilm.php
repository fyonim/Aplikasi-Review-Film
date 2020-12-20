<?php
require 'function.php';
$id = $_GET["id"];
$action = query("SELECT * FROM action WHERE id='$id'");
$fantasi = query("SELECT * FROM fantasi WHERE id='$id'");
$horor = query("SELECT * FROM horor WHERE id='$id'");
$romance = query("SELECT * FROM romance WHERE id='$id'");
$scifi = query("SELECT * FROM scifi WHERE id='$id'");



?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style-nav.css">
        <link rel="stylesheet" type="text/css" href="css/stylefilm.css">
        <title>Gaze</title>
    </head>
    <body>
        <nav>
            <div class="logo">
                <h4>GAZE</h4>
                <p>Take your time with some of the best films here</p>
            </div>
        <ul class="list-nav">
            <li><a href= "index.php">Home</a></li>
            <li><a href= "genre.php">Genre</a></li>
            <li><a href= "about.php">About</a></li>
            <li><a href="tambah.php">Add Film</a></li>
        </ul>
        <div class="menu-toggle" >
            <span></span>
            <span></span>
            <span></span>
        </div>
        </nav>
        <?php foreach( $action as $row ) : ?>
        <div class="container">
           
            <div class="gambar">
            <h1><?= $row["judul"]?></h1>
            <img src="image/<?= $row["poster"]; ?>">
            </div>
            <div class="keterangan">
                <p><?= $row["deskripsi"] ?></p>
                <a href="action 1.html">Galery</a>
            </div>
        <?php endforeach ; ?>
        </div>
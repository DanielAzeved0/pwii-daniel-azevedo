<!--helpers e posts-->
<?php
include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");
include_once("index.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Blog do Daniel Azevedo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Google fontes-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <!--CSS aplication-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
</head>
<body>
    <head> 
        <a href="<?= $BASE_URL ?> "id="logo"> 
        <img src="<?= $BASE_URL?>/img/logo.svg" alt="Blog do Daniel">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="index.php"class="nav-link">Home</a></li>
                <li><a href="#"class="nav-link">Categories</a></li>
                <li><a href="#"class="nav-link">Sobre</a></li>
                <li><a href="contact.php"class="nav-link">Contato</a></li>
</nav>        

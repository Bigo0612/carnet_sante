<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>

    <link rel="stylesheet" href="assets/front/css/style.css">
    <link rel="stylesheet" href="assets/front/css/flexslider.css">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>ADN</title>

    <script src="https://kit.fontawesome.com/0184472428.js" crossorigin="anonymous"></script>
</head>

<body>
<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<h1>le titre ADN</h1>

<div class="wrap">
    <header class="header-acceuil">
        <div class="boxlogo">
            <a href="#"><img src="assets/front/img/logo_ADN.png" alt="logo_ADN"></a>
        </div>
        <div class="menu-burger" id="boutonburger">
            <i class="fas fa-bars"></i>
        </div>

        <?php
        if (!empty($_SESSION)) { ?>
            <nav class="dashboard-nav-acceuil">
                <ul class="dashboard-nav navbar">
                    <li><a class="" href="index.php">acceuil</a></li>
                    <li><a href="#">vaccination</a></li>
                    <li><a href="#">gestion profil</a></li>
                </ul>
            </nav>
            <div class="dashboard-deconnection">
                <a href="deconnection.php">déconnection</a>
            </div>

        <?php } else { ?>
            <nav class="nav-acceuil" id="navburger">
                <ul class="nav navbar">
                    <li><a href="index.php">acceuil</a></li>
                    <li><a href="#">presentation</a></li>
                    <li><a href="#qsn">qui sommes nous</a></li>
                    <li><a href="#vaccination">vaccination</a></li>
                    <li><a href="#partenaire">nos partenaires</a></li>
                </ul>
            </nav>
            <div class="boxregistered">
                <div class="connexion login">
                    <a href="connexion.php">Connexion</a>
                </div>
                <div class="connexion inscription">
                    <a href="inscription.php">Inscription</a>
                </div>
            </div>
        <?php } ?>


    </header>

    <div class="clear"></div>

    <div class="wrap">

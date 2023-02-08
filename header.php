<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eXim Bordeaux</title>
  <!-- Bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Load CSS -->
  <link rel="stylesheet" href="/src/css/style.css">
  <link rel="reset.css" href="/src/css/reset.css">
  <link rel="stylesheet" href="https://use.typekit.net/ujw8boj.css">
  <link rel="stylesheet" href="/assert/Fraunces-VariableFont_SOFT,WONK,opsz,wght.ttf">
  <link rel="stylesheet" href="/assert/Montserrat-Italic-VariableFont_wght.ttf">
  <link rel="stylesheet" href="https://use.typekit.net/ujw8boj.css">

</head>

<?php
//load config
require_once 'config.php';

//load php scripts
?>
<div class="bloc-nav">
<nav class="navbar navbar-expand-lg ">


  <div class="container-fluid">
    <img src="/images/eXim-logo.svg" alt="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Accueil</a>
        </li>
        <li class="nav-item">
        <?php if (!check_access(1) || !check_access(2)) { ?>
        <a class="nav-link disabled" href="/views/backend/dashboard.php" style="display: none;">Dashboard</a> 
        <?php
        }
        else { ?> <a class="nav-link" href="/views/backend/dashboard.php">Dashboard</a> <?php }?>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/articles.php">Articles</a>
        </li>
      </ul>
    </div>
    <!--right align-->
    <div class="d-flex">
      <?php if (isset($_SESSION['pseudoMemb'])){
        ?>
        <a class="btn btn-primary m-1 connexion" href="/views/backend/login.php" role="button">Mon compte</a> <?php } 
        else {?>
        <a class="btn btn-primary m-1 connexion" href="/views/backend/login.php" role="button">Se connecter</a><?php }?>
    </div>
  </div>
</div>
</nav>
<div class="bordure-nav"></div>


</body>
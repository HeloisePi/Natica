<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Art</title>
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Load CSS -->
    <link rel="stylesheet" href="/src/css/style.css">
    <link rel="reset.css" href="/src/css/reset.css">
</head>

<?php
//load config
require_once 'config.php';

//load php scripts
?>
<body>

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
          <a class="nav-link" href="/views/backend/dashboard.php">Articles</a>
        </li>
      </ul>
    </div>
    <!--right align-->
    <div class="d-flex">
      <a class="btn btn-primary m-1 blabla" href="/views/backend/login.php" role="button">Se connecter</a>
    </div>
  </div>
</nav>

<div class="haut">
  <div class="title" >
    <h1>EXIM BORDEAUX</h1>
  </div>
  <div class="purple-line"></div>
  <div class="under-title" >
    <h2>Expériences Immersives</h2>
  </div>
  
  <div class="scroll-down">
    <img src="/images/scroll-down.svg" alt="scroll down">
  </div>
</div>

</body>

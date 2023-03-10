<?php
//load config
require_once 'config.php';

//load php scripts
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eXim Bordeaux</title>
  <!-- Bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!-- Load CSS -->
  <link rel="reset.css" href="/src/css/reset.css">
  <link rel="stylesheet" href=<?php echo ROOT_URL . "/src/css/style.css"?>>
  <link rel="stylesheet" href="https://use.typekit.net/ujw8boj.css">
  <link rel="stylesheet" href="/assert/Fraunces-VariableFont_SOFT,WONK,opsz,wght.ttf">
  <link rel="stylesheet" href="/assert/Montserrat-Italic-VariableFont_wght.ttf">
  <link rel="stylesheet" href="https://use.typekit.net/ujw8boj.css">

</head>


<div class="bloc-nav">
<nav class="navbar navbar-expand-lg ">


  <div class="container-fluid">
    <img src="<?php echo ROOT_URL . "/images/eXim-logo.svg"?>" alt="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse navbar-nav" id="navbarNav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/index.php">Accueil</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="/articles.php">Articles</a>
          </li>

          <?php if (!check_access(1)) { ?>
          
          <?php
          }
          else { ?> 
          <li class="nav-item">
            <a class="nav-link" href="/views/backend/articles/create.php">??crire un article</a> <?php }?>
          </li>
          <?php if (!check_access(2)) { ?>
            
            <?php
          }
          else { ?> 
          <li class="nav-item">
            <a class="nav-link" href="/views/backend/dashboard.php">Dashboard</a> <?php }?>
          </li>
    </div>


    <!--right align-->
    <div class="d-flex">
      <?php if (isset($_SESSION['pseudoMemb'])){
        ?>
        <a class="btn-primary m-1 connexion" href="/api/disconnected.php" role="button">Se d??connecter</a><?php }
        else {?>
        <a class="btn-primary m-1 connexion" href="/views/backend/login.php" role="button">Se connecter</a><?php }?>
    </div>
  </div>
</div>
</nav>
<div class="bordure-nav"></div>


</body>


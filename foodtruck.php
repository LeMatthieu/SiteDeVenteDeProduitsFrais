<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manger local</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<header>
<?php
require_once('header.php');
require_once('modaleconnexion.php');
?>
</header>
<main>

<div class="container-fluid bgimage ">
    <div class="d-flex justify-content-center">
    <h2 class="bg-warning text-white text-center p-2 m-2 rounded">Envie d'un foodtruck à proximité ?</h1>
    </div>
<div class=" col d-flex justify-content-center">
<div id="carouselExampleIndicators" class="carousel slide w-75 w-md-50 d-flex justify-content-center" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/foodtruck/foodtruckun.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="fw-bold fs-3 text-warning">Faite vous plaisir dans un foodtruck à proximité</h5>
        <p class="fs-6 text-black">Les foodtruck sont des camions restaurant entierement ouvert sur le coté dans lequel à été installée une cuisine</p>
      </div>
    </div>
    <div class="carousel-item ">
      <img src="img/foodtruck/foodtruckdeux.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="fw-bold fs-3 text-warning">Trouver des produits divers et variées</h5>
        <p class="fs-6 fw-bold "> On peux y trouver des pizza, tacos, sandwich panini, il y en a pour tout les goûts </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/foodtruck/foodtrucktrois.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="fw-bold fs-3 text-warning">Soutenez les petit commercants locaux</h5>
        <p class="fs-6 fw-bold text-white">Les foodtrucks sont souvent oublié ou non repertorié sur les différents site/application de livraison, nous allons remedier à ça </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



</div>
</div>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12 col-md-6 mt-5">
        <p class="text-warning fw-bold fs-2 text-center">Entrez votre adresse pour trouver la position et les horaires d'un foodtruck stationné à proximité </p>
        <form class="d-flex rounded ms-5 me-5 mt-5">
        <input class="form-control" type="search" placeholder="123 rue de l'exemple, Marseille 13000">
        <button class="btn btn-success ms-3" type="submit">Rechercher</button>
      </form>
        </div>
    
    <div class="col-12 col-md-6 mt-5">
    <p class="text-warning fw-bold fs-2 text-center">En voyage et vous voulez vous faire plaisir dans un foodtruck avec un savoir faire local ? </p>
    <p class="fs-5">Les foodtruck sont souvent installé a un même endroit constamment pour avoir une certaine régularité sur leur position. <br>
        Cependant il est souvent difficile de les trouvers sans les croisé ou sans avoir une connaissance qui connait leur position. <br>
        Désormais il suffit d'entrer votre adresse ici pour avoir une liste de ceux à proximité ! 
    </p>
    </div>
    </div>
</div>


</main>



<footer>
<?php
require_once('footer.php');
?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
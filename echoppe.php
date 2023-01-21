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

<div class="container-fluid bgimage ">
<?php include('error.php'); ?>
    <div class="d-flex justify-content-center">
    <h2 class="bg-warning text-white text-center p-2 m-2 rounded">Envie de trouver une échoppe à proximité pour des produits frais ?</h1>
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
      <img src="img/echoppeclassique/echoppebordderoute.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="fw-bold fs-3 text-warning">Trouver une echoppe à proximité n'as jamais été aussi simple</h5>
        <p class="fs-6 fw-bold">Les petites échoppes que l'on trouve en bord de route ou chez les fermier/agriculteur ne sont quasiment jamais repertorié, changeons ca ! </p>
      </div>
    </div>
    <div class="carousel-item ">
      <img src="img/echoppeclassique/echoppedesiles.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="fw-bold fs-3 text-warning">Des produits acheté au plus proche des producteur</h5>
        <p class="fs-6 fw-bold "> Acheter des produits dans ses échoppes vous permet de soutenir directement les petits agriculteurs </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/echoppeclassique/echoppefruit.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="fw-bold fs-3 text-warning">Faite des économies et manger bio</h5>
        <p class="fs-6 fw-bold text-black mb-4">Leurs produit sont souvent issu d'une agriculture bio et cela vous coûtera moins cher qu'en restaurant</p>
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
        <p class="text-warning fw-bold fs-2 text-center">Entrez votre adresse pour trouver la position et les horaires des échoppes à proximité </p>
        <form class="d-flex rounded ms-5 me-5 mt-5">
        <input class="form-control" type="search" placeholder="123 rue de l'exemple, Marseille 13000">
        <button class="btn btn-success ms-3" type="submit">Rechercher</button>
      </form>
        </div>
    
    <div class="col-12 col-md-6 mt-5">
    <p class="text-warning fw-bold fs-2 text-center">Envie de manger frais et bio ?</p>
    <p class="fs-5"> Les echoppes classique que l'ont peut trouver au bord de la route, dans un parking, ou directement ches un agriculteur Sont facile à trouver desormais ! <br>
        Faites des économies, manger frais et bio et soutenez vos producteur locaux !<br>
  
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
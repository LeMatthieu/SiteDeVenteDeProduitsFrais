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
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary flex-row justify-content-end">
  <div class="container-fluid">
    <a class="navbar-brand fs-2 text-success" href="#">Manger-local
    <img src="img/icons/salad(1).png" alt="" srcset="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto ms-auto fs-3 justify-content-evenly"> <!-- me auto et ms-auto pour centrer l'ul dans la nav bar -->
        <li class="nav-item">
          <a class="nav-link" href="index.php">Acceuil
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="marche.php">Marché</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Foodtruck</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">échoppe</a>
        </li>
      </ul>
      <form class="d-flex">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Se connecter/ S'inscrire</button>
      </form>
    </div>
  </div>
</nav>
</header>
<main>

<div class="container-fluid bgimage">
<div class="row"> 
  <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center"> <!-- d-flex pour utiliser l'alignement, aligns-center pour centrer les elements enfant(sur axe y) et -->
    <div class="w-75 m-5"> <!-- cette div permet de regrouper les element de mon contenu en display block (comportement par defaut) pour manipuler les 3 balises en meme temps avec la div parent et les flexbox-->
    <h1 class="text-white fs-1 fw-bold text-center bg-info rounded text-center"> Mangez frais et soutenez vos producteurs locaux  </h1>
    <p class="text-white fs-3 text-center"> Commencez par entré une adresse pour voir les points de vente à proximité :   </p>
    <form class="d-flex rounded ms-5 me-5">
        <input class="form-control" type="search" placeholder="123 rue de l'exemple, Marseille 13000">
        <button class="btn btn-success ms-3" type="submit">Rechercher</button>
      </form>
    </div>
  </div>
  <div class="col-12 col-lg-6 p-3 d-grid align-items-center">
  <div class="text-white fs-1 fw-bold m-3 bg-info rounded p-3"> Une envie de produits locaux ? Ou pourquoi ne pas trouver la bonne affaire?</div>
  <p class="text-white fs-2 m-3 text-center"> Echoppe de marché, foodtruck, Echoppe classique, vous allez trouver votre bonheur !</p>
  <img class="rounded w-75 img-responsive center-block d-block mx-auto" src="img/legumeechoppe.webp" alt="" srcset="">
  
    </div>
    </div>
  </div>
</div>
</main>



<h3 class="text-center mt-4">Comment ca marche ? </h3>
<h2 class="text-center fw-bold text-warning"> C'est tres simple ! </h2>



<div class="container-fluid d-flex mt-5">
<div class="row">
<div class="col-12 col-lg-4 mt-5">
<img class="img-responsive center-block d-block mx-auto"src="img/icons/location.png" alt="">
<p class="mt-3 fs-3 text-center"> Indiquez votre adresse</p>
</div>

<div class="col-12  col-lg-4 mt-5">
<img class="img-responsive center-block d-block mx-auto"src="img/icons/pizza" alt="">
<p class="mt-3 fs-3 text-center">Faites vous plaisir en choississant un de nos nombreux point de vente </p>
</div>

<div class="col-12 col-lg-4 mt-5">
<img class="img-responsive center-block d-block mx-auto"src="img/icons/deal.png" alt="" srcset="">
<p class="mt-3 fs-3 text-center">Faite une reservation ou contacter directement le propriétaire </p>
</div>
</div>
</div>

<footer>
  <ul class="d-flex justify-content-around border-top pt-3 list-unstyled fs-6 fs-lg-4">
    <li>Condition générales d'utilisation </li>
    <li>Vie privée / cookie</li>
    <li>Aide</li>
    <li>Nos engagements</li>
    <li>Déclaration de confidentialité</li>
  </ul>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

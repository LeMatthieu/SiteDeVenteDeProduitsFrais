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
    <div class="collapse navbar-collapse " id="navbarColor01">
      <ul class="navbar-nav me-auto ms-auto fs-3 justify-content-evenly"> <!-- me auto et ms-auto pour centrer l'ul dans la nav bar -->
        <li class="nav-item">
          <a class="nav-link" href="#">Acceuil
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Marché</a>
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
<div class="container-fluid p-0"> 
<div class="bgimage d-flex">
  <div class="col">
  <h1 class="text-white fs-1 fw-bold p-3"> Mangez frais et soutenez vos producteurs locaux  </h1>
  <p class="text-white fs-3"> Commencez par entré une adresse pour voir les points de vente a proximité :   </p>
  <form class="d-flex bg-secondary p-3 rounded">
        <input class="form-control me-sm-2" type="search" placeholder="123 rue de l'exemple, Marseille 13000">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Rechercher</button>
      </form>
  </div>
  <div class="col">
     <h1 class="text-white fs-1 fw-bold p-3"> Mangez frais et soutenez vos producteurs locaux  </h1>
  <p class="text-white fs-3"> Commencez par entré une adresse pour voir les points de vente a proximité :   </p>
    </div>

</div>
</div>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

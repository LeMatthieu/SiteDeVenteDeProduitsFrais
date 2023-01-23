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
<?php include('error.php'); ?>
    <div class="d-flex justify-content-center">
    <h2 class="bg-warning text-white text-center p-2 m-2 rounded">Trouver un marché proche de chez vous</h1>
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
      <img src="img/marche/legumeechoppe.webp" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="fw-bold fs-3 text-warning">Faite des économies et manger bio</h5>
        <p class="fs-6 fw-bold ">Grâce aux achats locaux vous pouvez realiser des économies et surtout manger des produits frais et bio acheté directement auprès des producteurs </p>
      </div>
    </div>
    <div class="carousel-item ">
      <img src="img/marche/marchedivers.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="fw-bold fs-3 text-warning">Trouver des produits divers et variées</h5>
        <p class="fs-6 fw-bold "> Des habits, du fromage, des fruits, faite vous plaisir et trouver votre pepite  </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/marche/marchegraine.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="fw-bold fs-3 text-warning">Vous faite un geste pour la planete en économisant des emballages</h5>
        <p class="fs-6 fw-bold ">Grâce aux achats dans les stands du marché, vous permettait l'économie d'emballage et vous réutiliser des produits qui serait autrement jeté </p>
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
        <p class="text-black fs-3 text-center"> Cliqué sur se bouton pour afficher tous les commerces enregistré </p>
        <p class="d-flex rounded ms-5 me-5">
        <button class="btn btn-success m-auto" type="button" name="findshop"  onclick="showDiv()">Afficher les commerces</button>
      </p>
      <p class="text-black fs-5 ms-5  "id='listecommerce' style="display:none;"><?php include('getalldata.php'); ?></p>
      </form>
        </div>
    
    <div class="col-12 col-md-6 mt-5">
    <p class="text-warning fw-bold fs-2 text-center">En voyage dans une autre commune et envie de faire un tour au marché local ? </p>
    <p class="fs-5">Les marché sont organisé le weekend ou le mercredi, mais cela depend de la communne. <br>
     Grâce à notre site vous pourrez trouver la liste des échoppes présentent dans les marché de la plupart des communes de France.
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
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manger local</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <?php
    include('header.php');
    include('modaleconnexion.php');
    ?>
  </header>
  <main>
    <div class="container-fluid bgimage">
      <?php include('error.php');?> <!-- à inclure dans toutes les page pour afficher les erreur lorsqu'on essaye de remplir les formulaire dans les modal -->
      <div class="row">
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center"> <!-- d-flex pour utiliser l'alignement, aligns-center pour centrer les elements enfant(sur axe y) et -->
          <div class="w-75 m-5"> <!-- cette div permet de regrouper les element de mon contenu en display block (comportement par defaut) pour manipuler les 3 balises en meme temps avec la div parent et les flexbox-->
            <h1 class="text-white fs-1 fw-bold text-center bg-warning rounded text-center"> Mangez frais et soutenez vos producteurs locaux </h1>
            <p class="text-white fs-3 text-center"> Cliqué sur se bouton pour afficher tous les commerces enregistré </p>
            <p class="d-flex rounded ms-5 me-5">
              <button class="btn btn-success m-auto" type="button" name="findshop" onclick="showDiv()">Afficher les commerces</button>
            </p>
            <p class="text-white fs-5 ms-5 " id='listecommerce' style="display:none;"><?php include('getalldata.php'); ?></p>
          </div>
        </div>
        <div class="col-12 col-md-6 p-3 d-grid align-items-center">
          <div class="text-white fs-1 fw-bold m-3 bg-warning rounded p-3"> Une envie de produits locaux ? Ou pourquoi ne pas trouver la bonne affaire?</div>
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
      <div class="col-12 col-md-4 mt-5">
        <img class="img-responsive center-block d-block mx-auto" src="img/icons/location.png" alt="">
        <p class="mt-3 fs-3 text-center"> Cliquer sur "afficher les commerces" pour voir leur adresse </p>
      </div>
      <div class="col-12  col-md-4 mt-5">
        <img class="img-responsive center-block d-block mx-auto" src="img/icons/pizza" alt="">
        <p class="mt-3 fs-3 text-center">Faites vous plaisir en choississant un de nos nombreux point de vente </p>
      </div>
      <div class="col-12 col-md-4 mt-5">
        <img class="img-responsive center-block d-block mx-auto" src="img/icons/deal.png" alt="" srcset="">
        <p class="mt-3 fs-3 text-center">Faite une reservation en contactant directement le propriétaire </p>
      </div>
    </div>
  </div>

  <!-- <iframe
  width="600"
  height="450"
  style="border:0"
  loading="lazy"
  allowfullscreen
  referrerpolicy="no-referrer-when-downgrade"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAaM4SM2WBrtuMPhodm-tgH7yHqymNDyw0
    &q=Space+Needle,Seattle+WA&q">
</iframe> -->

  <footer>
    <?php
    require_once('footer.php');
    ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>
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
  <nav class="navbar navbar-expand-md navbar-dark bg-primary flex-row justify-content-end">
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
          <a class="nav-link" href="foodtruck.php">Foodtruck</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="echoppe.php">échoppe</a>
        </li>
      </ul>
      <!-- Button pour ouvrir le modal-->
        <button class="btn btn-success my-2 my-sm-0" type="submit" data-bs-toggle="modal" data-bs-target="#modalConnection">Se connecter/ S'inscrire</button>
        
    </div>
  </div>
</nav>
</header>
<main>




<!-- Modal connexion -->
<div class="modal fade" id="modalConnection" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Connexion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
    <div class="mb-3">
    <label for="inputEmail" class="form-label">Adresse e-mail</label>
    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
    <label for="inputPassword" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="inputMDP">
    </div>
    <div class="mb-3 form-check">
    <a class ="link-primary" data-bs-target="#modalInscription1" data-bs-toggle="modal" data-bs-dismiss="modal">Pas de compte ? inscrivez vous !</a>
    </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-success">Connexion</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal inscription -->
<div class="modal fade" id="modalInscription1" aria-hidden="true" aria-labelledby="ModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">S'inscrire</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
      <div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="inputNom">
    </div>
    <div class="mb-3">
    <label for="prenom" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="inputPrenom">
    </div>
    <div class="mb-3">
    <label for="adresse" class="form-label">date de naissance</label>
    <input type="date" class="form-control" id="inputDate">
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">adresse e-mail</label>
    <input type="email" class="form-control" id="inputMailRegister" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="inputMDPRegister">
    <div class="form-text">
    Votre mot de passe doit avoir une majuscule, une minuscule, un chiffre, et avoir une longueur entre 8 et 20 caractère.
    </div>
    </div>
      </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#modalConnection" data-bs-toggle="modal" data-bs-dismiss="modal">Retour</button>
        <button type="submit" class="btn btn-success" data-bs-target="#modalInscription2" data-bs-toggle="modal" data-bs-dismiss="modal">Continuer</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal inscription 2/suite -->
<div class="modal fade" id="modalInscription2" aria-hidden="true" aria-labelledby="ModalToggleLabel3" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Une derniere étape ! </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
      <div class="mb-3">
    <label for="nom" class="form-label">Je suis : </label>
    <select class="form-control form-control-lg text-black">
    <option>Un consommateur</option>
    <option>Un propriétaire d'un foodtruck</option>
    <option>Un propriétaire d'une échoppe dans un marché</option>
    <option>Un propriétaire d'une échoppe classique</option>
    </select>
    </div>
    <div class="mb-3">
    <label for="adresse" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="adresseInput">
    </div>
    <div class="mb-3">
    <label for="adresse" class="form-label">Ville</label>
    <input type="text" class="form-control" id="villeInput">
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Code Postal</label>
    <input type="number" class="form-control" id="cpInput" aria-describedby="emailHelp">
    </div>
      </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#modalConnection" data-bs-toggle="modal" data-bs-dismiss="modal">Retour</button>
        <button type="submit" class="btn btn-success">S'inscrire</button>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid bgimage">
<div class="row"> 
  <div class="col-12 col-md-6 d-flex align-items-center justify-content-center"> <!-- d-flex pour utiliser l'alignement, aligns-center pour centrer les elements enfant(sur axe y) et -->
    <div class="w-75 m-5"> <!-- cette div permet de regrouper les element de mon contenu en display block (comportement par defaut) pour manipuler les 3 balises en meme temps avec la div parent et les flexbox-->
    <h1 class="text-white fs-1 fw-bold text-center bg-warning rounded text-center"> Mangez frais et soutenez vos producteurs locaux  </h1>
    <p class="text-white fs-3 text-center"> Commencez par entré une adresse pour voir les points de vente à proximité :   </p>
    <form class="d-flex rounded ms-5 me-5">
        <input class="form-control" type="search" placeholder="123 rue de l'exemple, Marseille 13000">
        <button class="btn btn-success ms-3" type="submit">Rechercher</button>
      </form>
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
<img class="img-responsive center-block d-block mx-auto"src="img/icons/location.png" alt="">
<p class="mt-3 fs-3 text-center"> Indiquez votre adresse</p>
</div>

<div class="col-12  col-md-4 mt-5">
<img class="img-responsive center-block d-block mx-auto"src="img/icons/pizza" alt="">
<p class="mt-3 fs-3 text-center">Faites vous plaisir en choississant un de nos nombreux point de vente </p>
</div>

<div class="col-12 col-md-4 mt-5">
<img class="img-responsive center-block d-block mx-auto"src="img/icons/deal.png" alt="" srcset="">
<p class="mt-3 fs-3 text-center">Faite une reservation ou contacter directement le propriétaire </p>
</div>
</div>
</div>

<iframe
  width="600"
  height="450"
  style="border:0"
  loading="lazy"
  allowfullscreen
  referrerpolicy="no-referrer-when-downgrade"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAaM4SM2WBrtuMPhodm-tgH7yHqymNDyw0
    &q=Space+Needle,Seattle+WA&q">
</iframe>

<footer>
  <ul class="d-block d-md-flex justify-content-around border-top pt-3 list-unstyled fs-6 fs-md-4 ms-4 ms-md-0">
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

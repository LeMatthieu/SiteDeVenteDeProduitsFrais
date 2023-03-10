<?php session_start();
?>
<?php
if (isset($_SESSION["loggedin"]) && ($_SESSION["loggedin"] == TRUE)) {
  //NAV BAR QUAND ON EST CO
?>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary flex-row justify-content-end">
    <div class="container-fluid">
      <a class="navbar-brand fs-2 text-success" href="index.php">Manger-local
        <img src="img/icons/salad(1).png" alt="...">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" 
      aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
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
        <button class="btn btn-success my-2 me-3 my-sm-0 " type="submit" data-bs-target="#modalshop" 
        data-bs-toggle="modal">Mon profil</button>
        <form action="" method="post">
          <button class="btn btn-success my-2 my-sm-0" type="submit" name="logout">Se déconnecter</button>
        </form>
      </div>
    </div>
  </nav>
<?php
} else {
  //NAVBAR QUAND ON EST DECO
?>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary flex-row justify-content-end">
    <div class="container-fluid">
      <a class="navbar-brand fs-2 text-success" href="index.php">Manger-local
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
<?php
}
?>
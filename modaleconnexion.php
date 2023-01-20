<?php include('register.php');
?>
<!-- Modal connexion -->
<div class="modal fade" id="modalConnection" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Connexion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post">   <!-- action permet d'appeller le fichier -->
    <div class="mb-3">
    <label for="inputEmail" class="form-label">Adresse e-mail</label>
    <input type="email" class="form-control" name="inputEmail" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
    <label for="inputPassword" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" name="inputMDP">
    </div>
    <div class="mb-3 form-check">
    <a class ="link-primary" data-bs-target="#modalInscription1" data-bs-toggle="modal" data-bs-dismiss="modal">Pas de compte ? inscrivez vous !</a>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-success" name="login" data-bs-dismiss="modal">Connexion</button>
      </div>
      </form>
      </div>

    </div>
  </div>
</div>




?>
<!-- Modal inscription -->
<div class="modal fade" id="modalInscription1" aria-hidden="true" aria-labelledby="ModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">S'inscrire</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form  method="POST">
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="lastname">
        </div>
        <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" name="firstname">
        </div>
        <div class="mb-3">
        <label for="adresse" class="form-label">date de naissance</label>
        <input type="date" class="form-control" name="birthDate">
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">adresse e-mail</label>
        <input type="email" class="form-control" name="mailRegister" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" name="passwordRegister">
        <div class="form-text">
          Votre mot de passe doit avoir une majuscule, une minuscule, un chiffre, et avoir une longueur entre 8 et 20 caractère.
        </div>
        <div class="mb-3">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" name="adress">
        </div>
        <div class="mb-3">
        <label for="adresse" class="form-label">Ville</label>
        <input type="text" class="form-control" name="city">
        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Code Postal</label>
        <input type="number" class="form-control" name="postalcode" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
        <label for="adresse" class="form-label">numero de telephone</label>
        <input type="number" class="form-control" name="PhoneNumber">
        </div>
        <!-- <div class="mb-3">
        <label for="adresse" class="form-label">Nom de votre commerce(facultatif)</label>
        <input type="text" class="form-control" name="shopname">
        </div>
        <div class="mb-3">
        <label for="adresse" class="form-label">Adresse de votre commerce</label>
        <input type="text" class="form-control" name="shopadress">
        </div>
        <div class="mb-3">
        <label for="adresse" class="form-label">Ville de votre commerce</label>
        <input type="text" class="form-control" name="shopcity">
        </div>
        <div class="mb-3">
        <label for="adresse" class="form-label">code postal de votre commerce</label>
        <input type="number" class="form-control" name="CPshop">
        </div>
        <div class="mb-3">
        <label for="adresse" class="form-label">Type de commerce</label>
        <input type="text" class="form-control" name="shoptype">
        </div> -->
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#modalConnection" data-bs-toggle="modal" data-bs-dismiss="modal">Retour</button>
        <button type="submit" class="btn btn-success" name="register" data-bs-dismiss="modal">S'enregistrer</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="modalshop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mon échoppe</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<?php var_dump($_POST); ?>

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
        <form method="post"> <!-- action permet d'appeller le fichier -->
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Adresse e-mail</label>
            <input type="email" class="form-control" name="inputEmail" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="inputPassword" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="inputMDP">
          </div>
          <div class="mb-3 form-check">
            <a class="link-primary" data-bs-target="#modalInscription1" data-bs-toggle="modal" data-bs-dismiss="modal">Pas de compte ? inscrivez vous !</a>
          </div>
          <div class="modal-footer">
            <!-- Meme si on submit rien, cela permet d'acutaliser la page et de faire disparaitre les erreur quand on clique sur fermer -->
            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <button type="submit" class="btn btn-success" name="login">Connexion</button>
          </div>
        </form>
        <?php include('error.php'); ?>
      </div>
    </div>
  </div>
</div>


<!-- Modal inscription -->
<div class="modal fade" id="modalInscription1" aria-hidden="true" aria-labelledby="ModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">S'inscrire</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" name="lastname">
          </div>
          <div class="mb-3">
            <label for="prenom" class="form-label">Pr??nom</label>
            <input type="text" class="form-control" name="firstname">
          </div>
          <div class="mb-3">
            <label for="adresse" class="form-label">date de naissance</label>
            <input type="date" class="form-control" name="birthDate">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">adresse e-mail</label>
            <input type="text" class="form-control" name="mailRegister" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="passwordRegister">
            <div class="form-text">
              Votre mot de passe doit contenir une lettre, un chiffre, et avoir une longueur entre 8 et 20 caract??re.
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
              <input type="text" class="form-control" name="postalcode" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="adresse" class="form-label">Numero de telephone</label>
              <input type="text" class="form-control" name="PhoneNumber">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" data-bs-target="#modalConnection" data-bs-toggle="modal" data-bs-dismiss="modal">Retour</button>
            <button type="submit" class="btn btn-success" name="register" data-bs-dismiss="modal">S'enregistrer</button>
          </div>
        </form>
        <?php include('error.php'); ?>
      </div>
    </div>
  </div>
</div>


<!-- Modal editprofile -->
<div class="modal fade" id="modaleditprofile" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Mon profil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post"> <!-- action permet d'appeller le fichier -->
          <h3>Mes infos personelles</h3>
          <p>Nom : <input type="text" name="editlname" value="<?php echo ($_SESSION['mylname']); ?>"> </p>
          <p>Pr??nom : <input type="text" name="editfname" value="<?php echo ($_SESSION['myfname']); ?>"></p>
          <p>Email : <input type="text" name="editmail" value="<?php echo ($_SESSION['username']); ?>"></p>
          <p>Mot de passe : <input type="text" name="editpassword" value="<?php echo ($_SESSION['mypassword']); ?>"></p>
          <p>Adresse : <input type="text" name="editadress" value="<?php echo ($_SESSION['myadress']); ?>"></p>
          <p>Ville : <input type="text" name="editcity" value="<?php echo ($_SESSION['mycity']); ?>"></p>
          <p>Code postal : <input type="number" name="editcp" value="<?php echo ($_SESSION['mypostalcode']); ?>"></p>
          <p>Num??ro de t??l??phone : <input type="text" name="editphone" value="<?php echo ($_SESSION['myphonenumber']); ?>"></p>
          <p>Date de naissance : <input type="date" name="editbirth" value="<?php echo ($_SESSION['mybirthdate']); ?>"></p>
          <h3>Votre commerce :</h3>
          <p>nom de votre commerce : <input type="text" name="editshopname" value="<?php echo ($_SESSION['myshopname']); ?>"></p>
          <p>Type de votre commerce : <input type="text" name="editshoptype" value="<?php echo ($_SESSION['myshoptype']); ?>"></p>
          <p>Adresse de votre commerce : <input type="text" name="editshopadress" value="<?php echo ($_SESSION['myshopadress']); ?>"> </p>
          <p>Ville de votre commerce : <input type="text" name="editshopcity" value="<?php echo ($_SESSION['myshopcity']); ?>"></p>
          <p>Code postal de votre commerce : <input type="text" name="editshopcp" value="<?php echo ($_SESSION['myshopcp']); ?>"></p>
          <div class="modal-footer">
            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <button type="submit" class="btn btn-success" name="updateprofil">Valider les changements</button>
          </div>
        </form>
        <?php include('error.php'); ?>
      </div>
    </div>
  </div>
</div>

<!-- Modal editprofile si on a pas de commerce -->
<div class="modal fade" id="modaleditprofilenoshop" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Mon profil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post"> <!-- action permet d'appeller le fichier -->
          <h3>Mes infos personelles</h3>
          <p>Nom : <input type="text" name="editlname" value="<?php echo ($_SESSION['mylname']); ?>"> </p>
          <p>Pr??nom : <input type="text" name="editfname" value="<?php echo ($_SESSION['myfname']); ?>"></p>
          <p>Email : <input type="text" name="editmail" value="<?php echo ($_SESSION['username']); ?>"></p>
          <p>Mot de passe : <input type="text" name="editpassword" value="<?php echo ($_SESSION['mypassword']); ?>"></p>
          <p>Adresse : <input type="text" name="editadress" value="<?php echo ($_SESSION['myadress']); ?>"></p>
          <p>Ville : <input type="text" name="editcity" value="<?php echo ($_SESSION['mycity']); ?>"></p>
          <p>Code postal : <input type="text" name="editcp" value="<?php echo ($_SESSION['mypostalcode']); ?>"></p>
          <p>Num??ro de t??l??phone : <input type="text" name="editphone" value="<?php echo ($_SESSION['myphonenumber']); ?>"></p>
          <p>Date de naissance : <input type="date" name="editbirth" value="<?php echo ($_SESSION['mybirthdate']); ?>"></p>
          <div class="modal-footer">
            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <button type="submit" class="btn btn-success" name="updateprofilenoshop">Valider les changements</button>
          </div>
        </form>
        <?php include('error.php'); ?>
      </div>
    </div>
  </div>
</div>





<?php
if (isset($_SESSION['myshopexist']) && ($_SESSION['myshopexist'] == TRUE)) {
  //modale quand on a creer notre echoppe
?>
  <div class="modal fade" id="modalshop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mon ??choppe</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3>Mes infos personelles</h3>
          <p>Nom : <?php echo ($_SESSION['myfname']); ?></p>
          <p>Pr??nom : <?php echo ($_SESSION['mylname']); ?></p>
          <p>Email : <?php echo ($_SESSION['username']); ?></p>
          <p>Mot de passe : <?php echo ($_SESSION['mypassword']); ?></p>
          <p>Adresse : <?php echo ($_SESSION['myadress']); ?></p>
          <p>Ville : <?php echo ($_SESSION['mycity']); ?></p>
          <p>Code postal : <?php echo ($_SESSION['mypostalcode']); ?></p>
          <p>Num??ro de t??l??phone : <?php echo ($_SESSION['myphonenumber']); ?></p>
          <p>Date de naissance : <?php echo ($_SESSION['mybirthdate']); ?></p>
          <h3>Votre commerce :</h3>
          <p>nom de votre commerce : <?php echo ($_SESSION['myshopname']); ?></p>
          <p>Type de votre commerce : <?php echo ($_SESSION['myshoptype']); ?> </p>
          <p>Adresse de votre commerce :<?php echo ($_SESSION['myshopadress']); ?> </p>
          <p>Ville de votre commerce : <?php echo ($_SESSION['myshopcity']); ?></p>
          <p>Code postal de votre commerce : <?php echo ($_SESSION['myshopcp']); ?></p>
          <form method="post">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modaleditprofile" 
            name="editprofile">Editer mon profil</button>
            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="deleteshop">Supprimer mon commerce</button>
          </form>
        </div>
      </div>
    </div>




  <?php
} else {
  //modale quand on a pas encore d'echoppe
  ?>

    <div class="modal fade" id="modalshop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mon profil</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h3>Mes infos personelles</h3>
            <p>Nom : <?php echo ($_SESSION['mylname']); ?></p>
            <p>Pr??nom : <?php echo ($_SESSION['myfname']); ?></p>
            <p>Email : <?php echo ($_SESSION['username']); ?></p>
            <p>Mot de passe : <?php echo ($_SESSION['mypassword']); ?></p>
            <p>Adresse : <?php echo ($_SESSION['myadress']); ?></p>
            <p>Ville : <?php echo ($_SESSION['mycity']); ?></p>
            <p>Code postal : <?php echo ($_SESSION['mypostalcode']); ?></p>
            <p>Num??ro de t??l??phone : <?php echo ($_SESSION['myphonenumber']); ?></p>
            <p>Date de naissance : <?php echo ($_SESSION['mybirthdate']); ?></p>
            <h3 class="my-3"> Enregistrer votre commerce si vous en possedez un : </h3>
            <form method="post">
              <div class="mb-3">
                <label for="adresse" class="form-label">Nom de votre commerce (facultatif)</label>
                <input type="text" class="form-control" name="shopname">
              </div>
              <div class="mb-3">
                <label for="adresse" class="form-label">type de votre commerce</label>
                <input type="text" class="form-control" name="shoptype">
              </div>
              <div class="mb-3">
                <label for="adresse" class="form-label">adresse du commerce</label>
                <input type="text" class="form-control" name="shopadress">
              </div>
              <div class="mb-3">
                <label for="adresse" class="form-label">ville du commerce</label>
                <input type="text" class="form-control" name="shopcity">
              </div>
              <div class="mb-3">
                <label for="adresse" class="form-label">code postal du commerce</label>
                <input type="number" class="form-control" name="shopcp">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modaleditprofilenoshop" name="editprofile">Editer mon profil</button>
            <button type="submit" class="btn btn-primary" name="validshopname" data-bs-dismiss="modal">Ajouter le commerce</button>
          </div>
          </form>
          <?php include('error.php'); ?>
        </div>
      </div>
    </div>

  <?php
} ?>
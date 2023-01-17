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
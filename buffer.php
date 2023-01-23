<!-- Modal edit profile -->
<div class="modal fade" id="modaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Mon échoppe</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h3>Mes infos personelles</h3>
                  <input type="text" name="editname" value="<?php echo($_SESSION['myfname']);?>">
                  <p>Nom : <?php echo($_SESSION['myfname']);?></p>
                  <p>Prénom : <?php echo($_SESSION['mylname']); ?></p>
                  <p>Email : <?php echo($_SESSION['username']); ?></p> 
                  <p>Mot de passe : <?php echo($_SESSION['mypassword']); ?></p>
                  <p>Adresse : <?php echo($_SESSION['myadress']); ?></p>
                  <p>Ville : <?php echo($_SESSION['mycity']); ?></p>
                  <p>Code postal : <?php echo($_SESSION['mypostalcode']); ?></p>
                  <p>Numéro de téléphone : <?php echo($_SESSION['myphonenumber']); ?></p>
                  <p>Date de naissance : <?php echo($_SESSION['mybirthdate']); ?></p>
                  <h3>Votre commerce :</h3>
                  <p>nom de votre commerce :  <?php echo($_SESSION['myshopname']); ?></p>
                  <p>Type de votre commerce : <?php echo($_SESSION['myshoptype']); ?> </p>
                  <p>Adresse de votre commerce :<?php echo($_SESSION['myshopadress']); ?> </p>
                  <p>Ville de votre commerce : <?php echo($_SESSION['myshopcity']); ?></p>
                  <p>Code postal de votre commerce : <?php echo($_SESSION['myshopcp']); ?></p>
                  <form method="post">
                  <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" name="editprofile">valider les changements</button>
                  </form>           
              </div>
            </div>
          </div>






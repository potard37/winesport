<!DOCTYPE html>
<html lang="fr" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Win E-sport</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <header class="block-header">

    </header>

    <div class="block-center">
      <div class="inner">
        <h1 class="title">S'INSCRIRE</h1>
          <div class="sous-titre">
            <p>Déjà un compte ? Connectez-vous</p>
          </div>
              <div class="container">

                  <div class="input_field nom">
                    <label for="nom">Nom :</label><br>
                    <input type ="text" id="nom" name="nom"><br>
                  </div>

                  <div class="input_field prenom">
                    <label for="prenom">Prénom :</label><br>
                    <input type="text" id="prenom" name="prenom"><br>
                  </div>

                  <div class="input_field sexe">
                    <label for="sexe">Sexe :</label><br>
                    <div class="buttonsexe">
                      <button type="button" name="homme" class="button_homme">Homme</button>
                      <button type="button" name="femme">Femme</button><br>
                    </div>
                  </div>

                  <div class="input_field date_naissance">
                    <label for="date_naissance">Date de naissance :</label><br>
                    <select>
                      <?php for($i=1;$i<=31; $i++){ ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                      <?php } ?>
                    </select>
                    <select>
                      <?php for($i=1;$i<=12; $i++){ ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                      <?php } ?>
                    </select>
                    <select>
                      <?php for($i=1920;$i<=2020; $i++){ ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                      <?php } ?>
                    </select><br>
                  </div>

                  <div class="input_field adresse">
                    <label for="adresse">Adresse :</label><br>
                    <input type="text" id="adresse" name="adresse"><br>
                  </div>

                  <div class="input_field ville">
                    <label for="ville">Ville :</label><br>
                    <input type="text" id="ville" name="ville"><br>
                  </div>

                  <div class="input_field pays_naissance">
                    <label for="pays_naissance">Pays de naissance :</label><br>
                    <select>
                      <option value="pays1">France</option>
                      <option value="pays2">Belgique</option>
                      <option value="pays3">Suisse</option>
                      <option value="pays4">Luxembourg</option>
                    </select><br>
                  </div>

                  <div class="input_field numero_telephone">
                    <label for="numero_telephone">Numéro de téléphone :</label><br>
                    <input type="number" id="numero_telephone" name="numero_telephone"><br>
                  </div>

                  <div class="input_field piece_identite">
                    <label for="piece_identite">Pièce d'identité :</label><br>
                    <div class="text">
                      <p>Une pièce d'identité est obligatoire pour pouvoir créer un compte. Veuillez rentrer ci-dessous le reco et le verso de votre pièce d'itentité.</p>
                    </div>
                    <div class="button">
                    <div class="button_recto_verso">
                      <button type="button" name="recto" class="button_recto">Recto</button>
                      <button type="button" name="verso">Verso</button><br>
                    </div>
                    </div>
                  </div>

                  <div class="input_field justificatif_domicile">
                    <label for="justificatif_domicile">Justificatif de domicile :</label><br>
                      <div class="text">
                        <p>Un justificatif de domicile est obligatoire pour pouvoir créer un compte, afin de s'assurer que vous êtes bien le détenteur du compte. Veuillez rentrer le document ci-dessous.</p>
                      </div>
                        <button type="button" name="uploader">Uploader</button><br>
                  </div>

                  <div class="input_field iban">
                    <label for="iban">IBAN :</label><br>
                      <div class="text">
                        <p>Un IBAN à votre compte en banque est obligatoire afin que nous puissons vous verser de l'argent vers votre compte en banque.</p>
                      </div>
                        <input type="number" id="iban" name="iban"><br>
                  </div>

                  <div class="input_field email">
                    <label for="email">Email :</label><br>
                    <input type ="email" id="email" name="email"><br>
                  </div>

                  <div class="input_field pseudo">
                    <label for="pseudo">Pseudo :</label><br>
                    <input type ="text" id="pseudo" name="pseudo"><br>
                  </div>

                  <div class="input_field mdp">
                    <label for="mdp">Mot de passe :</label><br>
                    <input type ="text" id="mdp" name="mdp"><br>
                  </div>

                  <div class="input_field confirmation_mdp">
                    <label for="confirmation_mdp">Confirmer le mot de passe :</label><br>
                    <input type ="text" id="confirmation_email" name="confirmation_email"><br>
                  </div>

                  <div class="input_field valider">
                    <button type="button" name="valider" class="button_valider">VALIDER</button>
                  </div>
              </div>
          </div>
    </div>

  </body>

</html>

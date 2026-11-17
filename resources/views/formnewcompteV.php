<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
    </head>
    <body>
         <div id="pagewidth">
    
    <div id="header"><img src="<?php echo asset('images/logo.png'); ?>" alt="Brit Hotel" height="60"></div>

        <div id="leftcol">
            <h2>Menu</h2>
            <ul>
                <?php include('menuV.php'); ?>
            </ul>
        </div>

        <div id="maincol">
            <h2>Créer un compte</h2>

            
            <div class="registration-form-container">
                <form action="<?php echo url('/client'); ?>" method="POST" class="form-grid">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />

                    <label for="email">Identifiant (adresse mail)</label>
                    <input type="email"  name="mail" required>
                    <br><br>

                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                    <br><br>

                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" required>
                    <br><br>

                    <div class="centre">
                <p>Vous avez déjà un compte ?
                    <a href="<?php echo url('/connexion'); ?>">Se connecter</a>
                </p>
            </div>

                   
                    <input type="submit" value="CRÉER COMPTE" class="submit-button">
                </form>
            </div>
        </div>
    </div>
    </body>
</html>

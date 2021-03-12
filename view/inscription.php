<!DOCTYPE html>
<html lang="fr">

<?php
require('../controleur/inscription.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Twitter | Inscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../view/css/inscription.css">

</head>

<body>
    <header>

        <a href="index.php"><img  id="logo" src="../assets/logo.png" alt="logo" /></a>

    </header>

    <div id="register" class="container">
        <h1 class="well">Formulaire d'inscription :</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form method="post">
                    <div class="col-sm-12">
                        
                        <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Prénom</label>
                                <input name="prenom" type="text" placeholder="Entrer votre prénom ici.." class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Nom</label>
                                <input name="nom" type="text" placeholder="Entrer votre nom ici.." class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Date de naissance</label>
                                <input name="date_de_naissance" type="text" placeholder="AAAA-MM-JJ" class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Pseudo</label>
                                <input name="pseudo" type="text" placeholder="Entrer votre pseudo ici.." class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>E-mail</label>
                            <input name="email" type="email" placeholder="Entrer votre adresse e-mail ici...." class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Mot de Passe</label>
                            <input name="mdp" type="password" placeholder="Entrer votre mot de passe ici...." class="form-control" required>
                        </div>
 
                        <button type="submit" name="inscription" class="btn btn-lg btn-light">Confirmer</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
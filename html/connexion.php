<!DOCTYPE html>
<html>

<?php
session_start();
include('../db/connexiondb.php'); // Fichier PHP contenant la connexion à votre BDD
 
// S'il y a une session alors on ne retourne plus sur cette page  
if (isset($_SESSION['id']))
{
header('Location: index.php');
    exit;
}

// Si la variable "$_Post" contient des informations alors on les traitres
if(!empty($_POST))
{
extract($_POST);
$valid = true;

    if (isset($_POST['connexion']))
    {
        $email = htmlentities(strtolower(trim($email)));
        $mdp = trim($mdp);

        // On fait une requête pour savoir si le couple mail / mot de passe existe bien
        $req = $DB->query('SELECT * FROM users WHERE email=? AND password=?', 
        array($email, $mdp = md5($_POST['mdp'])));

        $req = $req->fetch();

        // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple mail / mot de passe
        if ($req['id'] == "")
        {
            $valid = false;
            $er_email = "Le mail ou le mot de passe est incorrecte";
        }
        
        // S'il y a un résultat alors on va charger la SESSION de l'utilisateur en utilisateur les variables $_SESSION
        if ($valid)
        {
            $_SESSION['id'] = $req['id'];
            $_SESSION['name'] = $req['name'];
            $_SESSION['email'] = $req['email'];
 
            header('Location:  index.php');
            exit;
        }
    }
}
?>

<head>

    <title> My Twitter | Connexion</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/connexion.css">
</head>

<body>

    <header>
        <a href="index.php"><img  id="logo" src="../assets/logo.png" alt="logo" /></a>
    </header>

    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" method="post">
                            <h3 class="text-center text-light">Connexion</h3>
                            <div class="form-group">
                                <label for="email" class="text-light">Email:</label><br>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-light">Mot de passe:</label><br>
                                <input type="password" name="mdp" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="connexion" class="btn btn-light btn-md">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="jquery-3.5.1.min.js"></script>
</body>
</html>
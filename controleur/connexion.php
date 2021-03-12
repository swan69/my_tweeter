<?php
session_start();
include('connexiondb.php'); // Fichier PHP contenant la connexion à votre BDD
 
// S'il y a une session alors on ne retourne plus sur cette page  
if (isset($_SESSION['id']))
{
header('Location: ../view/tweeter.php');
    exit;
}

// Si la variable "$_Post" contient des informations alors on les traitres
if(!empty($_POST))
{
extract($_POST);
$valid = true;

    if (isset($_POST['connexion']))
    {
        $email = htmlspecialchars($_POST["email"]);
        $mdp = md5($_POST["mdp"]);

        $array = [
            "email" => $email,
            "mdp" => $mdp
        ];
        
        // On fait une requête pour savoir si le couple mail / mot de passe existe bien
        $qry = "SELECT * FROM users WHERE email=? AND password=?";
        $req = $DB->query($qry, array($email, $mdp));

        $req = $req->fetch();

        // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple mail / mot de passe
        if ($req['id'] == "")
        {
            $valid = false;
            $er_email = "Le mail ou le mot de passe est incorrecte";
            echo $er_email;
        }
        
        // S'il y a un résultat alors on va charger la SESSION de l'utilisateur en utilisateur les variables $_SESSION
        if ($valid)
        {
            $_SESSION['id'] = $req['id'];
            $_SESSION['name'] = $req['name'];
            $_SESSION['email'] = $req['email'];
 
            header('Location: ../view/tweeter.php');
            exit;
        }
    }
}
?>
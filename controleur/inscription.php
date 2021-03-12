<?php

session_start();
include('connexiondb.php');

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

// On se place sur le bon formulaire grâce au "name" de la balise "input"
    if (isset($_POST['inscription']))
    {
        $prenom = htmlentities(trim($prenom)); 
        $nom = htmlentities(trim($nom)); 
        $date_de_naissance = htmlentities(trim($date_de_naissance));
        $pseudo = htmlentities(trim($pseudo));
        $email = htmlentities(strtolower(trim($email))); 
        $mdp = trim($mdp); 
 
// On vérifit que le mail est dans le bon format
        if(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $email))
        {
            $valid = false;
            $er_email = "Le mail n'est pas valide";
        }

// Si toutes les conditions sont remplies alors on fait le traitement
        if($valid)
        {
            $mdp = md5($_POST['mdp']);
            $date_creation_compte = date('Y-m-d H:i:s');

// On insert nos données dans la table utilisateur
            $DB->insert("INSERT INTO `users` (name, username, dob, email, password, created_at) VALUES(?, ?, ?, ?, ?, ?)",
            array($prenom, $pseudo, $date_de_naissance, $email, $mdp, $date_creation_compte));
            
            header('Location: ../view/tweeter.php');
            exit;
        }
    }
}

?>
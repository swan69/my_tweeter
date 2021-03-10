<!DOCTYPE html>
<html lang="fr">

<?php
include_once("../db/connexiondb.php");
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tweet Académie | Index</title>
  <link type="text/css" rel="stylesheet" href="../css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
  
  <nav>
    <form id="login">
      <div class="row">
        <br>
      </div>
      <div class="row">
        <div class="col-2 offset-6">
          <input type="email" class="form-control" placeholder="Votre email">
        </div>
        <div class="col-2">
          <input type="password" class="form-control" placeholder="Votre mot de passe">
        </div>
        <div class="col-2">
          <button type="submit" class="btn btn-primary btn-md">Se connecter</button>
        </div>
      </div>
    </form>
  </nav>
  <div class="align-items-center">
    <img id="slogo" src="../assets/social-img.png">
  </div>
</body>
<div id="logreg">
  <a href="connexion.php"><button id="connexion" class="btn-grad" type="button">
      Connexion
    </button></a>
  <a href="inscription.php"><button id="inscription" class="btn-grad" type="button">
      Insription
    </button></a>
</div>

<div id="text">
<h1>Nous n'attendons <br>plus que vous !</h1>
<h2>Rejoignez My Twitter dès maintenant.</h2>
</div>
</html>
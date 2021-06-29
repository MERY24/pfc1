<?php
session_start();
?>
<head>
  <meta charset="UTF-8">
  <title>Créer Un Compte</title>
  <link rel="stylesheet" href="./css/create.css">
</head>

<header class="main-header">
  <nav>
    <img  src="./image/exam.png">
    <ul>
      <li><a href="#">Acceuil</a></li>
      <li><a href="#">Affichage</a></li>
      <li><a href="#">Planning</a></li>
    </ul>
  </nav>
</header>
<div class="container">
  <h2>Bienvenu sur le site officiel des examens de l'université de Béjaia</h2>
  
  <form action="traiteinscription.php" method="POST" class="create_form" onsubmit="return validate()">

    <div class="radio-container">
      <input type="radio" id="test1" name="radio-group" value="etud" checked>
      <label for="test1">Etudiant</label>
      <input type="radio" id="test2" name="radio-group" value="ens">
      <label for="test2">Enseignant</label>
    </div>




    <input type="text" name="nom" placeholder="Nom">

    <input type="text" name="prenom" placeholder="Prénom">

    <input autocomplete="off" type="text" name="email" placeholder="Email">

       <input type="text" name="spec" placeholder="Spécialité/Filiére">

    <input type="text" name="loginid" placeholder="Matricule Universitaire">

    <input type="password" name="pass" placeholder="Mot de Passe">

    <input type="password" name="password-confirm" placeholder="Confirmer Votre Mot de Passe">

    <button type="submit">Créer</button>

  </form>

</div>
</div>






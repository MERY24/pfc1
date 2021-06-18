<?php
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>LOGIN</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css/style.css" rel="stylesheet" type="text/css">


</head>

<body>


<header class="main-header">
    <nav>
        <img  src="../img/exam.png">
        <ul>
            <li><a href="#">Acceuil</a></li>
            <li><a href="#">Affichage</a></li>
            <li><a href="#">Planning</a></li>
        </ul>
    </nav>
</header>
<div class="container">
    <h2>Bienvenu sur le site officiel des examens de l'université de Béjaia</h2>

    <form name="form1" action="login.php" method="POST" class="login_form">

        <input class="form-control" name="loginid" type="text" id="loginid" placeholder="Matricule Universitaire">
        <div id="email_error">Please fill up your mat</div>
        <input class="form-control" name="pass" type="password" id="pass" placeholder="Mot de Passe">
        <div id="pass_error">Please fill up your Password</div>
        <button class="btn btn-primary" name="submit" type="submit" id="submit" value="Login">Connexion</button>
        <div class="newUser"> Nouvel utilsateur ?<a href="../Create/Create.php">Créer un compte</a></div>
    </form>
</div>
<script src="../js/valid.js"></script>
</body>
</html>

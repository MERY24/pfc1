

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>compte</title>
</head>
<body>


<div class="man">
    <div class="left">
    </div>
    <div class="right">
        <p class="cmpTitle">Edit Profil</p>
        <form  action="" method="post">
            <div class="info">
                <input class="input" type="text" name="loginid" placeholder="id" >
                <input class="input" type="text" name="nom" placeholder="Nom" >

                <input class="input" type="text" name="prénom" placeholder="Prénom" >

                <input class="input" type="email" name="mail" placeholder="Modifier E-mail" required>

                <input class="input" type="password" name="pass" placeholder="Nouveau Mot de Passe" required>

                <input class="input" type="password" name="password-confirm" placeholder="Confirmez Votre Nouveau Mot de Passe" required>

                <button class="btn" type="submit" name="save">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
<?php
$connection= mysqli_connect("localhost" , "root" ,"");
$con=mysqli_select_db($connection,'quiz');
if(isset($_POST['save'])) {
    $loginid=$_POST['loginid'];
    $query = "UPDATE `mst_user` SET pass='$_POST[pass]',nom='$_POST[nom]',prenom='$_POST[prénom]',email='$_POST[mail]' where loginMat = $_POST[loginid] ";
    $query_run= mysqli_query($connection,$query);
    if(query_run)
    {
        echo'<script type="text/javascript"> alert("Data updated")</script>';
    } else{
        echo'<script type="text/javascript"> alert("Data not updated")</script>';

    }

}
?>
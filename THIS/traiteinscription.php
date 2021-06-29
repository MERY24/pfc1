<?php
require("connexion.php");

try {


	if ($_POST['radio-group'] == "etud") {
		$con->exec("INSERT into mst_user(loginMat,pass,nom,prenom,email,specialite) values('" . $_POST['lid'] . "','" . $_POST['pass'] . "','" . $_POST['nom'] . "','" . $_POST['prenom'] . "','" . $_POST['email'] . "','" . $_POST['spec'] . "')");
		echo "<script>window.location='startpage.php'</script>";
	} else {

		$con->exec("INSERT into mst_admin(loginid,pass,nom,prenom,email,specialite) values('" . $_POST['lid'] . "','" . $_POST['pass'] . "','" . $_POST['nom'] . "','" . $_POST['prenom'] . "','" . $_POST['email'] . "','" . $_POST['spec'] . "')");
		echo "<script>window.location='startpage.php'</script>";
	}

}  catch (Exception $e) {
			echo "Echec ajout ".$e -> getMessage();
		}

		?>



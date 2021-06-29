<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New user signup </title>
<link rel="stylesheet" href="create.css"/>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.prenom.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }

  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link href="passer.css" rel="stylesheet" type="text/css">
</head>

<?php
session_start();
include("header.php");
?>
<head>
    <meta charset="UTF-8">
    <title>Créer Un Compte</title>
    <link rel="stylesheet" href="./css/create.css">
</head>


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

        <input type="text" name="lid" placeholder="Matricule Universitaire">

        <input type="password" name="pass" placeholder="Mot de Passe">

        <input type="password" name="cpass" placeholder="Confirmer Votre Mot de Passe">

        <button type="submit">Créer</button>

    </form>
    <script src="validCreate.js"></script>
</div>
</div>

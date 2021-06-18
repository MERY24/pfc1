<?php
session_start();
require("../database.php");

error_reporting(1);
?>
<link href="../css/testadd.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
<?php

extract($_POST);


echo "<h1 class='text-center bg-primary'>ADD SUBJECT</h1>";

echo "<table width=100%>";
echo "<tr><td align=center></table>";
if($submit=='submit' || strlen($subname)>0 )
{
$rs=mysqli_query($con,"select * from mst_subject where sub_name='$subname'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Subject is Already Exists</div>";
	exit;
}
mysqli_query($con,"insert into mst_subject(sub_name) values ('$subname')",$cn) or die(mysqli_error());
echo "<p align=center>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
return false;
}
return true;
}
</script>
<div class="main">
<div class="ajouter" >
<title>Ajouter Module</title>
<form name="form1" method="post" onSubmit="return check();">
  <table class="table table-borderless">
    <tr>
      <td width="25%" height="32"><div style="display: flex;justify-content: center;color: cornsilk;"><strong>Enter Subject Name </strong></div></td>
      <td width="55%" height="5">   <input style="display: flex;justify-content: center;" class="form-control" name="subname" placeholder="Exp: Base De Données" type="text" id="subname">
      <td width="20%" height="32">
      <tr>
        <td height="26"> </td>
        <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td style="display: flex;justify-content: center;"><input class="btn btn-dark"id="button" type="submit" name="submit" value="    Ajouter    " ></td>
    </tr>
    <tr>
        <td height="26"> </td>
        <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
        <td height="26"> </td>
        <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</div>
</div>
<?php
require_once('connexion.php');
if(isset($_GET["email"])&&isset($_GET["password"]))//pour valider que les champs envoyés
{
	$email=$_GET["email"];
	$pass=$_GET["password"];
	$req="select id from utilisateurs where email='".$email."'and password='".$pass."'";
	$res=mysqli_query($con,$req);
    $num_row=mysqli_num_rows($res);
    if($num_row)
    {
         header("location:AjtPatient.php");
    }
  else
    {
    	header("location:login.php");
    }
}?>

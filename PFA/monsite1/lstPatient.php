

<html>
<head>
<title>Liste des Patients</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
</head>
<body>
	<div class="black">
		<header class="header">
			<a class="header-logo"> Acquisition de Signal EMG</a>
			<b  class="header-menu" >

	            <a href="acceuil.php" target=""> Accueil </a>
	            <a href="login.php" target="">Se connecter </a>
	            <a href="document.php" target="">Documentation</a>
				<a href=" lstPatient.php" target=""> Liste des Patients</a>
				
				
			</b>
		</header>
	</div>
	<style>
	.header{
	width: 100%;
	height:60px;
	line-height: 70px;
	background-color:#3498db;
	position: fixed;
	top: 0px;

}
.header .header-logo{
color:  #ff0080;
font-family: 'Montserrat', sans-serif;
float: left;
margin-left:30px;

}
.header  .header-menu{
	float: right;
	margin-left: 20px;
}
.header .header-menu a{
margin-right: 60px;
	color: #ecf0f1;
}
.header .header-menu a:hover{
	color: #e74c3c;
}
h2{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	color: #EF1a11;
	font-size: 25px;
	text-decoration: underline;
	
}
body{
	margin:0;
	padding:0;
	background: #DDD;
}
</style>
<div align="center">
<h2>Liste des Patients</h2>
<hr width="50%" size="2">
</div>
<?php
//connexion
$con=mysqli_connect("localhost","root","*imenimen*guerfi*");
$db=mysqli_select_db($con,"inscrit_patient");
?>
<?php
//Liste des étudiants dont le sexe est Homme
$requete_H="select * from patient  order by nom,prenom";
$resultat_H=mysqli_query($con,$requete_H);
if (mysqli_num_rows($resultat_H)<>0){
?>
<div align="center">
<br>
<table border="1" cellpaccing="2" cellpadding="0">
<tr>
<td><b>N C.I.N</b></td>
<td><b>Nom</b></td>
<td><b>Prenom</b></td>
<td><b>Age</b></td>
<td><b>Sexe</b></td>
<td><b>Suppr</b></td>
</tr>
<?php
while ($enreg_H=mysqli_fetch_array($resultat_H)){
?>
<tr>
<td><?php echo $enreg_H["cin"];?></td>
<td><?php echo $enreg_H["nom"];?></td>
<td><?php echo $enreg_H["prenom"];?></td>
<td><?php echo $enreg_H["age"];?></td>
<td><?php echo $enreg_H["sexe"];?></td>
<td>
<a href="suppr_Patient.php?reference=
<?php echo $enreg_H["cin"];?>
">Supprimer</a>
</td>
</tr>
<?php
}
?>
</table>
<br><br><a href="AjtPatient.php">Retour</a>
</div>
<?php
}else{
?>
<div align="Left">
<b> Pour le moment, il n'y a aucun Patient enregistré!!!</b>
<hr width="50%" size="2">
<br><br><a href="AjtPatient.php">Retour</a>
</div>
<?php
}
?>
<?php

?>
</body>
</html>
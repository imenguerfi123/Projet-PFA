<html>
<head>
<title>Saisie d'un nouveau Patient</title>
<meta charset="utf-8"/>

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
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
 .red{
margin-top: 60px;
font-family: 'Montserrat ', sans-serif;
}

.red .red-img{
	width: 150px;
	height: 120px;
}
body{
	margin:0;
	padding:0;
	background: #DDD;
}
	
.Formulaire{

}
.Formulaire input[type="text"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	color: #000;
	font-weight: bold;
}
h2{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	color: #EF1a11;
	font-size: 25px;
	text-decoration: underline;
}
.Formulaire hr {
color:#EF1a11;
}
.Formulaire input[type="submit"], input[type="reset"]
{
	outline: none;
	height: 40px;
	background: #1c8adb;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}
.Formulaire input[type="submit"]:hover
{
	cursor: :pointer;
	background:  #222279;
	color: #000;
}
.Formulaire input[type="reset"]:hover
{
	cursor: :pointer;
	background:  #222279;
	color: #000;
}
.Formul{
	color: #EF1a11;
	font-size: 22px;
    text-align: center;
    top: 150px;
    position: absolute;
    margin-left:400px;
    font-weight: bold;
    padding: 0 0 20px;
}
.Formul1{
	color: #EF1a11;
	font-size: 22px;
    text-align: center;
    top: 150px;
    position: absolute;
    margin-left:400px;
    font-weight: bold;
    padding: 0 0 20px;
}	
	</style>
</head>
<body>
	<div class="black">
		<header class="header">
			<a class="header-logo"> Acquisition de Signal EMG</a>
			<b  class="header-menu" >

	            <a href="acceuil.php" target=""> Accueil </a>
	            <a href="login.php" target="">Se connecter </a>
	            <a href="document.php" target="">Documentation</a>
				<a href=" lstPatient" target=""> Liste des Patients</a>
				
				
			</b>
		</header>
	</div>


<?php
if (!empty($_POST['nom']) AND !empty($_POST['prenom'])
AND !empty($_POST['cin']) AND !empty($_POST['age'])) {
//connexion
$con=mysqli_connect("localhost","root","*imenimen*guerfi*");
$db=mysqli_select_db($con,"inscrit_patient");
//insertion du nouveau Patient
$requete1="select * from patient where cin='".$_POST['cin']."'";
$resultat=mysqli_query($con,$requete1);
if ($enreg=mysqli_fetch_array($resultat)){
//l'étudiant est déjà existant
?>
<div class="Formul" align="center">
<br>Le Patient <b><?php echo($_POST['nom']." ".$_POST['prenom']);?></b>
<br>est deja existant!!!
<br><br><a href="AjtPatient.php">Retour</a>
<br>
<br><a href="http://192.168.8.102">Suivant</a>
<br>
</div>
<?php
}else {
//insertion du nouveau Patient
$date = date("Y-m-d H:i:s");
/*$requete2="insert into patient
values('".$_POST['idpatient']."','".$_POST['nom']."','".$_POST['prenom']."',
'".$_POST['cin']."')";*/
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$cin=$_POST['cin'];
$age=$_POST['age'];
$sexe=$_POST['sexe'];
$requete2=mysqli_query($con,"insert into patient values('id','$nom','$prenom','$cin','$age','$sexe','$date')");
mysqli_query($con,$requete2);
?>
<div class="Formul"align="center">
<br>Merci, le Patient
<b><?php echo($_POST['nom']." ".$_POST['prenom']);?></b>
<br>est bien ete enregisre
<br><br><a href="AjtPatient.php">Retour</a>
<br>
<br><a href="http://192.168.8.102">Suivant</a>
<br>
</div>
<?php
}//fin du test d'existance
}else{?>
<div class="Formulaire" align="center">
<div class="red">
<img src="img4.jpg" Class="red-img">
<h2>Saisie d'un Nouveau Patient</h2>
<hr size="2" width="50%">
<!--Ici c'est le Formulaire-->
<form name="SaisiePatient" method="POST" action="AjtPatient.php">
<table border="1">
<tr>
<td width="35%">Nom :</td>
<td width="65%"><input type="text" name="nom" value=""
size="25" maxlength="25"></td>
</tr>
<tr>
<td width="35%">Prenom :</td>
<td width="65%"><input type="text" name="prenom"
value="" size="25" maxlength="25"></td>
</tr>
<tr>
<td width="35%">N.C.I.N :</td>
<td width="65%"><input type="text" name="cin"
value="" size="8" maxlength="8"></td>
</tr>
<tr>
<td width="35%">Age :</td>
<td width="65%"><input type="text" name="age"
value="" size="8" maxlength="8"></td>
</tr>
<tr>
<td width="35%">Sexe :</td>
<td width="65%">
<select name="sexe">
<option value="H">Homme</option>
<option value="F">Femme</option>
</select>
</td>
</tr>
</table>
<br>
<input type="submit" value="Valider">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Annuler">
</form>
<a href="lstPatient.php">Liste des Patient</a>
<br><a href="http://192.168.8.102">Passer directement vers  l'acquisition</a>
</div>
<?php
}
?>
</body>
</html>
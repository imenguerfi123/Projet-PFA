<html>
<head>
<title>Suppression d'un Patient</title>
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
body{
	margin:0;
	padding:0;
	background: #DDD;
}
.msg{
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
<?php
//connexion
$con=mysqli_connect("localhost","root","*imenimen*guerfi*");
$db=mysqli_select_db($con,"inscrit_patient");
//suppression de Patient
$requete="delete from patient where cin='".$_GET['reference']."'";
mysqli_query($con,$requete);
?>
<div class="msg" align="center">
<br>Merci, le patient au n C.I.N <b><?php echo($_GET['reference']);?></b>
<br>est bien ete supprime
<br><br><a href="lstPatient.php">Retour</a>
</div>
</body>
</html>
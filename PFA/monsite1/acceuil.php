<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title> EMG</title>
	<meta charset="utf-8">

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
	width: 110%;
	height: 600px;
}

.red .red-text{
color: #EF1a11;
text-align: center;
top: 250px;
position: absolute;
margin-left:300px;	
}
.subtitle{
color: #ff0080;
}
.red .red-text .button{
	width: 200px;
	height: 50px;
	font-size: x-large;
    background: transparent;
	color: #000080;
	font-weight: bold;

font-family: 'Montserrat ', sans-serif;

}
.espace .colonne {
	column-count: 3;
	padding-top: 20px;
	margin-left:50px;
}		
	</style>
	</head>
	</html>
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
<div class="black">
	<div class="red">
	<img src="img3.jpeg" Class="red-img">
	<div class="red-text">
		<h1 class="title" >Bienvenue sur La plateforme de traitement de Signal EMG</h1>
		<h2 class="subtitle">Open plateforme</h2>

		<p class="control2">
    <input class="button" type="submit" value="Entrer" onclick="self.location.href='login.php'">
     
  </p>
	
</body>
</body>
</html>




<html>
<head>
<title>Modification d'un Patient</title>
</head>
<body>
<?php
//connexion
$con=mysqli_connect("localhost","root","*imenimen*guerfi*");
$db=mysqli_select_db($con,"inscrit_patient");

if (!empty($_POST['nom']) AND !empty($_POST['prenom'])
AND !empty($_POST['cin']))
{
//Info. sur patient
$requete1="select * from patient where cin='".$_GET['reference']."'";
$resultat=mysqli_query($con,$requete1);
if ($enreg=mysqli_fetch_array($resultat)){
//Remplissage des renseignements sur patient en question
?>
<div align="center">
<h3>Modifier un patient</h3>
<hr size="2" width="50%">
<form name="ModifierPatient" method="POST" action="modif_Patient.php">
<table border="1">
<tr>
<td width="35%">Nom :</td>
<td width="65%"><input type="text" name="nom"
value="<?php echo $enreg['nom'];?>"
size="25" maxlength="25">
</td>
</tr>
<tr>
<td width="35%">Prenom :</td>
<td width="65%"><input type="text" name="prenom"
value="<?php echo $enreg['prenom'];?>"
size="25" maxlength="25">
</td>
</tr>

<tr>
<td width="35%">Age :</td>
<td width="65%"><input type="text" name="age"
value="<?php echo $enreg['age'];?>"
size="25" maxlength="25">
</td>
</tr>
<tr>
<td width="35%">Sexe :</td>
<td width="65%">
<select name="sexe">
<?php if (strcmp($enreg['sexe'],"H")==0) {?>
<option value="H" selected>Homme</option>
<?php }else{?>
<option value="H">Homme</option>
<?php }?>
<?php if (strcmp($enreg['sexe'],"F")==0) {?>
<option value="F" selected>Femme</option>
<?php }else{?>
<option value="F">Femme</option>
<?php }?>
</select>
</td>
</tr>
</table>
<input type="hidden" name="cin" value="<?php echo $enreg['cin'];?>">
<br>
<input type="submit" value="Valider">&nbsp;&nbsp;
<input type="reset" value="Annuler">
</form>
<a href="lstPatient.php">Liste des patients</a>
</div>
<?php
} ?>
<?php
}else {
//modification de Patient???
$requete2="Update patient set nom='".$_POST['nom']."',prenom='".$_POST['prenom']."',age='".$_POST['age'].
"',sexe='".$_POST['sexe']."'where cin='".$_POST['cin']."'";
mysqli_query($con,$requete2);
?>
<div align="center">
<br>Merci, le patient <b><?php echo($_POST['nom']." ".$_POST['prenom']);?></b>
<br>est bien ete enregisre
<br><br><a href="AjtPatient.php">Retour</a>
</div>
<?php
}
?>
</body>
</html>
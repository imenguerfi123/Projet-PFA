<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title> Documentation Sur le Signal EMG</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
<div class="titre1" align="center">
<h2>Documentation Sur le Signal EMG</h2>
<h3 class="tit2" align="left">Définition</h3>
<h4 class="para" align="left"> L’électromyogramme (EMG) est un signal physiologique de nature électrique qui peut être recueilli sur le corps humain (muscles) au moyen d'électrodes appropriées : capteurs de surface (simplement posés sur le muscle observé) ou de profondeur (aiguilles disposant de deux capteurs ou plus à son extrémité). Ce fameux signal présente une variabilité aléatoire en fonction de plusieurs paramètres : l'âge, le sexe, la taille du muscle et l'état physiopathologique du sujet.
 Le traitement numérique dont bénéficie ce signal, permet de mettre à la disposition du médecin des informations qui aident ce dernier à établir un diagnostic rapide.
Parmi les techniques de traitement des signaux électromyogrammes (EMGs) les plus anciennes et qui ont été largement utilisées pour faciliter son analyse et extraire les paramètres pertinents, dans le domaine temporel on trouve :
</h4>
<h3 class="tit2" align="left">1.1. Un électromyogramme rectifié <a href="#Figure 1 ">Figure 1</a> </h3>
<h4 class="para" align="left">Cette étape consiste à rendre positive les différences potentielles négatives (obtenues par les électrodes) en conservant leurs amplitudes, et en calculant la valeur absolue du signal EMG brute. Sachant que la plupart des potentiels biologiques ont un aspect presque symétrique par rapport à la ligne de base, et par conséquence si on veut intégrer un signal non rectifié sur un temps relativement long on aura des valeurs qui tendent vers zéro (des valeurs faibles). Donc la rectification du signal EMG nous aide pour l’intégration.</h4>
<div class="ima" align="center">
<img src="a.png" alt="this is html image"id="Figure 1">
<h3>(a) </h3>
<img src="b.png" alt="this is html image"id="Figure 1">
<h3>(b)</h3>
<h3>Figure1 : (a) Un signal EMG original, (b) EMG rectifié.</h3>
<h3 class="tit2" align="left">1.2. Un électromyogramme normalisé en amplitude </h3>
<h4 class="para" align="left">L’amplitude du signal EMG varie en fonction du placement de l’électrode et de la conductivité de la peau, variable d’un sujet à l’autre. Pour pouvoir comparer l’activité de l’EMG de différents sujets dans différentes conditions de recueil, on normalise généralement l’EMG, par exemple en le divisant par l’amplitude maximale obtenue lors de contraction maximale volontaire. On obtient ainsi un EMG normalisé en amplitude </h4>
<h3 class="tit2" align="left">1.3. Un électromyogramme moyen (ou intégré)</h3>
<h4 class="para" align="left">Sur un intervalle de temps Pour quantifier le niveau moyen d’excitation sur un intervalle de temps fixé, on utilise souvent la moyenne (ou l’intégration) du signal EMG rectifié. Ces deux paramètres peuvent diminuer la variabilité due à l’excitation instantanée des fibres musculaires. </h4>
<h3 class="tit2" align="left">1.4.  Un électromyogramme lissé : </h3>
<h4 class="para" align="left">Pour diminuer la variance et le bruit haute fréquence du signal EMG rectifié (bruit de digitalisation, d’échantillonnage, intrinsèque), ce signal est lissé par un filtre passe bas ou une moyenne glissante. Cet outil peut permettre d’obtenir par exemple une meilleure détection du début et de la fin d’une bouffée </h4>
</div>
<br><a href="https://www.youtube.com/watch?v=d-Xl-tb95H8">Pour Plus des détailles</a>
<br><br><a href="AjtPatient.php">Retour</a>
<br><br><a href="acceuil.php">Accueil</a>
<br>

</body>
</html>

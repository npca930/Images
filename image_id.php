<?php


// 
// Images;
// voir en action : images.nicolaspierre.name
//


// Renvoie une image spécifique (Dossier/[Id].jpg);


include("./configuration.php");

$LargeurSortie = $_GET['largeur'];
$HauteurSortie = $_GET['hauteur'];


// Intervalles des dimensions : 10-3500
$LargeurSortie = min($LargeurSortie,3500);
$LargeurSortie = max($LargeurSortie,10);

if (empty($HauteurSortie)) $HauteurSortie = floor(round(($LargeurSortie / 1.61803398875)));
$HauteurSortie = min($HauteurSortie,3500);
$HauteurSortie = max($HauteurSortie,10);


$rImage = imagecreatetruecolor($LargeurSortie,$HauteurSortie);

// Si l'image n'existe pas, le programme renvoie une image blanche
$Id = $_GET['id'];
if (file_exists($Dossier . $Id . ".jpg")) {
	$ImageUrl = $Dossier . $Id . ".jpg";
	list($LargeurOrigine,$HauteurOrigine) = getimagesize($ImageUrl);
	// Redimensionne l'image d'origine aux dimensions demandées (peut écraser l'image), et l'envoie
	imagecopyresampled($rImage,imagecreatefromjpeg($ImageUrl),0,0,0,0,$LargeurSortie,$HauteurSortie,$LargeurOrigine,$HauteurOrigine);
	}


header('Content-type: image/png');
imagepng($rImage);
imagedestroy($rImage);



?>
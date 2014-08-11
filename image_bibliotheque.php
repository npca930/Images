<?php


// 
// Images;
// voir en action : images.nicolaspierre.name
//


// Renvoie une image aléatoire, aux dimensions $LargeurSortie/$HauteurSortie


include("./configuration.php");

$LargeurSortie = $_GET['largeur'];
$HauteurSortie = $_GET['hauteur'];


// Intervalles des dimensions : 10-3500
$LargeurSortie = min($LargeurSortie,3500);
$LargeurSortie = max($LargeurSortie,10);

if (empty($HauteurSortie)) $HauteurSortie = floor(round(($LargeurSortie / 1.61803398875)));
$HauteurSortie = min($HauteurSortie,3500);
$HauteurSortie = max($HauteurSortie,10);


// Compte le nombre d'images et enregistre leur nom
// (Cette étape pourrait être supprimée si les images ont des noms incrémentables (1, 2, 3 ...)
$Bibliotheque = array();
$Dir = opendir($Dossier);
while ($Image = readdir($Dir)) {
	if (is_file($Dossier . $Image)) $Bibliotheque[] = $Image;
	}
closedir($Dir);
sort($Bibliotheque);
$CountBibliotheque = count($Bibliotheque);


// Format : l'image d'origine sera du même format que l'image de sortie (portrait / paysage)
$TypeSortie = "paysage";
if ($LargeurSortie < $HauteurSortie) $TypeSortie = "portrait";
$TypeOrigine = null;

do {

	$Id = mt_rand(0,$CountBibliotheque);
	$ImageUrl = $Dossier . $Bibliotheque[$Id];
	
	if (file_exists($ImageUrl)) {
		list($LargeurOrigine,$HauteurOrigine) = getimagesize($ImageUrl);
		if ($LargeurOrigine < $HauteurOrigine) $TypeOrigine = "portrait"; else $TypeOrigine = "paysage";
		}

	} while ($TypeSortie != $TypeOrigine);

	
// Redimensionne l'image d'origine aux dimensions demandées (peut écraser un peu l'image), et l'envoie
$rImage = imagecreatetruecolor($LargeurSortie,$HauteurSortie);
imagecopyresampled($rImage,imagecreatefromjpeg($ImageUrl),0,0,0,0,$LargeurSortie,$HauteurSortie,$LargeurOrigine,$HauteurOrigine);
header('Content-type: image/png');
imagepng($rImage);
imagedestroy($rImage);






?>
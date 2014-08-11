
<div class="section header"><div>
<h1>Images; Galerie &amp; Licence</h1>
<h2><a href="./">&laquo; retour</a></h2>

</div></div>






<div class="section galerie"><div>


<h3>Source : XX</h3>
<p>Licence YY</p>



<div class="end"></div>

<?php


// Actuellement, j'ai deux séries d'images, toutes jpeg
// 1, 2, 3 ... venant d'une seule source
// et 10001, 10002, 10003 ... venant chacune d'une source différente




for ($n = 1; file_exists($Dossier . $n . ".jpg"); $n++) {
	echo "<div class='image'><div><a href='/i" . $n . "/200' target='_blank'><img src='/i" . $n . "/200' /></a></div></div>";
	}

?>

<div class="end"></div>


<h3>Sources diverses (le lien est sur chaque image)</h3>



<div class="end"></div>



<?php




$Source[10001] = "";
$Source[10002] = "";
// ...




for ($n = 10001; file_exists($Dossier . $n . ".jpg"); $n++) {
	echo "<div class='image'><div><a href='" . $Source[$n] . "' target='_blank'><img src='/i" . $n . "/200' /></a></div></div>";
	}







?>


<div class="end"></div>

</div>
</div>



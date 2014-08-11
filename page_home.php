
<div class="section header"><div>
<h1>Images;</h1>
<h2>Une s&eacute;lection d'images al&eacute;atoires (de nourriture) aux dimensions personnalisables</h2>

</div></div>

<div class="section generateur"><div>


<h3>Dimensions (en pixel)</h3>
<form action="/" method="post">

<input class="valeur" type="text" name="x" placeholder="largeur" />

<input class="valeur" type="text" name="y" placeholder="hauteur" />

<input class="bouton" type="submit" value="G&eacute;n&eacute;rer" />


</form>


<?php

// print_r($_SERVER);

$x = $_POST['x'];
$y = $_POST['y'];

if (!empty($x) && is_numeric($x)) {

	echo "<div class='genere'>";
	

	if (!empty($y) || is_numeric($y)) {

	echo "<p>" . $Domaine . $x . "x" . $y . "</p>";
		echo "<a href='/" . $x . "x" . $y . "'><img src='/" . $x . "x" . $y . "' /></a>";
		}
	else {
	echo "<p>" . $Domaine . $x . "</p>";
		echo "<a href='/" . $x . "'><img src='/" . $x . "' /></a>";
	
		}
		
	echo "</div>";
		
	}

?>

</div></div>




<div class="section explications">




<div class="col"><div>
<h3>Utilisation</h3>
<p><a href="/800x500" target="_blank"><?php echo $Domaine; ?>800x500</a> donne une image de largeur 800px et de hauteur 500px</p>
<p><a href="/600" target="_blank"><?php echo $Domaine; ?>600</a> donne une image de largeur 600px et &agrave; la hauteur calcul&eacute;e de 371px, aux proportions du nombre d'or (1.618x1)</p>
</div></div>


<div class="col"><div>
<h3>Galerie &amp; Licence</h3>
<p>La galerie contient un certain nombre d'images, qui viennent de plusieurs sources diff&eacute;rentes</p>
<p><a href="./galerie.html">Tout voir</a></p>
</div></div>


<div class="col"><div>
<h3>Open Source</h3>
<p>Tout le code est sur Github (pas les images) <a href="https://github.com/npca930/Images" target="_blank">npca930</a></p>
</div></div>



<div class="end"></div>

</div>



<!doctype html>
<html>
<head>
<title>Images; par Nicolas-Pierre</title>
<link rel="stylesheet" href="./feuille.css">
<meta name="description" content="Une s&eacute;lection d'images al&eacute;atoires aux dimensions personnalisables" />
</head>
<body>


<?php


include("./configuration.php");

$page = "home";
if (!empty($_GET['page']) && file_exists("page_" . $_GET['page'] . ".php")) $page = $_GET['page'];


include("page_" . $page . ".php");


?>


<div class="section footer"><div>
<p>Images; par <a href="http://www.nicolaspierre.name/">Nicolas-Pierre</a>. Des suggestions ? <a href="http://twitter.com/npca930">@npca930</a></p>
</div></div>



</body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C/DTD XTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr">
<head>
<meta http-equiv="content-type" CONTENT="text/html ; charset=UTF-8">
<title>Environnement PHP super-global</title>
</head>
<body>
<h1>Affichage de l'environnement PHP super-global</h1>
<?php
  echo "<h2>OS serveur</h2>\n" ; 
  echo php_uname('a') . '<br />' ; 
  echo PHP_OS . '<br />' ; 
  echo "<h2>Environnement GET</h2>\n" ; 
  if (count($_GET) > 0) {
	foreach ($_GET as $parametre => $valeur) 
	{
		echo $parametre . " = " . $valeur . "<br />" ; 
	}
  }
  else {
  	echo "<strong>Pas d'environnement GET transmis</strong>" ;
  }
  echo "<h2>Environnement POST</h2>\n" ; 
  if (count($_POST) > 0) {
	foreach ($_POST as $parametre => $valeur) 
	{
		echo $parametre . " = " . $valeur . "<br />" ; 
	}
  }
  else {
  	echo "<strong>Pas d'environnement POST transmis</strong>" ;
  }
  echo "<h2>Environnement SERVER</h2>\n" ; 
  if (count($_SERVER) > 0) {
	foreach ($_SERVER as $parametre => $valeur) 
	{
		echo $parametre . " = " . $valeur . "<br />" ; 
	}
  }
  else {
  	echo "<strong>Pas d'environnement SERVER</strong>" ;
  }
  echo "<h2>Environnement ENV</h2>\n" ; 
  if (count($_ENV) > 0) {
	foreach ($_ENV as $parametre => $valeur) 
	{
		echo $parametre . " = " . $valeur . "<br />" ; 
	}
  }
  else {
  	echo "<strong>Pas d'environnement ENV</strong>" ;
  }
  echo "<h2>Environnement SESSION</h2>\n" ;
  if (count($_SESSION) > 0) {
	foreach ($_SESSION as $parametre => $valeur) 
	{
		echo $parametre . " = " . $valeur . "<br />" ; 
	}
  }
  else {
  	echo "<strong>Pas d'environnement SESSION</strong>" ;
  }
  echo "<h2>Environnement COOKIE</h2>\n" ;
  if (count($_COOKIE) > 0) {
	foreach ($_COOKIE as $parametre => $valeur) 
	{
		echo $parametre . " = " . $valeur . "<br />" ; 
	}
  }
  else {
  	echo "<strong>Pas d'environnement COOKIE</strong>" ;
  }
  echo "<h2>Environnement FILES</h2>\n" ;
  if (count($_FILES) > 0) {
	foreach ($_FILES as $parametre => $valeur) 
	{
		echo $parametre . " = " . $valeur . "<br />" ; 
	}
  }
  else {
  	echo "<strong>Pas d'environnement FILES</strong>" ;
  }
  
  /*
  */
?>
</body>
</html>

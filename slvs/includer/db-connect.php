<?php 
$bdd = new PDO('mysql:host=localhost;dbname=slvs_site', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$bdd->exec("SET CHARACTER SET utf8"); 
?>
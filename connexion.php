<?php
$serveur='localhost';
$login='root';
$pass='';
$connexion=new PDO("mysql:host=$serveur;dbname=commerce",$login,$pass);
$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>
<?php
session_start();
if(isset($_SESSION['panier'])){
    $panier=$_SESSION['panier'];//s'il existe je le r�cup�re
    
}else
{
    $panier=array();//panier n'existe pas, on le cr�e
   
}
$index=count($panier);//stocker dans le panier ,recuperer le nb des elements du panier
$panier[$index]['ref']=$_POST['ref'];// aller a la derniere ligne+colonne ref
$panier[$index]['prix']=$_POST['prix'];
$panier[$index]['designation']=$_POST['designation'];
$panier[$index]['quantite']=$_POST['quantite'];
$_SESSION['panier']=$panier;//ajouter � la session
header("Location:index.php?panier=1");//afficher le panier
?>
<?php
session_start();
//unset($_SESSION['panier']);
$index=$_GET['index'];//recupere l index
$panier=$_SESSION['panier'];//le panier existe dans la session
unset($panier[$index]);   //supp l'élément du panier
$_SESSION['panier']=$panier;// stocker le nouveau tab
header("Location:index.php?panier=1");//afficher le panier
?>
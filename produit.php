<?php
include'connexion.php';
?>
<?php
if(isset($_GET['idCat'])){
  $idC= $_GET['idCat'];
  $req=$connexion->prepare("SELECT * FROM produits where code_cat=$idC");
}else if(isset($_GET['promo'])) {
  $req=$connexion->prepare("SELECT * FROM produits where promotion=1");  

}
else if (isset($_POST['motCle'])){
    $mc=$_POST['motCle'];
    $req=$connexion->prepare("SELECT * FROM produits where designation like '%$mc%'");
}
else{
    $req=$connexion->prepare("SELECT * FROM produits where selectionne=1");
    // sinon afficher les produits séléctionnés 
}
  $req->execute();

?>
<?php while($res=$req->fetch()){?>
<div class="produit">
 <table>
    <tr>
        <td>Ref:</td>
        <td><?php echo ($res['ref_produit']);?></td>
        <td rowspan="3">
        <img src="images/<?php echo ($res['photo'])?>"/>
        </td>
        
    </tr>
    <tr>
        <td>Desgnation:</td>
        <td>
            <?php echo ($res['designation']);?>
        </td>
    </tr>
    <tr>
        <td>Prix:</td>
        <td><?php echo ($res['prix']);?></td>
    </tr>
     <tr>
        <td>Quantité:</td>
        <td><?php echo ($res['quantite']);?></td>
    </tr>
     <tr>
        <td colspan="3">
            <form method="POST" action="addCaddie.php">
            <input type="hidden" name="ref" value="<?php echo ($res['ref_produit']);?>"/>
            <input type="hidden" name="designation" value="<?php echo ($res['designation']);?>"/>
            <input type="hidden" name="prix" value="<?php echo ($res['prix']);?>"/>
            <input type="text" name="quantite" size="5" value="1"/>
            <input type="image" src="images/panier.jpg" value="submit">
            </form>
        </td>
            </tr>
 </table>   
</div>
<?php } ?>
<br style="clear:both"/>
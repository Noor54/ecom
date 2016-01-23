<?php
include'connexion.php';
?>
<?php
$req=$connexion->prepare("SELECT * FROM categories");
$req->execute();
?>
<table border="0">
    <?php while($res=$req->fetch()){?>
        
     <tr>
        <td>
        <a href="index.php?idCat=<?php echo($res['code_cat'])?>">
        <?php echo($res['nom_cat'])?></a></td>
     </tr>   
        
    <?php } ?>
</table>
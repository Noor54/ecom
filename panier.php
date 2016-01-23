<?php
//unset($_SESSION['panier']);
$panier=$_SESSION['panier'];//recupere le panier à partir de la session//l afficher dans un tab
?>
<table border="1">
    <tr>
        <th>REF</th><th>DES</th><th>PRIX<th>QUANTITE</th>
    </tr>
    <?php
     $total=0;
    for($i=0;$i<count($panier);$i++){
        $total= $total+$panier[$i]['prix']*$panier[$i]['quantite'];
        ?>
         <tr>
        <td><?php echo ($panier[$i]['ref'])?></td>
        <td><?php echo ($panier[$i]['designation'])?></td>
        <td><?php echo ($panier[$i]['prix'])?></td>
        <td><?php echo ($panier[$i]['quantite'])?></td>
        <td><a href="suppPanier.php?index=<?php echo $i?>">supprimer</a></td>
           </tr>
    <?php } ?>
    <tr>
        <td colspan="3">Total:</td>
        <td><?php echo($total);?></td>
           </tr>
</table>
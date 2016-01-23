<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style1.css"/>
        
    </head>
    <body>
        <?php include("entete.php");?>
        <table width="100%">
            <tr>
                <td valign="top"> 
                   <div id="categories">
                    <?php include("categories.php")?>
                   </div> 
                </td>
                <td>
                 <div id="contenu">
                    <?php if(isset($_GET['panier']))
                    include("panier.php"); 
                   else
                   include("produit.php"); ?>
                 </div>
                 
                </td>
            </tr>
        </table>
    </body>
    
</html>
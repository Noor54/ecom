<?php
session_start();
?>
            <table width=100% border="0">
                <tr>
                    <td width="16%">
                        
                    <div id="logo"><img src="images/logo.jpg" width="147" height="71"/></div>
                        
                    </td>
                    <td width="55%">
                        
                    <div id="pub"><img src="images/pub.jpg" width="529" height="87"/></div>
                        
                    </td>
                    <td width="29%">
                    <div id="login">
                        <?php if (isset($_SESSION['ROLE_USER'])){?>
                        Athentifié avec Login <?php echo ($_SESSION['LOGIN']);?>
                        <?php }?>
                    </div>    
                    <div id="authentification">
                        <form method="POST" action="auth.php">
                            login:<input type="text"name="login" size="10" />
                            pass:<input type="password" name="pass" size="12"/>
                            <input type="submit" value="OK" size="10" />
                        </form>
                              
                    </div>
                        
                    </td>
                </tr>
                
            </table>
            <div id="menu">
            <table width="100%" border="0">
                <tr>
                    <td>
                        <div id="recherche">
                            <form method="POST" action="index.php">
                                <input type="text" name="motCle"/>
                                <input type="submit" value="Chercher"/>
                            </form>
                            
                        </div>
                    </td>
                    <td><a href="index.php">Home</a></td>
                    <td><a href ="index.php">Sélection</a></td>
                    <td><a href ="index.php?promo=1">Promotion</a></td>
                    <td><a href ="panier.php?panier=1">Panier</a></td>
                    <?php if(isset($_SESSION['ROLE_USER'])){?>
                    <td><a href ="GesCat.php">Gestion catégories</a></td><!-- affiché que  si l'user est connecté-->
                    <td><a href ="GesPro.php">Gestion produit</a></td>
                    <?php } ?>
                </tr>
            </table>
            </div>
        
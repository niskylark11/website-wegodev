<?php

    include_once("function/helper.php");

?>

<!DOCTYPE html>
<html>

    <head>
        <tittle>weshop | luthfi rahman</tittle>
    </head>

    <body>

        <div id="container">
            <div id="header">
                <a href="<?php echo BASE_URL."index.php"; ?>">
                    <img src="<?php echo BASE_URL."images/logo.png"; ?>" />
                </a>
        
            <div id="menu">
                <div id="user">
                    <a href="<?php echo BASE.URL."index.php?page=login"; ?>"Login</a>
                    <a href="<?php echo BASE.URL."index.php?page=register"; ?>"Register</a>
                </div>

                <a href="<?php echo BASE_URL."index.php?page=keranjang"; ?>">
                    <img src="<?php echo BASE_URL."images/cart.png"; ?>" />
                </a>
            </div>
        </div>    
          
            <div id="content"></div>
        
            <div id+"footer"></div>
                <p>copyright weshop 2019</p>
            </div>

    </body>

</html>

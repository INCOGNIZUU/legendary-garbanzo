<html>
    <head>
        <title>Your Favorite</title>
    </head>
    <body>
        <?php

        $username = $_POST["username"];
        $color = $_POST["color"];
        $dish = $_POST["dish"];

        if($username != null){
            echo "Hello " . $username;
            if($color != null && $dish != null){
                echo " You really enjoy " . $dish . " especially with a nice " . $color . " wine";
            }
            else{
                echo " You forgot to enter a dish or color of wine please go back to the previous page.";
            }
        }
        else{
            echo " Please enter your name on the previous page.";
        }
        ?>
    </body>
</html>
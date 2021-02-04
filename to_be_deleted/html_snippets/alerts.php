<?php require_once '../config.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../config.php';
            echo "<title>Alerts &#169 Liviu Voica</title>";
        ?>
    </head>
    <body>

        <?php

            echo "<div class=\"display-components\">";
                echo "<div class=\"section-display\">";
                    foreach ($alertClasses as $key => $class) {
                        echo "<div class=\"" . $class . "\">";
                            echo "<span class=\"alert__text\">This is a " . $key . " alert-check it out!</span>";
                        echo "</div>";
                    }
                echo "</div>";
            echo "</div>";
            
        ?>

    </body>
</html>
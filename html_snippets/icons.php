<?php require_once '../config.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../config.php';
            echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">";
            echo "<title>Badge Buttons &#169 Liviu Voica</title>";
        ?>
    </head>
    <body>

        <?php
            echo "<div class=\"display-components\">";

                echo "<div class=\"section-display\">";
                    echo "<div class=\"display-icons\">";
                    foreach ($iconClasses as $key => $class) {
                        echo "<a href=\"#\" class=\"" . $class . "\"></a>";
                    }
                    echo "</div>";
                echo "</div>";

                echo "<div class=\"section-display\">";
                    echo "<div class=\"display-icons\">";
                    foreach ($iconClasses as $key => $class) {
                        echo "<a href=\"#\" class=\"" . $class . " fa-round-border\"></a>";
                    }
                    echo "</div>";
                echo "</div>";

            echo "</div>";
        ?>

    </body>
</html>
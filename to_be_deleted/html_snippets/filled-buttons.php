<?php require_once '../config.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../config.php'; 
            echo "<title>Filled Buttons &#169 Liviu Voica</title>";
        ?>
    </head>
    <body>

        <?php
            echo "<div class=\"display-components\">";

                echo "<div class=\"section-display\">";
                    echo "<div class=\"display-buttons\">";
                        foreach ($filledButtonsClasses as $key => $class) {
                            echo "<button class=\"" . $class . "\">";
                                echo "<span class=\"btn__text\">" . ucfirst($key) . "</span>";
                            echo "</button>";
                        }
                    echo "</div>";
                echo "</div>";

            echo "</div>";
        ?>

    </body>
</html>
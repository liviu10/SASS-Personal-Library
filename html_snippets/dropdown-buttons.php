<?php require_once '../config.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../config.php';
            echo "<title>Dropdown Buttons &#169 Liviu Voica</title>";
        ?>
    </head>
    <body>

        <?php
            echo "<div class=\"display-components\">";

                echo "<div class=\"section-display\">";
                    echo "<div class=\"display-buttons\">";
                        foreach ($filledButtonsClasses as $key => $class) {
                            echo "<div class=\"dropdown-button\">";
                                echo "<button class=\"" . $class . "\">";
                                    echo "<span class=\"btn__text\">" . ucfirst($key) . " Menu</span>";
                                echo "</button>";
                                echo "<div class=\"dropdown-content--" . $key . "\">";
                                for ($numberOfLinks = 0; $numberOfLinks < 5; $numberOfLinks++) {
                                    echo "<a class=\"a-typography\" href=\"#\">Link " . $numberOfLinks . "</a>";
                                }
                                echo "</div>";
                            echo "</div>";
                        }
                    echo "</div>";
                echo "</div>";

            echo "</div>";
        ?>

    </body>
</html>
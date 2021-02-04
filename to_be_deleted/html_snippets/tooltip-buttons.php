<?php require_once '../config.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../config.php';
            echo "<title>Tooltip Buttons &#169 Liviu Voica</title>";
        ?>
    </head>
    <body>

        <?php
            echo "<div class=\"display-components\">";

                echo "<div class=\"section-display\">";
                    echo "<div class=\"display-buttons\">";
                        foreach ($filledButtonsClasses as $key => $class) {
                            echo "<div class=\"tooltip-button\">";
                                echo "<button class=\"" . $class . "\">";
                                    echo "<span class=\"btn__text\">" . ucfirst($key) . " Tooltip</span>";
                                echo "</button>";
                                echo "<div class=\"tooltip-content\">";
                                    echo "<p class=\"p-typography\" href=\"#\">Lorem Ipsum</p>";
                                echo "</div>";
                            echo "</div>";
                        }
                    echo "</div>";
                echo "</div>";

            echo "</div>";
        ?>

    </body>
</html>
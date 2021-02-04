<?php require_once '../config.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../config.php';
            echo "<title>Pagination Buttons &#169 Liviu Voica</title>";
        ?>
    </head>
    <body>

        <?php
            echo "<div class=\"display-components\">";

                echo "<div class=\"section-display\">";
                    echo "<div class=\"display-buttons\" style=\"flex-direction: column;\">";
                        foreach ($filledButtonsClasses as $key => $class) {
                            echo "<div class=\"pagination-group\">";
                                echo "<button class=\"" . $class . "\">";
                                    echo "<span class=\"btn__text\">Previous</span>";
                                echo "</button>";
                                for ($numberOfButtons = 0; $numberOfButtons < 5; $numberOfButtons++) {
                                    echo "<button class=\"" . $class . "\">";
                                        echo "<span class=\"btn__text\">" . $numberOfButtons . "</span>";
                                    echo "</button>";
                                }
                                echo "<button class=\"" . $class . "\">";
                                    echo "<span class=\"btn__text\">Next</span>";
                                echo "</button>";
                            echo "</div>";
                        }
                    echo "</div>";
                echo "</div>";

            echo "</div>";
        ?>

    </body>
</html>
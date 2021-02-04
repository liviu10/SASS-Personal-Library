<?php require_once '../config.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../config.php';
            echo "<title>Cards &#169 Liviu Voica</title>";
        ?>
    </head>
    <body>

        <?php
            echo "<div class=\"display-components\">";

                echo "<div class=\"section-display\">";
                    echo "<div class=\"display-cards\">";
                        for ($numberOfCards = 0; $numberOfCards < 3; $numberOfCards++) {
                            echo "<div class=\"card card--standard\">";
                                echo "<img class=\"card__img\" src=\"../utilities/media library/Ad Img 300-250px.jpg\" alt=\"Card Image\">";
                                echo "<div class=\"card__body\">";
                                    echo "<h2 class=\"card__title\">Card Title</h2>";
                                    echo "<p class=\"card__text\">";
                                        for ($numberOfTexts = 0; $numberOfTexts < 3; $numberOfTexts++) {
                                            echo "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
                                        }
                                    echo "</p>";
                                    echo "<button class=\"btn btn--primary\">";
                                        echo "<span class=\"btn__text\">Button Primary</span>";
                                    echo "</button>";
                                echo "</div>";
                            echo "</div>";
                        }
                    echo "</div>";
                echo "</div>";

            echo "</div>";
        ?>

    </body>
</html>
<?php require_once '../config.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <?php 
            require_once '../config.php';
            echo "<title>Text Group &#169 Liviu Voica</title>";
        ?>
    </head>
    <body>

        <?php
            echo "<div class=\"display-components\">";

                echo "<div class=\"section-display\">";
                    echo "<div class=\"text-group\">";
                        echo "<div class=\"text-header\">";
                            echo "<h3 class=\"h3-typography\">This is a h3 header</h3>";
                        echo "</div>";
                        echo "<div class=\"text-content\">";
                        for ($numberOfTexts = 0; $numberOfTexts < 3; $numberOfTexts++) {
                            echo "<p class=\"p-typography\">";
                                echo "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
                            echo "</p>";
                        }
                        echo "</div>";
                    echo "</div>";
                echo "</div>";

            echo "</div>";
        ?>

    </body>
</html>
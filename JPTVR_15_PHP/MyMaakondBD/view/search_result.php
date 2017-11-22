<?php ob_start() ?>
<h2> Уезды - результат поиска</h2><article>
    <?php
//$result - an array of searching
    
        if(count($result_search) > 0) {
            foreach ($result_search as $maakond) {
                echo "<h3>{$maakond['name_maakond']}</h3>";
                echo "<p>Capital: {$maakond['capital']}</p>";
                echo "<p>Description: {$maakond['description']}</p>";
            }
        } else {
            echo "<p>По вашему запросу ничего не найдено.</p>";
        }
    ?>
</article>
<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php"; ?>
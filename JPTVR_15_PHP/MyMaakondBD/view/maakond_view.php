<?php ob_start() ?>
<h2> Уезды</h2><article>
	<?php 
		
		
            echo '<p><b><span style="font-size:16px;">'.$maakond_one->name_maakond.'</span></b>&nbsp; ';
            echo 'Столица: <b>'.$maakond_one->capital.'</b></p>';
            echo '<p><b>Описание: </b>'.$maakond_one->description;
            echo ' <span style="font-size:12px;"><a href="maakonnad">К списку  &#187 </a></span></p>';
			//echo '';			
			//echo '<div style="clear:both;"></div>';
				
	?>
</article>
<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php"; ?>
<?php ob_start() ?>
<h2> Галерея</h2>
	<?php 
	$text='';
	foreach ($cities_list as  $city_row){
	 $title='<div style="clear:both;"></div>';
	
		$title.='<h4>'.$city_row->city.' </h4>';
		$k=0;
		$img='';
		foreach ($gallery as  $gallery_row)
		{
		if ($city_row->id_city==$gallery_row->id_city){
			
            $img.='<img src="images/'.$gallery_row->picture.'" width=100px height=100px>';

			$k++;
			}
		}	
		if($k>0){
		$text.=$title;
		$text.=$img;
		}
		
	}
	echo '<article style=" height:100%;">'.$text.'</article>';	
	?>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php"; ?>

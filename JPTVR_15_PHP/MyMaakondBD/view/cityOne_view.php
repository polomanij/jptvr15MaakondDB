<?php ob_start() ?>
<h2>Города Эстонии </h2><article>
	<?php 
	
			
				//print_r($maakond_list);
				//echo $city_show->id_maakond.'<br>';
				//echo '!!!'.$maakond_list[0]->name_maakond.'!!!';
				foreach ($maakond_list as  $maakond_row){
					if ($maakond_row->id_maakond==$city_show->id_maakond)
						$maakond= $maakond_row->name_maakond;
				}
				
					echo '<p style="font-size:18px;"><b>'.$city_show->city.' </b> &nbsp;Maakond: '.$maakond.'</p>';
				   
					
					 echo '<p>Количество жителей: '.$city_show->people.'</p>';			 
					echo  '<p style="margin-top:50px;"><a  href="cities" >К списку городов</a>			</p>';
								
					//echo '<div style="clear:both;"></div>';
				
				
			
		
		//$news_row->title="";
	?>
</article>
<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php"; ?>

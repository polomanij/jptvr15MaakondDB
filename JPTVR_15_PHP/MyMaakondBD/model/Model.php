<?php
class model{
	//-----------------------------------------maakond List
	public function getMaakondList(){
	$sql="SELECT * FROM `maakond` ORDER BY `name_maakond` ASC";
	$db = new db();
	$rows = $db->getAll($sql);

	$maakond_object=array();
		foreach($rows as $item){
			$row=new Maakond($item['id_maakond'],$item['name_maakond'],$item['capital'],$item['description'] );
			$maakond_object[]=$row;		
		}
		//print_r($maakond_object); //=> console.log		
		return $maakond_object;
	}
	//-----------------------------------------maakond View
	public function getMaakondOne($id){
	$sql="SELECT * FROM `maakond` WHERE `id_maakond`=".$id;
	$db = new db();
	$item = $db->getOne($sql);

	$maakond_object=new Maakond($item['id_maakond'],$item['name_maakond'],$item['capital'],$item['description'] );
		
		//print_r($maakond_object); //=> console.log		
		return $maakond_object;
	}	
	//--------------------------------------cities list
	public function getCitiesList(){
		$sql="SELECT * FROM `city` ORDER BY `city`";
		$db = new db();
		$rows = $db->getAll($sql);

		$cities_object=array();
			foreach($rows as $item){
				$row=new Cities($item['id_city'],$item['city'],$item['people'],$item['id_maakond']);
				$cities_object[]=$row;		
			}
			//print_r($cities_object); //=> console.log		
		return $cities_object;
	}	
	//------------------- city view
		public function getOneCity($id){	
		
		$sql="SELECT * FROM `city` WHERE `id_city`=".$id;	
		$db = new db();
		$item = $db->getOne($sql);
					
		$city_object=new Cities($item['id_city'],$item['city'],$item['people'],$item['id_maakond']);				
			
		//print_r($city_object); //=> console.log		
		return $city_object;
		}
	//-------------------------------------------gallery show
		public function gallery_show(){
		$sql="SELECT * FROM `gallery` ORDER BY `gallery`.`id_city` ASC";
		$db = new db();
		$rows = $db->getAll($sql);		
		
		$gallery_object=array();
			foreach($rows as $item){
				$row=new Gallery($item['id_gallery'],$item['picture'],$item['id_city']);
				$gallery_object[]=$row;		
			}
			//print_r($gallery_object); //=> console.log		
		return $gallery_object;		
		
		}
                //search
                public function getSearch($text)
                {
                    //sql - db - run query
                    $sql = "SELECT * FROM maakond WHERE description like '%".$text."%'";
                    $db = new db();
                    $rows = $db->getAll($sql);
                    return $rows;
                }
}
?>
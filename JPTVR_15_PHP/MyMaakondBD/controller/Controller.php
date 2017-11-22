<?php

class Controller extends RenderTemplate{
	public $model;

	public function __construct()
        {
            $this->model = new Model();
        }
	// Просмотр списка фильмов - стартовая страница
	public function start_site()
	{			
		$html = $this->render_template('view/homepage.php', array(), array());
		return $html;
	}
	public function maakonnad_list()
	{
		$maakond_list = $this->model->getMaakondList();		
		$html = $this->render_template('view/maakond_list.php', array('maakond_list' => $maakond_list),array());		
		return $html;
	}
	public function maakond_view($id)
	{
		$maakond_one = $this->model->getMaakondOne($id);
		$html = $this->render_template('view/maakond_view.php', array('maakond_one' => $maakond_one),array());
		return $html;
	}
	// Просмотр списка cities
	public function cities_list()
	{
		$maakond_list = $this->model->getMaakondList();
		$cities_list = $this->model->getCitiesList();
		$html = $this->render_template('view/cities_view.php', array('cities_list' => $cities_list), array('maakond_list'=>$maakond_list));
		return $html;
	}
	// Просмотр One cities
	public function show_city($id)
	{	$maakond_list = $this->model->getMaakondList();
		$city_show = $this->model->getOneCity($id);
		$html = $this->render_template('view/cityOne_view.php', array('city_show' => $city_show), array('maakond_list' => $maakond_list));
		return $html;
	}
	// Просмотр gallery
	public function gallery_view()
	{
		$cities_list = $this->model->getCitiesList();
		$gallery = $this->model->gallery_show();
		$html = $this->render_template('view/galleryList_view.php', array('gallery' => $gallery), array('cities_list' => $cities_list));
		return $html;
	}	
	
	//Страница контакт
	public function contact_view()
	{
		$html = $this->render_template('view/contact.php', array(), array());
		return $html;
	}
        //form sending
        public function contact_send()
        {
            $html = $this->render_template('view/contact_send.php', array(), array());
            return $html;
        }
        //Страница Error
	public function error_404()
	{
		$html = $this->render_template('view/error_404.php', array(), array());
		return $html;
	}
        
        public function search_view($text)
        {
            //$text - stroke of $_GET['text_search']
            $result_search = $this->model->getSearch($text);
            $html = $this->render_template('view/search_result.php', ["result_search" => $result_search], []);
            
            return $html;
        }
}
?>
<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num=substr_count($host,'/');
$uri  = explode('/', $host)[$num];

if ($uri == '' OR $uri == 'index.php' )
{
	// Главная страница - адм деление
	$controller = new Controller();
	$response = $controller->start_site();
}
elseif ($uri == 'maakonnad' && !isset($_GET["id"]))
{	// страница  - список уездов
	$controller = new Controller();
	$response = $controller->maakonnad_list();
}
elseif ($uri == 'maakonnad' && isset($_GET["id"]))
{	// страница  - список уездов
	$controller = new Controller();
	$response = $controller->maakond_view($_GET["id"]);
}
elseif ($uri == 'cities' && !isset($_GET["city"]))
{	// страница  - список городов
	$controller = new Controller();
	$response = $controller->cities_list();
}
elseif ($uri == 'cities' && isset($_GET["city"]))
{	// Просмотр одного города
	$controller = new Controller();
	$response = $controller->show_city($_GET['city']);
}
elseif ($uri == 'gallery' )
{	// Просмотр список gallery
	$controller = new Controller();
	$response = $controller->gallery_view();
}
elseif ($uri == 'contact' )
{	// Просмотр контактов
	$controller = new Controller();
	$response = $controller->contact_view();
}
elseif ($uri == 'send_contact')
    //form sending
{
    $controller = new Controller();
    $response = $controller->contact_send();
}
//SEARCH
elseif ($uri == 'search' && isset ($_GET['text_search'])) {
    $controller = new Controller();
    $response = $controller->search_view($_GET['text_search']);
}
else
{	// Страница не существует
	$controller = new Controller();;
	$response = $controller->error_404();
}
?>
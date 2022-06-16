<?php
session_start();

use App\Autoloader;
use App\App;

require dirname(__DIR__) . DIRECTORY_SEPARATOR .'app'   . DIRECTORY_SEPARATOR . 'Autoloader.php';
Autoloader::register();

$app = App::getInstance();
$app->title = 'Titre de test';


$app2 = App::getInstance();
echo 'Le tire : ' .$app2->title;



var_dump(App::getInstance());























/*
// Routage initialisé
if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}

//Dispatcher
ob_start();

if($p === 'home'){
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'page/home.php';
}elseif ($p === 'article') {
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'page/single.php';
}elseif ($p === 'categorie') {
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'page/categorie.php';
}elseif ($p === '404') {
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'page/404.php';
}

$content = ob_get_clean();
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'page/template/default.php';
*/
<?php
include '../functions.php';
//include '../home_page.php';
//echo "<h1>point of entry</h1>";
//output($_SERVER["REQUEST_URI"]);

//создаем массив с маршрутами
$routes = [
    '/' => '../controllers/home_page.php',
    '/about' => '../controllers/about.php',
    '/contacts' => '../controllers/contacts.php',

];

$route = $_SERVER["REQUEST_URI"];

if(array_key_exists($route, $routes)){
    include $routes[$route]; exit;
} else{
    echo "<h2>404 <br> данная страница закрыта  <br> или такая страница не существет </h2>";
}


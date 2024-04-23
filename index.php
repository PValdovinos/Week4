<?php
//session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);
// 328/week4/index.php
// This is my CONTROLLER

// Turn on error reporting
require_once ('vendor/autoload.php');

// Instantiate base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function(){

    //echo '<h1>Welcome to week 4</h1>';

    //render a view page
    $view = new Template();
    echo $view->render('views/info.html');
});


// Run Fat-Free
$f3->run();

?>
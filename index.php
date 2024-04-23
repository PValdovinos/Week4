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
$f3->route('GET /', function($f3){

    //echo '<h1>Welcome to week 4</h1>';

    // Add data to the Fat-Free "hive"
    $f3->set('name', 'Pedro');
    $f3->set('favGame', 'FFXV');
    $f3->set('favFood', 'Chicken Katsu');
    $f3->set('favPasstime', 'Taking drives');

    // Define an array of fruits and add it to the hive
    $fruits = array('apple', 'banana', 'orange');
    $f3->set('fruitList', $fruits);

    // Array of favorite games
    $games = array('FFXV', 'Warhammer Darktide', 'Deeprock Galactic');
    $f3->set('gameList', $games);

    // Define an associative array of students
    $students = array('101'=>'Mason', '102'=>'Tilak', '103'=>'Sage');
    $f3->set('studentList', $students);

    //render a view page
    $view = new Template();
    echo $view->render('views/info.html');
});


// Run Fat-Free
$f3->run();

?>
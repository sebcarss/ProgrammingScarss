<?php
    include_once 'vendor/autoload.php';
    require_once '/classes/DB.class.php';
    //require_once '/classes/User.class.php';
    
    session_start();
    
    Flight::route('GET /', function() {
        echo 'You are on the home page';
    });
    
    Flight::route('GET /blog.php', function() {
        echo 'You are on the blog home page';
    });
    
    Flight::start();
    
    // Connect to database
    //$db = new DB('programmingscarss');
    $db = new DB('test'); // Converted to test to test the test posts from the testposts collection
    
    // Create user in session
    //$user = new User($db);
?>

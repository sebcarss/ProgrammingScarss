<?php
    include_once 'vendor/autoload.php';
    require_once '/classes/DB.class.php';
    //require_once '/classes/User.class.php';
    
    session_start();
    
    Flight::route('GET /', function() {
        $db = new DB('test'); // Converted to test to test the test posts from the testposts collection
        $posts = $db->getLatestPosts();
        Flight::render('homepage', array());
    });
    
    Flight::route('GET /blog', function() {
        // Connect to database
        //$db = new DB('programmingscarss');
        $db = new DB('test'); // Converted to test to test the test posts from the testposts collection
        $posts = $db->getLatestPosts();
        Flight::render('blog', array('posts' => $posts));
    });
    
    Flight::route('GET /blog/@permalink', function($permalink) {
        
        Flight::render('post', array('permalink' => $permalink));
    });
    
    Flight::start();
    
    // Create user in session
    //$user = new User($db);
?>

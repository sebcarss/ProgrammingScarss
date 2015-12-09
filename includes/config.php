<?php
    require_once '/classes/DB.class.php';
    //require_once '/classes/User.class.php';
    
    session_start();
    
    // Connect to database
    //$db = new DB('programmingscarss');
    $db = new DB('test'); // Converted to test to test the test posts from the testposts collection
    
    // Create user in session
    //$user = new User($db);
?>

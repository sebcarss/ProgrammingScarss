<?php
    require_once '/classes/DB.class.php';
    //require_once '/classes/User.class.php';
    
    session_start();
    
    // Connect to database
    $db = new DB('programmingscarss');
    
    // Create user in session
    //$user = new User($db);
?>

<?php
    session_start();
    
    // Connect to database
    $db = new Database('programmingscarss');
    
    // Autolaod the classes as they are called
    function __autoload($class) {
        $class = strtolower($class);
        
        $classpath = 'classes/class.' .$class . '.php';
        if (file_exists($classpath)) {
            require_once $classpath;
        }
        
        $classpath = '../classes/class.' .$class . '.php';
        if (file_exists($classpath)) {
            require_once $classpath;
        }
    }
    
    // Create user in session
    $user = new User($db);
?>

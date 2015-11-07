<?php
    require_once('includes/config.php');
    
    $user->logout();
    header('Location: /'); // Redirect back to the home page
    exit;
?>
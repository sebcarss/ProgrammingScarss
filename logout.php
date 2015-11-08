<?php
    require_once('includes/config.php');
    
    $user->logout();
    header('Location: index.php'); // Redirect back to the home page
    exit;
?>
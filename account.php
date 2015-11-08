<?php
    require_once('includes/config.php');
    
	if (!$user->is_logged_in()) {
		header('Location: login.php?redirect=account');
	}
?>
<html>
	<title>Scarss Account</title>
	<body>
		<?php include 'content/header.php'; ?>
		
		<h2>Account</h2>
        
        <div>
            <a href="database/viewCollections.php">View Database Collections</a>
        </div>
        
        <?php include 'content/footer.php'; ?>
    </body>
</html>
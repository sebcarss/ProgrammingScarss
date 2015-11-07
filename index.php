<?php require_once('includes/config.php'); ?>
<html>
	<title>Programming Scarss</title>
	<body>
		<?php include 'content/header.php'; ?>
		
		<?php
			if ($user->is_logged_in()) {
				echo '<p>Welcome ' . $_SESSION['name'] . '</p>';
			}
			
			if (isset($_GET['alreadyLoggedIn']) && $_GET['alreadyLoggedIn'] == true) {
				echo '<p>You are already logged in as ' .$_SESSION['username'] . '. You will have to sign out to register a new user.</p>';
			}
		?>
		
		<p>Blog Posts Placeholder</p>
		
		<?php include 'content/footer.php'; ?>
	</body>
</html>
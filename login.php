<?php require_once('includes/config.php'); ?>
<html>
	<title>Scarss Login</title>
	<body>
		<?php include 'content/header.php'; ?>
		
		<h2>Login</h2>
		
		<?php
			// user attempted to access a secure page so was redirected to the login page
			if (isset($_GET['redirect'])) {
				echo '<p>You will be redirected to the ' . $_GET['redirect'] . ' page when you login.</p>';
			}
			
			if (isset($_POST['submit'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				if ($user->login($username, $password) == true) {
					if (isset($_GET['redirect']) && $_GET['redirect'] == 'account') {
						header('Location: /account.php'); // Redirect to the account page
					} else {
						header('Location: /'); // Redirect to the homepage
					}
					
					exit;
				} else {
					echo '<div class="errorMessage">Invalid username and password</div>';
				}
			}
		?>
		
		<!-- Redirect back to this page on submit as the action is blank -->
		<form action="" method="post">
			<div>
				<label>Username:</label>
				<input type="text" name="username" />
			</div>
			
			<div>
				<label>Password:</label>
				<input type="password" name="password" />
			</div>
			
			<div>
				<input type="submit" name="submit" value="Log In" />
			</div>
		</form>
		
		<?php include 'content/footer.php'; ?>
	</body>
</html>
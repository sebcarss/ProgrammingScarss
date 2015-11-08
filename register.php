<?php require_once('includes/config.php'); ?>
<html>
    <title>Scarss Register</title>
    <body>
		<?php include 'content/header.php'; ?>
		
		<?php
			if ($user->is_logged_in()) {
				header('Location: index.php?alreadyLoggedIn=true');
			}
			
			if (isset($_POST['submit'])) {
				// TODO create unique user
				if ($db->registerNewUserfromPost() ==  true) {
					// login as user
                    if ($user->login($_POST['username'], $_POST['password']) == true) {    
						header('Location: index.php'); // Redirect to the homepage
                    }
				}
			}
		?>
        
		<h2>Register</h2>
		
		<!-- redirect back to the registration page in case of errors -->
		<form action="" method="post">
			<div>
				<label>Username:</label>
				<input type="text" name="username" />
			</div>
			
			<div>
				<label>First Name:</label>
				<input type="text" name="firstname" />
			</div>
			
			<div>
				<label>Surname:</label>
				<input type="text" name="surname" />
			</div>
			
			<div>
				<label>Password:</label>
				<input type="password" name="password" />
			</div>
			
			<div>
				<label>Confirm Password:</label>
				<input type="password" name="confirm_password" />
			</div>
			
			<div>
				<label>Email (optional):</label>
				<input type="text" name="email" />
			</div>
			
			<div>
				<input type="submit" name="submit" value="Register New User" />
			</div>
		</form>
        
        <?php include 'content/footer.php'; ?>
    </body>
</html>
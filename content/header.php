<h1>Programming Scarss</h1>
<p>I don't want to die without any scars - Fight Club</p>
<p>
	<a href="index.php">Home</a>
    <?php
        if (!$user->is_logged_in()) {
            echo '<a href="login.php">Sign In</a>';
        } else {
            echo '<a href="logout.php">Sign Out</a>';
        }
    ?>
	<a href="register.php">Register</a>
    <a href="account.php">Account</a>
</p>
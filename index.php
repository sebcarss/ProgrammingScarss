<html>
	<title>{ Programming Scarss }</title>
	<body>
		<link rel="stylesheet" href="css/homepage.css" type="text/css" />
		<?php include 'content/header.php'; ?>
		
		<?php
			if ($user->is_logged_in()) {
				echo '<p>Welcome ' . $_SESSION['name'] . '</p>';
			}
			
			if (isset($_GET['alreadyLoggedIn']) && $_GET['alreadyLoggedIn'] == true) {
				echo '<p>You are already logged in as ' .$_SESSION['username'] . '. You will have to sign out to register a new user.</p>';
			}
		?>
		
		<div id="content-window">
			<ul>
				<div class="links-list">
					<li>
						<span class="homepage-icon">
							<a href="blog.php">
								<img src="images/blog.png" alt="Blog" height="128" width="128">
								<p>Blog</p>
							</a>
						</span>
					</li>
					
					<li>
						<span class="homepage-icon">
							<a href="cv.php">
								<img src="images/cv.png" alt="CV" height="128" width="128">
								<p>CV</p>
							</a>
						</span>
					</li>
					
					<li>
						<span class="homepage-icon">
							<a href="projects.php">
								<img src="images/projects.png" alt="Programming Projects" height="128" width="128">
								<p>Projects</p>
							</a>
						</span>
					</li>
				</div>
			</ul>
		</div>
		
		<?php include 'content/footer.php'; ?>
	</body>
</html>
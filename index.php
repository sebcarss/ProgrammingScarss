<?php require_once('includes/config.php'); ?>
<html>
	<title>{ Programming Scarss }</title>
	<body>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
				<li>
					<span class="homepage-icon" id="blog-icon">
						<a href="blog.php">
							<img src="images/blog.png" alt="Blog" height="128" width="128">
							<p>Blog</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae interdum erat.</p>	
						</a>
					</span>
				</li>
				
				<li>
					<span class="homepage-icon" id="cv-icon">
						<a href="cv.php">
							<img src="images/cv.png" alt="CV" height="128" width="128">
							<p>CV</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae interdum erat.
							Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
						</a>
					</span>
				</li>
				
				<li>
					<span class="homepage-icon" id="projects-icon">
						<a href="projects.php">
							<img src="images/projects.png" alt="Programming Projects" height="128" width="128">
							<p>Programming Projects</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</a>
					</span>
				</li>
				
				<li>
					<span class="homepage-icon" id="music-icon">
						<a href="music.php">
							<img src="images/music.png" alt="Music" height="128" width="128">
							<p>Music</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae interdum erat.
							Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam at tellus.</p>
						</a>
					</span>
				</li>
			</ul>
		</div>
		
		<?php include 'content/footer.php'; ?>
	</body>
</html>
<?php
    require_once('../includes/config.php');
    
    if (!$user->is_logged_in()) {
        header('Location: /index.php?redirect=account');
    }
?>
<html>
	<title>Scarss Collections</title>
	<body>
		<?php include '../content/header.php'; ?>
		
		<h2>Database Collections</h2>
        
        <?php
            $collections = $db->listCollections();
            
            foreach ($collections as $collection) {
                echo $collection . ' (count: ' . $collection->count() . ')';
				
				$cursor = $collection->find();
				
				foreach ($cursor as $doc) {
					//echo '<p>' . $doc['id'] . '</p>';
					var_dump($doc);
				}
            }
        ?>
        
        <?php include '../content/footer.php'; ?>
        
    </body>
</html>
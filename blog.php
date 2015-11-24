<?php require_once('includes/config.php'); ?>
<html>
    <head>
        <title>Programming Scarss</title>
    </head>
    <body>
        <div class="post">
            <?php
                $posts = $db->getLatestPosts();
                
                foreach ($posts as $doc) {
                    echo '<a href="blog/' . $doc['permalink'] . '.php">' . $doc['title'] . '</a>';
                    echo '<p>' . $doc['blurb'] . '</p>';
                }
            ?>
        </div>
    </body>
</html>
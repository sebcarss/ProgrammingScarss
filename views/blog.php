<?php require_once('includes/config.php'); ?>
<html>
    <head>
        <title>Programming Scarss</title>
    </head>
    <body>
        <div class="header">
            Blog Posts
        </div>
        <div class="posts">
            <?php
                foreach ($posts as $doc) {
                    echo '<div class="post">';
                    echo '<a href="blog/' . $doc['permalink'] . '.php">' . $doc['title'] . '</a>';
                    echo '<p>' . $doc['blurb'] . '</p>';
                    echo '</div>';
                }
            ?>
        </div>
    </body>
</html>
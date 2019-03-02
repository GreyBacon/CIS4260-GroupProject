<!DOCTYPE html>
<?php
require_once('database.php');
require('category_db.php');

$categories = get_categories();

?>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Games</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>
    <body class="flexbox-container">
    <div class="mainBody">
        <h1>Select a category</h1>
        <ul>
            <?php foreach($categories as $category) : ?>
            <li>
                <a href="?category= <?php echo $category['category_id']?>">
                   <?php echo $category['category']?> </a>

            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    </body>
</html>

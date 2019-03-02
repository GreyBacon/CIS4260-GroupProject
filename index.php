<!DOCTYPE html>
<?php
require_once('database.php');
require('category_db.php');

$categories = get_categories();

?>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Products</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>
    <body class="flexbox-container">
    <div class="mainBody">
    <aside>
        <h1>Categories</h1>
        <ul>
            <?php foreach($categories as $category) : ?>
            <li>
                <?php echo $category['category_id']; ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </aside>
    </div>
    </body>
</html>

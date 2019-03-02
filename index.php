<!DOCTYPE html>
<?php
require_once('database.php');
require('category_db.php');

// Get category id's
/*if (!isset($Category_id)) {
    $Category_id = filter_input(INPUT_GET, 'Category_id', FILTER_VALIDATE_INT);
    
}*/

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
        <?php 
        
        ?>
    </div>
    </body>
</html>

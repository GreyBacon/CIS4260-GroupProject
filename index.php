<!DOCTYPE html>
<?php
require_once('database.php');
require('category_db.php');
require('games_db.php');

$categories = get_categories();
$view = filter_input(INPUT_GET, 'view');
?>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Games</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>
    <body class="flexbox-container">
        <div class="mainBody">
            <?php include 'categoryLeft.php';?> <!-- shows the categories, likely not changed-->
        <div class="sideRight"> <!-- What shows up on the right/main area, add your include in this area to change the view-->
            <?php if($view==='cart') {
                //add cart include here if applicable
            }
            else if($view==='detail') {
                include 'detail.php'; 
            }
            else {
                include 'gamesRight.php';
            }
           ?>
        </div>
        </div>
    </body>
</html>

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
<?php include 'categoryLeft.php';?>
<?php include 'gamesRight.php';?>
        </div>
    </body>
</html>

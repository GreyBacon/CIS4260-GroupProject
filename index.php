<!DOCTYPE html>
<?php
require_once('database.php');               //Connects to the sql database
require_once('cart.php');
require('category_db.php');                 //Functions related to the category table
require('games_db.php');                    //Functions related to the game table

$categories = get_categories();             //Grabs the full list of categories


$view = filter_input(INPUT_POST, 'view');
if ($view === NULL) {
    $view = filter_input(INPUT_GET, 'view');
    if ($view === NULL) {
        $view = 'show_add_item';
    }
}
//$view = filter_input(INPUT_GET, 'view');    //Gets the type of view from the URL, used under the sideRight div
?>

<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Games</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>
    <body class="flexbox-container">    <!-- Empty container to hold the centered box for the page -->
        <div class="mainBody">          <!-- Main box housing the page -->
            <?php include 'categoryLeft.php';?> <!-- shows the categories, likely not changed-->
        <div class="sideRight"> <!-- What shows up on the right/main area, add your include in this area to change the view-->
            <?php if($view==='cart') {
                include 'cart.php';
            }else if($view == 'cart_view'){
                include 'cart_view.php';
            }
            else if($view==='detail') {
                include 'detail.php'; 
            }
            else if ($view==='list') {
                include 'gamesRight.php';
            }
            else {
                include 'default.php'; //Default page to show before selecting anything
            }
           ?>
        </div>
        </div>
    </body>
</html>

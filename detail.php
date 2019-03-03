<?php
    $game_id = filter_input(INPUT_GET, 'game');     //Grabs the game id referenced in the URL
    $game = get_detail($game_id);                   //Gets the game based on the id given
?>
<img src="images\<?php echo $game['image'];?>"/>            <!-- next few lines are filling in detail page, feel free to move these around -->
<h1><?php echo $game['game']; ?></h1>
<h5>Release date: <?php echo $game['releaseDate']; ?></h5>
<h2>$<?php echo $game['price']; ?></h2>

<!-- Probably a good place to include add to cart-->
<?php
$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();
//if (empty($_SESSION['game'])) { $_SESSION['game'] = array(); }
require_once('cart.php');

// Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'show_add_item';
    }
}

// Add or update cart as needed
switch($action) {
    case 'add':
        $game_id = filter_input(INPUT_GET, 'game');
        $item_qty = filter_input(INPUT_POST, 'itemqty');
        add_item($game_id, $item_qty);
        include('cart_view.php');
        break;
    case 'update':
        $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, 
                                     FILTER_REQUIRE_ARRAY);
        foreach($new_qty_list as $key => $qty) {
            if ($_SESSION['game'][$key]['qty'] != $qty) {
                update_item($key, $qty);
            }
        }
        include('cart_view.php');
        break;
    case 'show_cart':
        include('cart_view.php');
        break;
    case 'show_add_item':
        include('add_item_view.php');
        break;
    case 'empty_cart':
        unset($_SESSION['game']);
        include('cart_view.php');
        break;
}
?>
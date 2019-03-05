<?php
    $game_id = filter_input(INPUT_GET, 'game');     //Grabs the game id referenced in the URL
    $game = get_detail($game_id);                   //Gets the game based on the id given
    $game_price = $game['price'];
    $game_name = $game['game'];
    $game_release = $game['releaseDate'];
    $game_image = $game['image'];
?>
<img src="images\<?php echo $game_image;?>"/>            <!-- next few lines are filling in detail page, feel free to move these around -->
<h1><?php echo $game_name; ?></h1>
<h5>Release date: <?php echo $game_release; ?></h5>
<h2>$<?php echo $game_price; ?></h2>

<!-- Probably a good place to include add to cart-->
<?php
$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();
//if (empty($_SESSION['game'])) { $_SESSION['game'] = array(); }
require_once('cart.php');

// Get the action to perform
/*
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        include('cart_view.php');
    }
}



// Add or update cart as needed
switch($action) {
    case 'add':
        //$game_id = filter_input(INPUT_GET, 'game');
        //$game = get_detail($game_id);
        $item_qty = filter_input(INPUT_POST, 'itemqty');
        add_item($game_id, $item_qty);
        //echo $game['price'];
        include('cart_view.php');
        break;
    case 'update':
        $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, 
                                     FILTER_REQUIRE_ARRAY);
        foreach($new_qty_list as $game => $qty) {
            if ($_SESSION['game'][$game]['qty'] != $qty) {
                update_item($game_id, $qty);
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
}*/
?>

<form action="?view=cart_view" method="POST">
            <label>Quantity:</label>
            <select name="cartNumber">
            <?php for($i = 1; $i <= 10; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select><br/>
            
            <!-- Passes the values through post, refer to the examples I added at the top of cart view-->
            <input type="hidden" id="game_id" name="game_id" value="<?php echo $game_id; ?>">
            <input type="hidden" id="game_name" name="game_name" value="<?php echo $game_name; ?>">
            <input type="hidden" id="game_price" name="game_price" value="<?php echo $game_price; ?>">            
            <label>&nbsp;</label>
            <input type="submit" value="Add Item">
        </form>
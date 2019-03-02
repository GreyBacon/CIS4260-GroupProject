<!DOCTYPE html>
<?php
require_once('database.php');
require('category_db.php');
require_once('cart.php');

$categories = get_categories();

if (empty($_SESSION['cart12'])) { $_SESSION['cart12'] = array(); }
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
        $product_key = filter_input(INPUT_POST, 'productkey');
        $item_qty = filter_input(INPUT_POST, 'itemqty');
        add_item($product_key, $item_qty);
        include('cart_view.php');
        break;
    case 'update':
        $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, 
                                     FILTER_REQUIRE_ARRAY);
        foreach($new_qty_list as $key => $qty) {
            if ($_SESSION['cart12'][$key]['qty'] != $qty) {
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
        unset($_SESSION['cart12']);
        include('cart_view.php');
        break;
}

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

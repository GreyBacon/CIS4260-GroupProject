<?php
// Add an item to the cart
function add_item($game_id, $quantity) {
    global $products;
    if ($quantity < 1) return;

    // If item already exists in cart, update quantity
    if (isset($_SESSION['game'][$game_id])) {
        $quantity += $_SESSION['game'][$game_id]['qty'];
        update_item($game_id, $quantity);
        return;
    }

    // Add item
    $game = get_detail($game_id);
    $cost = $game['price'];
    $total = $cost * $quantity;
    $item = array(
        'name' => $game['game'],
        'cost' => $cost,
        'qty'  => $quantity,
        'total' => $total
    );
    $_SESSION['game'][$game_id] = $item;
}

// Update an item in the cart
function update_item($game, $quantity) {
    $quantity = (int) $quantity;
    if (isset($_SESSION['game'][$game])) {
        if ($quantity <= 0) {
            unset($_SESSION['game'][$game]);
        } else {
            $_SESSION['game'][$game]['qty'] = $quantity;
            $total = $_SESSION['game'][$game]['cost'] *
                     $_SESSION['game'][$game]['qty'];
            $_SESSION['game'][$game]['total'] = $total;
        }
    }
}

// Get cart subtotal
function get_subtotal() {
    $subtotal = 0;
    foreach ($_SESSION['game'] as $item) {
        $subtotal += $item['total'];
    }
    $subtotal_f = number_format($subtotal, 2);
    return $subtotal_f;
}
?>
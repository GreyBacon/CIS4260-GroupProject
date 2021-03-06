<?php
    $game_id = filter_input(INPUT_POST, 'game_id');        
    $game_name = filter_input(INPUT_POST, 'game_name');
    $game_price = filter_input(INPUT_POST, 'game_price');   
    $cartNumber = filter_input(INPUT_POST, 'cartNumber')
?>
<!DOCTYPE html>
<html>
<head>
    <title>Games</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <!--<header>
        <h1>Games</h1>
    </header>commenting out duplicate header-->
    <main> 
                                                            <!-- delete this part when you're done its just a sample to make it easy to see the variables -->
        <?php
            echo 'number in the shopping cart is '.$cartNumber;
            echo '<br/>game id is '.$game_id;
            echo '<br/>game name is '.$game_name;
            echo '<br/>game price is '.$game_price;
        ?>
                                                            <!-- part to delete ends here-->
        <h1>Your Cart</h1>
        <?php if (empty($_SESSION['game']) || 
                  count($_SESSION['game']) == 0) : ?>
            <p>There are no items in your cart.</p>
        <?php else: ?>
            <form action="./index.php?view=" method="post">
            <input type="hidden" name="action" value="update">
            <table>
                <tr id="cart_header">
                    <th class="left">Item</th>
                    <th class="right">Item Cost</th>
                    <th class="right">Quantity</th>
                    <th class="right">Item Total</th>
                </tr>

            <?php foreach( $_SESSION['game'] as $game => $item ) :
                $cost  = number_format($item['cost'],  2);
                $total = number_format($item['total'], 2);
            ?>
                <tr>
                    <td>
                        <?php echo $item['name']; ?>
                    </td>
                    <td class="right">
                        $<?php echo $cost; ?>
                    </td>
                    <td class="right">
                        <input type="text" class="cart_qty"
                            name="newqty[<?php echo $game; ?>]"
                            value="<?php echo $item['qty']; ?>">
                    </td>
                    <td class="right">
                        $<?php echo $total; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
                <tr id="cart_footer">
                    <td colspan="3"><b>Subtotal</b></td>
                    <td>$<?php echo get_subtotal(); ?></td>
                </tr>
                <tr>
                    <td colspan="4" class="right">
                        <input type="submit" value="Update Cart">
                    </td>
                </tr>
            </table>
            <p>Click "Update Cart" to update quantities in your
                cart. Enter a quantity of 0 to remove an item.
            </p>
            </form>
        <?php endif; ?>
        <p><a href=".?action=show_add_item">Add Item</a></p>
        <p><a href=".?action=empty_cart">Empty Cart</a></p>
    </main>
</body>
</html>
<!DOCTYPE html>

<head>
    <title>Games</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <!--<header>
        <h1>Games</h1>
    </header>-->
    <main>
        <!--<h1>Add Item</h1>-->
        <form action="
            <?php 
                echo "./index.php?view=detail"."&game=".$game_id;
            ?>" method="post">
            <input type="hidden" name="action" value="add">

            <!--<label>Name:</label>
            <select name="productgame">-->
            <?php /* foreach($products as $game => $product) :
                $cost = number_format($product['cost'], 2);
                $name = $product['name'];
                $item = $name . ' ($' . $cost . ')';
            */ ?>
            <!--    <option value="<?php/* echo $game; */?>">
                    <?php/* echo $item; */?>
                </option>
            <?php/* endforeach; */?>
            </select><br>-->

            <label>Quantity:</label>
            <select name="itemqty">
            <?php for($i = 1; $i <= 10; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select><br>
            

            <label>&nbsp;</label>
            <input type="submit" value="add">
        </form>
        <p><a href="
            <?php 
                echo "./index.php?view=cart_view"."&game=".$game_id;
            ?>">View Cart</a></p>    
    </main>
</body>
 
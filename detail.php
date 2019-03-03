<?php
    $game_id = filter_input(INPUT_GET, 'game');

    $game = get_detail($game_id);
?>
<img src="images\<?php echo $game['image'];?>"/>
<h1><?php echo $game['game']; ?></h1>
<h5>Release date: <?php echo $game['releaseDate']; ?></h5>
<h2>$<?php echo $game['price']; ?></h2>

<!-- Probably a good place to include add to cart-->
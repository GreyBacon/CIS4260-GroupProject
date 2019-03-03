<?php
    $game_id = filter_input(INPUT_GET, 'game');     //Grabs the game id referenced in the URL
    $game = get_detail($game_id);                   //Gets the game based on the id given
?>
<img src="images\<?php echo $game['image'];?>"/>            <!-- next few lines are filling in detail page, feel free to move these around -->
<h1><?php echo $game['game']; ?></h1>
<h5>Release date: <?php echo $game['releaseDate']; ?></h5>
<h2>$<?php echo $game['price']; ?></h2>

<!-- Probably a good place to include add to cart-->
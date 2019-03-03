<?php
    $game_id = filter_input(INPUT_GET, 'game');

    $game = get_detail($game_id);
?>
<h1><?php echo $game['game']; ?></h1>
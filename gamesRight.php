<?php 
    $category = filter_input(INPUT_GET, 'category');
    $games = get_games($category);
?>
<h1>Games</h1>
<ul>
    <?php foreach($games as $game) : ?>
    <li>
        <?php echo $game['game']?>
    </li>
    <?php endforeach; ?>
</ul>
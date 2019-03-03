<?php 
    $category = filter_input(INPUT_GET, 'category');
    $games = get_games($category);
?>
<h1>Games</h1>
<ul>
    <?php foreach($games as $game) : ?>
    <li>
        <?php //echo $game['game']?>
        <a href="?game=<?php echo $game['game_id']?>&view=detail">
                           <?php echo $game['game']?> </a>
    </li>
    <?php endforeach; ?>
</ul>
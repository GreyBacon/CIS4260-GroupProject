<?php 
    $category = filter_input(INPUT_GET, 'category');        //Grabs the category ID based on the URL
    $games = get_games($category);                          //Gets the list of games under given category 
?>
<h1>Games</h1>
<ul>
    <?php foreach($games as $game) : ?>             <!-- lists every game under for the category -->
    <li>
        <a href="?game=<?php echo $game['game_id']?>&view=detail">
                           <?php echo $game['game']?> </a>
    </li>
    <?php endforeach; ?>
</ul>
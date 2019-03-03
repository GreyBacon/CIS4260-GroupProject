<?php
    $game_id = filter_input(INPUT_GET, 'game');

    $game = get_detail($game_id);
    echo $game['game'];
?>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title></title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>
    <body class="flexbox-container">
        <div class="mainBody">
            <h1>test</h1>
        </div>
        </div>
    </body>
</html>

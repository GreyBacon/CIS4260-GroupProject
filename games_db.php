<?php
function get_games($category_id) {
    global $db;
    $query = 'SELECT * FROM game_db
              WHERE category_id = :category_id
              ORDER BY game_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $games = $statement->fetchAll();
    $statement->closeCursor();
    return $games;    
}
function get_detail($game_id) {
    global $db;
    $query =    'SELECT * FROM game_db
                WHERE game_id =:game_id;';
    $statement = $db->prepare($query);
    $statement->bindValue(':game_id', $game_id);
    $statement->execute();
    $games = $statement->fetch();
    $statement->closeCursor();
    return $game_detail;    
}
?>
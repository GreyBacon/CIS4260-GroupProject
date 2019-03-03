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
/*function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM category_db
              WHERE category_id = :category_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['categoryName'];
    return $category_name;
}*/

?>
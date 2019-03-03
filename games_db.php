<?php
function get_games() {
    global $db;
    $query = 'SELECT * FROM category_db
              ORDER BY category_id';
    $statement = $db->prepare($query);
    $statement->execute();
    $categories = $statement->fetchAll();
    $statement->closeCursor();
    return $categories;    
}

?>
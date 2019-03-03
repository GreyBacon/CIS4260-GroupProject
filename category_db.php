<?php
function get_categories() {             //Function that returns all the categories in the category_db
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
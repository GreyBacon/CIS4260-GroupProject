 <?php
$servername = 'mysql:host=localhost;dbname=groupproject_db';
$username = 'root';
$password = '';

try {
    $db = new PDO($servername, $username, $password);
} catch (PDOException $e) {
    echo $e;
    exit();
}
?> 
 <?php
$servername = 'mysql:host=localhost;dbname=groupproject_db';        //Connects with the SQL server, usually want to use with global $db 
$username = 'root';
$password = '';

//$conn=mysql_connect($servername, $username, $password);
//mysql_select_db($mysql_database, $conn);
//mysql_query("set names 'utf8'");
try {
    $db = new PDO($servername, $username, $password);
} catch (PDOException $e) {
    echo $e;
    exit();
}
?> 
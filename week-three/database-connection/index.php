<?php 
$config = include('configs/db.php');
$database = $config['database'];
try{
    $pdo = new PDO("mysql:host=". $database['host'] . ";dbname=" . $database['name'] , $database['user'], $database['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "A successfull connection Connected";
} catch(PDOException $e){
    echo "An error occurred: " . $e->getMessage();
}
?>
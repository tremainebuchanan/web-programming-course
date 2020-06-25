<?php 
// https://www.php.net/manual/en/intro.pdo.php - PDO
// https://phppot.com/php/php-try-catch/ - try/catch
// https://www.php.net/manual/en/control-structures.foreach.php - foreach syntax
// https://www.php.net/manual/en/function.date.php - dealing with dates
$config = include('configs/db.php');
$database = $config['database'];
try{
    // create connection to the database using database credentials.
    $pdo = new PDO("mysql:host=". $database['host'] . ";dbname=" . $database['name'] , $database['user'], $database['password']);
    //PDO::ATTR_ERRMODE - ensures that errors encountered with the database connection
    //shown/reported. 
    //PDO::ERRMODE_EXCEPTION - ensures that errors encountered with the database 
    // are thrown. 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // retrieves all records from the database
    $sql = "SELECT `id`, `first_name`, `last_name`, `email`, `created_on`, `updated_on` FROM `students`";
    $students = $pdo->query($sql)->fetchAll(); 
    echo "<h1>Students (" . sizeof($students) . ")</h1>";
    foreach ($students as $student) {
        echo $student['id'] . " " 
            .$student['first_name']. " " 
            .$student['last_name'] . " "
            .$student['email']. " "
            .date("D, M j, Y H:i:s", strtotime($student['created_on'])). " "
            .date("D, M j, Y H:i:s", strtotime($student['updated_on'])). "<br />";
    }
} catch(PDOException $e){
    echo "<h1>Error</h1>";
    echo "<p>An error occurred: " . $e->getMessage() . "</p>";
}
?>
<?php 
//https://www.w3schools.com/php/php_mysql_prepared_statements.asp - prepared statements
// https://www.php.net/manual/en/control-structures.if.php - if statement
$config = include('configs/db.php');
$database = $config['database'];
try{
    // create connection to the database using database credentials.
    $pdo = new PDO("mysql:host=". $database['host']
               .";dbname=" 
               .$database['name'],$database['user'], $database['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $sql = "INSERT INTO students (first_name, last_name, email) VALUES(:first_name, :last_name, :email)";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':first_name', $first_name);
        $statement->bindParam(':last_name', $last_name);
        $statement->bindParam(':email', $email);
        $statement->execute();
        header("Location: ../index.php", true, 303);        
    }
} catch(PDOException $e){
    echo "<h1>Error</h1>";
    echo "<p>An error occurred: " . $e->getMessage() . "</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Create Student</title>
</head>
<body>
    <section class="login-form">     
        <h1>Create Student</h1>
        <hr>     
        <form method="post" action="index.php" id="createStudent">
        <input type="text" placeholder="First Name" name="first_name">
        <input type="text" placeholder="Last Name" name="last_name"> 
        <input type="text" placeholder="Email" name="email">  
        <button type="reset">Cancel</button>     
        <button type="submit">Save</button>
        </form> 
    </section>
</body>
</html>
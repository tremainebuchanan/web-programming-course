<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Login Form</title>
</head>
<body>
    
    <section class="login-form">
        <h1>Login Form</h1>
        <hr>
        <?php $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.';?>
        <p><?php echo $text; ?></p>
      
        <form method="post" action="index.php">
            <input type="text" placeholder="Full Name" name="fullname">
            <input type="text" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">  
            <textarea name="description"></textarea>         
            <button type="submit">Login</button>
        </form> 
        
        <p>Output of Form</p>
        <?php echo 'Email: '. $_POST['email'] . 
                   '<br>Password: ' . $_POST['password'] .
                   '<br>Full Name: ' . $_POST['fullname'] . 
                   '<br>Description: '. $_POST['description'];
        ?>
    </section>

</body>
</html>
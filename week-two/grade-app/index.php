<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Grade App</title>
</head>
<body>
    <a href="/grades">Grades</a>
    <section class="login-form">
        <h1>Capture Grade</h1>
        <hr>
     
        <form method="post" action="index.php">
            <input type="text" placeholder="Name of Student" name="studentname">
            <select name="course">
                <option value="">Select Course</option>
                <option value="Mathematics">Mathematics</option>
                <option value="English A">English A</option>
                <option value="English B">English B</option>
                <option value="Geograhy">Geography</option>
            </select>
            <input type="text" placeholder="Score" name="score"> 
            <input type="text" placeholder="Letter Grade" name="grade"> 
            <textarea name="description"></textarea>         
            <button type="submit">Save Grade</button>
        </form> 
        
        <p>Output of Form</p>
        <?php echo 'Student Name: '. $_POST['studentname'] . 
                   '<br>Score: ' . $_POST['score'] .
                   '<br>Letter Grade: ' . $_POST['grade'] . 
                   '<br>Description: '. $_POST['description'] .
                   '<br>Course: ' . $_POST['course'];
        ?>
    </section>

</body>
</html>
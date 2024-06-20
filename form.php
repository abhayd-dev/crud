<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extended Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <h2>Registration Form</h2>
    <form action="formController.php" method="post">

        <label for="name">Name:</label><br/>
        <input type="text" id="name" name="name"><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="name">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        
        <label for="mobile">Mobile:</label><br>
        <input type="number" id="mobile" name="mobile"><br>
        
        <input type="submit" name="submit" value="Submit">
    </form></center>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Student Registration Form</h1>
        <form action="register.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>
            
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" required><br><br>
            
            <label for="course">Course:</label>
            <input type="text" name="course" id="course" required><br><br>
            
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
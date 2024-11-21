<html>
<head>
    <title>Email</title>
</head>
<body>

        <form >
            <head>Email</head> <br>
            <input type="Text" Email=""/> <br>
            <input type="submit" name="" value="Submit"/>
        </form>
</body>
</html>

<?php
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $errorMessages = [];

        if (empty($email)) {
            $emailErr = "Email is required";
        }
        elseif (strpos($email, "@") === false || strpos($email, ".") === false) {
            $emailErr = "Invalid email format";}
        }
    ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $name = $_POST["name"];
    $user_type = $_POST["user_type"];

    if ($password != $confirm_password) {
        echo "Passwords do not match!";
    } else {
        $user_data = "$id,$password,$name,$user_type\n";
        file_put_contents("users.txt", $user_data, FILE_APPEND);
        echo "Registration successful! <a href='login.php'>Login here</a>";
    }
}
?>

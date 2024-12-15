<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $password = $_POST["password"];
    $users = file("users.txt");

    foreach ($users as $user) {
        list($stored_id, $stored_password, $name, $user_type) = explode(",", trim($user));

        if ($stored_id == $id && $stored_password == $password) {
            $_SESSION["id"] = $stored_id;
            $_SESSION["name"] = $name;
            $_SESSION["user_type"] = $user_type;

            if ($user_type == "Admin") {
                header("Location: admin.php");
            } else {
                header("Location: user.php");
            }
            exit;
        }
    }
    echo "Invalid ID or password!";
}
?>
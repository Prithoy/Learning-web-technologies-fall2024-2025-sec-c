<?php
$servername = "localhost"; $username = "root"; $password = ""; $dbname = "job";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['contact_no']) && isset($_POST['username'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];
    $company_name = $_POST['company_name'];

    $sql = "UPDATE employees SET name='$name', contact_no='$contact_no', username='$username' WHERE id='$id' , company_name=$company_name";

    if ($conn->query($sql) === TRUE) {
        echo "Employee updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Required fields are missing";
}

$conn->close();
?>
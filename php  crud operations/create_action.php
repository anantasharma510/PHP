<?php
include 'db.php';

$name = $_POST['name'];

$sql = "INSERT INTO items (name) VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
    // Redirect to display.php
    header('Location: display.php');
    exit(); // Ensure no further code is executed
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

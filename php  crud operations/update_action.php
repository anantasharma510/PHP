<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];

$sql = "UPDATE items SET name='$name' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header('Location: display.php');
    exit(); // Ensure no further code is executed
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

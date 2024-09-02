<?php
include 'db.php';

$id = $_POST['id'];

// Validate the ID (make sure it's a number)
if (!is_numeric($id)) {
    echo "Invalid ID.";
    exit();
}

// Prepare the SQL statement to prevent SQL injection
$stmt = $conn->prepare("DELETE FROM items WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Record deleted successfully";
    header('Location: display.php'); // Redirect to display.php
    exit(); // Ensure no further code is executed
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

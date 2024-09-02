<?php
include 'db.php';

$sql = "SELECT id, name FROM items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<a  href="delete.php">Delete  Items</a>
<a  href="update.php">update  Items</a>
x
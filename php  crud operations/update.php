<!DOCTYPE html>
<html>
<head>
    <title>Update Item</title>
</head>
<body>
    <form action="update_action.php" method="post">
        <label for="id">Item ID:</label>
        <input type="text" id="id" name="id" required>
        <br>
        <label for="name">New Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <input type="submit" value="Update Item">
    </form>
</body>
</html>

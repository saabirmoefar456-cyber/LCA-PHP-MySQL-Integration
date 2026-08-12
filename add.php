<?php
require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $department = $_POST['department'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("INSERT INTO staff (first_name, last_name, department, email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $first_name, $last_name, $department, $email);
    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>AfriStaff - Add Staff Member</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add New Staff Member</h1>
    <form method="POST" action="add.php">
        <label>First Name:</label>
        <input type="text" name="first_name" required>

        <label>Last Name:</label>
        <input type="text" name="last_name" required>

        <label>Department:</label>
        <input type="text" name="department" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <button type="submit">Add Staff Member</button>
    </form>
    <a href="index.php">Back to Staff Directory</a>
</body>
</html>
<?php
require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $department = $_POST['department'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("UPDATE staff SET first_name = ?, last_name = ?, department = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $first_name, $last_name, $department, $email, $id);
    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
    exit;
}

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM staff WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$staff = $result->fetch_assoc();
$stmt->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>AfriStaff - Edit Staff Member</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Staff Member</h1>
    <form method="POST" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $staff['id']; ?>">

        <label>First Name:</label>
        <input type="text" name="first_name" value="<?php echo htmlspecialchars($staff['first_name']); ?>" required>

        <label>Last Name:</label>
        <input type="text" name="last_name" value="<?php echo htmlspecialchars($staff['last_name']); ?>" required>

        <label>Department:</label>
        <input type="text" name="department" value="<?php echo htmlspecialchars($staff['department']); ?>" required>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($staff['email']); ?>" required>

        <button type="submit">Update Staff Member</button>
    </form>
    <a href="index.php">Back to Staff Directory</a>
</body>
</html>
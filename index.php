<?php
require_once 'config/db.php';

$sql = "SELECT * FROM staff";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>AfriStaff - Staff Directory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>AfriStaff Staff Directory</h1>
    <a href="add.php">Add New Staff Member</a>

    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Department</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['first_name']); ?></td>
            <td><?php echo htmlspecialchars($row['last_name']); ?></td>
            <td><?php echo htmlspecialchars($row['department']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this staff member?');">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
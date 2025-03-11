<?php
require 'database.php';

// Delete an enquiry
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM enquiries WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: enquiries.php");
}

// Fetch all enquiries
$result = $conn->query("SELECT * FROM enquiries ORDER BY submitted_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Manage Enquiries</title>
</head>
<body>
    <h2>Enquiry Management</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Event Type</th>
            <th>Location</th>
            <th>Event Date</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['event_type'] ?></td>
            <td><?= $row['location'] ?></td>
            <td><?= $row['event_date'] ?></td>
            <td><?= $row['message'] ?></td>
            <td>
                <a href="edit_enquiry.php?id=<?= $row['id'] ?>">Edit</a> | 
                <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

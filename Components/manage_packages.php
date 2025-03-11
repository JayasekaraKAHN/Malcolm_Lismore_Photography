<?php
include 'database.php';

$sql = "SELECT * FROM pricing_packages";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Pricing Packages</title>
</head>
<body>
    <h2>Pricing Packages</h2>
    <a href="add_package.html">Add New Package</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Service Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['service_name'] ?></td>
            <td>$<?= $row['price'] ?></td>
            <td><?= $row['description'] ?></td>
            <td>
                <a href="edit_package.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="delete_package.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php
include 'database.php';

echo "<h2>Manage Gallery</h2>";
echo "<a href='add_image.php'>Upload New Image</a><br><br>";

$result = $conn->query("SELECT id, title, category FROM gallery ORDER BY id DESC");

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Title</th><th>Category</th><th>Actions</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['title']) . "</td>";
        echo "<td>" . htmlspecialchars($row['category']) . "</td>";
        echo "<td>
                <a href='edit_image.php?id=" . $row['id'] . "'>Edit</a> |
                <a href='delete_image.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No images found.";
}
?>
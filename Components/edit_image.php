<?php
include 'database.php';

// Get image ID from URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT * FROM gallery WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        die("Image not found.");
    }
} else {
    die("Invalid request.");
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    if (!empty($_FILES["image"]["tmp_name"])) {
        $image = file_get_contents($_FILES["image"]["tmp_name"]);
        $imageType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

        // Validate image type
        $allowed_types = ['jpg', 'jpeg', 'png'];
        if (!in_array($imageType, $allowed_types)) {
            die("Error: Only JPG, JPEG, and PNG files are allowed.");
        }

        // Update image with new file
        $stmt = $conn->prepare("UPDATE gallery SET title=?, description=?, category=?, image=?, image_type=? WHERE id=?");
        $stmt->bind_param("sssssi", $title, $description, $category, $image, $imageType, $id);
    } else {
        // Update without changing image
        $stmt = $conn->prepare("UPDATE gallery SET title=?, description=?, category=? WHERE id=?");
        $stmt->bind_param("sssi", $title, $description, $category, $id);
    }

    if ($stmt->execute()) {
        echo "Image updated successfully!";
        header("Location: manage_gallery.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<h2>Edit Image</h2>
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required><br>
    <textarea name="description"><?php echo htmlspecialchars($row['description']); ?></textarea><br>
    <select name="category">
        <option value="Scottish Landscape" <?php if ($row['category'] == "Scottish Landscape") echo "selected"; ?>>Scottish Landscape</option>
        <option value="Natural Wildlife" <?php if ($row['category'] == "Natural Wildlife") echo "selected"; ?>>Natural Wildlife</option>
        <option value="Coastal Birds" <?php if ($row['category'] == "Coastal Birds") echo "selected"; ?>>Coastal Birds</option>
        <option value="Weddings" <?php if ($row['category'] == "Weddings") echo "selected"; ?>>Weddings</option>
        <option value="Portraits" <?php if ($row['category'] == "Portraits") echo "selected"; ?>>Portraits</option>
        <option value="Special Events" <?php if ($row['category'] == "Special Events") echo "selected"; ?>>Special Events</option>
    </select><br>
    <p>Current Image:</p>
    <img src="fetch_image.php?id=<?php echo $row['id']; ?>" width="150"><br>
    <input type="file" name="image"><br>
    <button type="submit">Update</button>
</form>

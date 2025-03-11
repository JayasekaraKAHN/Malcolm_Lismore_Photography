<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    if (!empty($_FILES["image"]["tmp_name"])) {
        $image = file_get_contents($_FILES["image"]["tmp_name"]);
        $imageType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

        // Validate file type
        $allowed_types = ['jpg', 'jpeg', 'png'];
        if (!in_array($imageType, $allowed_types)) {
            die("Error: Only JPG, JPEG, and PNG files are allowed.");
        }

        // Store in database
        $stmt = $conn->prepare("INSERT INTO gallery (title, description, category, image, image_type) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $title, $description, $category, $image, $imageType);

        if ($stmt->execute()) {
            echo "Image uploaded successfully!";
            header("Location: gallery.php");
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        die("Error: No image file uploaded.");
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Title" required><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <select name="category" required>
        <option value="Scottish Landscape">Scottish Landscape</option>
        <option value="Natural Wildlife">Natural Wildlife</option>
        <option value="Coastal Birds">Coastal Birds</option>
        <option value="Weddings">Weddings</option>
        <option value="Portraits">Portraits</option>
        <option value="Special Events">Special Events</option>
    </select><br>
    <input type="file" name="image" required><br>
    <button type="submit">Upload</button>
</form>
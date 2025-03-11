<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Convert to integer for security
    $stmt = $conn->prepare("SELECT image, image_type FROM gallery WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        header("Content-Type: image/" . $row['image_type']);
        echo $row['image']; // Output the image binary data
    } else {
        http_response_code(404);
        echo "Image not found.";
    }
} else {
    http_response_code(400);
    echo "Invalid request.";
}
?>

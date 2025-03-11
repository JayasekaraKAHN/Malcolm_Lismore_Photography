<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete from database
    $sql = "DELETE FROM gallery WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Image deleted successfully!";
    } else {
        echo "Error deleting: " . $conn->error;
    }
}
?>

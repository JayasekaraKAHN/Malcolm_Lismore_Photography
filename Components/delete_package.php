<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM pricing_packages WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: manage_packages.php?message=Package deleted successfully");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>

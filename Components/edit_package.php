<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM pricing_packages WHERE id=$id");
    $package = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $service_name = $_POST['service_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE pricing_packages SET 
            service_name='$service_name', 
            price='$price', 
            description='$description' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: manage_packages.php?message=Package updated successfully");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Package</title>
</head>
<body>
    <h2>Edit Package</h2>
    <form action="edit_package.php" method="POST">
        <input type="hidden" name="id" value="<?= $package['id'] ?>">
        
        <label>Service Name:</label>
        <input type="text" name="service_name" value="<?= $package['service_name'] ?>" required>
        
        <label>Price:</label>
        <input type="number" name="price" step="0.01" value="<?= $package['price'] ?>" required>
        
        <label>Description:</label>
        <textarea name="description" required><?= $package['description'] ?></textarea>
        
        <button type="submit">Update Package</button>
    </form>
</body>
</html>

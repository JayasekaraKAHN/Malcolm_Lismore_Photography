<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service_name = $_POST['service_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "INSERT INTO pricing_packages (service_name, price, description) 
            VALUES ('$service_name', '$price', '$description')";

    if ($conn->query($sql) === TRUE) {
        header("Location: manage_packages.php?message=Package added successfully");
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
<form action="add_package.php" method="POST">
    <label>Service Name:</label>
    <input type="text" name="service_name" required>
    
    <label>Price:</label>
    <input type="number" name="price" step="0.01" required>
    
    <label>Description:</label>
    <textarea name="description" required></textarea>
    
    <button type="submit">Add Package</button>
</form>

<?php
require 'database.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM enquiries WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$enquiry = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event_type = $_POST['event_type'];
    $location = $_POST['location'];
    $event_date = $_POST['event_date'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("UPDATE enquiries SET name=?, email=?, phone=?, event_type=?, location=?, event_date=?, message=? WHERE id=?");
    $stmt->bind_param("sssssssi", $name, $email, $phone, $event_type, $location, $event_date, $message, $id);
    
    if ($stmt->execute()) {
        header("Location: enquiries.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Enquiry</title>
</head>
<body>
    <h2>Edit Enquiry</h2>
    <form method="post">
        Name: <input type="text" name="name" value="<?= $enquiry['name'] ?>" required><br>
        Email: <input type="email" name="email" value="<?= $enquiry['email'] ?>" required><br>
        Phone: <input type="text" name="phone" value="<?= $enquiry['phone'] ?>" required><br>
        Event Type: <input type="text" name="event_type" value="<?= $enquiry['event_type'] ?>" required><br>
        Location: <input type="text" name="location" value="<?= $enquiry['location'] ?>" required><br>
        Event Date: <input type="date" name="event_date" value="<?= $enquiry['event_date'] ?>" required><br>
        Message: <textarea name="message" required><?= $enquiry['message'] ?></textarea><br>
        <button type="submit">Update Enquiry</button>
    </form>
</body>
</html>

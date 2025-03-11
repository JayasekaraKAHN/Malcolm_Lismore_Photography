<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event_type = $_POST['event_type'];
    $location = $_POST['location'];
    $event_date = $_POST['event_date'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO enquiries (name, email, phone, event_type, location, event_date, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $phone, $event_type, $location, $event_date, $message);
    
    if ($stmt->execute()) {
        echo "<script>alert('Enquiry submitted successfully!');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Enquiry Form</title>
</head>
<body>
    <h2>Photography Enquiry Form</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Phone: <input type="text" name="phone" required><br>
        Event Type: 
        <select name="event_type">
            <option value="Wedding">Wedding</option>
            <option value="Portrait">Portrait</option>
            <option value="Special Event">Special Event</option>
        </select><br>
        Location: <input type="text" name="location" required><br>
        Event Date: <input type="date" name="event_date" required><br>
        Message: <textarea name="message" required></textarea><br>
        <button type="submit">Submit Enquiry</button>
    </form>
</body>
</html>

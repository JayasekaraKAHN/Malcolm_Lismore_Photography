<?php
include 'database.php';

$sql = "SELECT * FROM pricing_packages ORDER BY price ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Photography Pricing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        .pricing-table {
            width: 60%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        .pricing-table th, .pricing-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .pricing-table th {
            background-color: #f2f2f2;
        }
        .package-card {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <h2>Photography Packages & Pricing</h2>

    <?php if ($result->num_rows > 0) { ?>
        <table class="pricing-table">
            <tr>
                <th>Service</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= htmlspecialchars($row['service_name']) ?></td>
                <td>$<?= number_format($row['price'], 2) ?></td>
                <td><?= nl2br(htmlspecialchars($row['description'])) ?></td>
            </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <p>No packages available at the moment. Please check back later.</p>
    <?php } ?>

    <br>
    <a href="enquiry.php">Book Now</a>
</body>
</html>

<?php $conn->close(); ?>

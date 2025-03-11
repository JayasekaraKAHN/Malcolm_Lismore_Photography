<?php
include 'database.php';

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        /* Navigation Styles */
        .section-nav {
            text-align: center;
            margin: 20px 0;
        }

        .section-nav ul {
            list-style: none;
            padding: 0;
        }

        .section-nav li {
            display: inline;
            margin: 0 15px;
        }

        .section-nav a {
            font-weight: bold;
            color: #171717; /* Use --text-dark variable */
            text-decoration: none;
            transition: color 0.3s;
        }

        .section-nav a:hover {
            color: #525252; /* Use --text-light variable */
        }

        /* Category Titles */
        h2 {
            font-size: 24px;
            color: #333;
            margin-top: 40px;
            border-bottom: 2px solid #555;
            padding-bottom: 10px;
            text-transform: uppercase;
            text-align: center;
        }

        /* Subcategory Titles */
        h3 {
            font-size: 20px;
            color: #444;
            margin-top: 20px;
            text-transform: uppercase;
            text-align: center;
        }

        /* Gallery container */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 20px;
            padding: 10px;
        }

        /* Individual gallery items */
        .gallery-item {
            border-radius: 0px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        /* Images */
        .gallery-item img {
            width: 100%;
            height: auto;
            border-bottom: 2px solid #ddd;
            border-radius: 10px 10px 0 0;
        }

        /* Image titles */
        .gallery-item p {
            font-size: 16px;
            color: #555;
            padding: 8px;
            margin: 0;
        }
    </style>
</head>
<body>';

// Add header
echo '<header class="header" id="home">
      <nav>
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#">
              <img src="assets/logo-white.png" alt="logo" />
            </a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home">HOME</a></li>
          <li><a href="#about">ABOUT US</a></li>
          <li><a href="#service">SERVICES</a></li>
          <li class="nav__logo">
            <a href="#">
              <img src="assets/logo-white.png" alt="logo" />
            </a>
          </li>
          <li><a href="#blog">BLOG</a></li>
          <li><a href="#blog">WEDDINGS</a></li>
          <li><a href="#contact">CONTACT US</a></li>
          <li><a href="#login" class="login-btn">LOGIN</a></li> 
        </ul>
      </nav>
    </header>';

// Add navigation for sections
echo '<nav class="section-nav">
    <ul>
        <li><a href="#wildlife">Wildlife Photography</a></li>
        <li><a href="#weddings">Wedding Photography</a></li>
    </ul>
</nav>';

echo '<div class="section__container" id="wildlife">';
echo '<h2>Wildlife Photography</h2>';

// Subcategory: Natural Wildlife
echo '<h3>Natural Wildlife</h3>';
$stmt = $conn->prepare("SELECT id, title FROM gallery WHERE category = 'Natural Wildlife'");
$stmt->execute();
$result = $stmt->get_result();
echo "<div class='gallery'>";
while ($row = $result->fetch_assoc()) {
    echo "<div class='gallery-item'>";
    echo "<img src='fetch_image.php?id=" . $row['id'] . "' width='150'>";
    echo "<p>" . htmlspecialchars($row['title']) . "</p>";
    echo "</div>";
}
echo "</div>";

// Subcategory: Birds
echo '<h3>Bird Photography</h3>';
$stmt = $conn->prepare("SELECT id, title FROM gallery WHERE category = 'Birds'");
$stmt->execute();
$result = $stmt->get_result();
echo "<div class='gallery'>";
while ($row = $result->fetch_assoc()) {
    echo "<div class='gallery-item'>";
    echo "<img src='fetch_image.php?id=" . $row['id'] . "' width='150'>";
    echo "<p>" . htmlspecialchars($row['title']) . "</p>";
    echo "</div>";
}
echo "</div>";

echo '</div>'; // End of wildlife section

echo '<div class="section__container" id="weddings">';
echo '<h2>Wedding Photography</h2>';

// Subcategory: Bridal Portraits
echo '<h3>Bridal Portraits</h3>';
$stmt = $conn->prepare("SELECT id, title FROM gallery WHERE category = 'Bridal Portraits'");
$stmt->execute();
$result = $stmt->get_result();
echo "<div class='gallery'>";
while ($row = $result->fetch_assoc()) {
    echo "<div class='gallery-item'>";
    echo "<img src='fetch_image.php?id=" . $row['id'] . "' width='150'>";
    echo "<p>" . htmlspecialchars($row['title']) . "</p>";
    echo "</div>";
}
echo "</div>";

// Subcategory: Reception Moments
echo '<h3>Reception Moments</h3>';
$stmt = $conn->prepare("SELECT id, title FROM gallery WHERE category = 'Reception Moments'");
$stmt->execute();
$result = $stmt->get_result();
echo "<div class='gallery'>";
while ($row = $result->fetch_assoc()) {
    echo "<div class='gallery-item'>";
    echo "<img src='fetch_image.php?id=" . $row['id'] . "' width='150'>";
    echo "<p>" . htmlspecialchars($row['title']) . "</p>";
    echo "</div>";
}
echo "</div>";

echo '</div>'; // End of weddings section

// Internal script for smooth scrolling
echo '<script>
    document.querySelectorAll(".section-nav a").forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            target.scrollIntoView({
                behavior: "smooth"
            });
        });
    });
</script>';

echo '</body></html>';
?>
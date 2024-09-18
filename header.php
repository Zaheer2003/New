<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/my-pic.jpg">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
</head>
<body>
<nav id="desktop-nav">
    <div class="logo">Mohamed Zaheer</div>
    <div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Project.php">Projects</a></li>
            <li><a href="Experience.php">Experience</a></li>
            <li><a href="Certificates.php">Certificates</a></li>
            <li><a href="Contacts.php">Contact</a></li>
        </ul>
    </div>
</nav>
<nav id="hamburger-nav">
    <div class="logo">Mohamed Zaheer</div>
    <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="menu-links">
            <li><a href="index.php" onclick="toggleMenu()">Home</a></li>
            <li><a href="About.php" onclick="toggleMenu()">About</a></li>
            <li><a href="Project.php" onclick="toggleMenu()">Projects</a></li>
            <li><a href="Experience.php" onclick="toggleMenu()">Experience</a></li>
            <li><a href="Certificates.php" onclick="toggleMenu()">Certificates</a></li>
            <li><a href="Contacts.php" onclick="toggleMenu()">Contact</a></li>
        </div>
    </div>
</nav>

<?php
session_start();
include 'config/db.php';


if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username']; 
?>
<nav class="nike-navbar">
    <div class="logo">
        <img src="assets/images/nike-swoosh.png" alt="Nike Logo" width="60">
    </div>
    <ul class="nav-links">
        <li><a href="#">New Releases</a></li>
        <li><a href="#">Men</a></li>
        <li><a href="#">Women</a></li>
        <li><a href="#">My Locker</a></li> </ul>
    <div class="user-profile">
        <span>Hello, <?php echo $username; ?></span>
        <a href="actions/logout.php">Logout</a>
    </div>
</nav>
<main class="shop-container">
    <h2>New Nike Releases</h2>
    <div class="product-grid">
        <div class="product-card">
            <img src="assets/images/air-force-1.jpg" alt="Air Force 1">
            <h3>Air Force 1 '07</h3>
            <p>₱5,495</p>
            <button class="buy-btn">Add to Bag</button>
        </div>
    </div>
</main>
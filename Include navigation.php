<!DOCTYPE html>
<html>
<head>
    <!-- Your head content here -->
</head>
<body>

<?php include 'navigation.php'; ?>

<div class="navbar">
    <a href="mainpage.php" class="nav-item <?php echo $currentPage == 'home' ? 'active' : ''; ?>">Home</a>
    <a href="service.php" class="nav-item <?php echo $currentPage == 'about' ? 'active' : ''; ?>">About</a>
    <a href="#" class="nav-item <?php echo $currentPage == 'services' ? 'active' : ''; ?>">Services</a>
</div>

<!-- Rest of your page content here -->

</body>
</html>

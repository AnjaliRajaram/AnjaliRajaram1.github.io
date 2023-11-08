<?php
// Get the current page file name
$currentFile = basename($_SERVER['PHP_SELF']);

// Set the $currentPage variable based on the current page
if ($currentFile == 'mainpage.php') {
    $currentPage = 'home';
} elseif ($currentFile == 'service.php') {
    $currentPage = 'about';
} else {
    $currentPage = 'services';
}
?>
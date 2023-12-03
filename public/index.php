<?php
session_start();
$base_path = __DIR__;
include dirname($base_path) . '/templates/header.php';
include dirname($base_path) . '/templates/main.php';
include dirname($base_path) . '/templates/tratamientos.php';
include dirname($base_path) . '/templates/aboutus.php';
include dirname($base_path) . '/templates/contact-us.php';
include dirname($base_path) . '/templates/footer.php';
?>

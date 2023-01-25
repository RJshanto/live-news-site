<?php 

session_start();
session_destroy();

header("location: http://localhost/php-nirob/live_news_site/admin/login_page.php");
die();
?>
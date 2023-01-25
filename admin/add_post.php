<?php
session_start();
if(isset($_SESSION['adminrole']) && $_SESSION['adminrole']!=1){
  header("location: http://localhost/php-nirob/live_news_site/admin/dashbord.php");
die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="addpost.css">
    <title>Add post </title>
</head>
<body>
    <div class="container">

    <?php include 'header_section.php'; ?>

<?php include 'navbar.php'; ?>

<div class="addpost_section">
    <form action="">
        <div class="md-3 mt-3">
            <label for=""></label>
        </div>
    </form>
</div>

    </div>
    
</body>
</html>
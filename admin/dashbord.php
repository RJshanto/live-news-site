<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="dashbord.css">
    <title>Dashbord</title>
</head>
<body>

<?php 
session_start();
if($_SESSION['email']==true){



?>
    <div class="container">

    <?php include 'header_section.php'; ?>

    <?php include 'navbar.php'; ?>

 




<table class="table table-dark table-hover" style="margin-top: 5px;">
    <thead>
      <tr>
        <th>Post</th>
        <th>Category</th>
        <th>Author</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
  
</div>

<?php }else{
  
  header("location: http://localhost/php-nirob/live_news_site/admin/login_page.php");
} 



?>

 
 
</body>
</html>
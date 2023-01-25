

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
    <link rel="stylesheet" href="add_user.css">
    <title>Add user page</title>
</head>
<body>


    <div class="container">

    
    <?php include 'header_section.php'; ?>

    <?php include 'navbar.php'; ?>

    
        <div class="reg_section">
            <div class="image">image</div>
            
            <form action="adduser_data.php" method="post">
  <div class="mb-3 mt-3">
    <label for="fname" class="form-label">Fast Name:</label>
    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Fast Name">
  </div>
  <div class="mb-3">
    <label for="lname" class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" >
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" >
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter password" >
  </div>
  <div class="mb-3">
  <label for="adminrole">Admin Role:</label>
  <select name="adminrole" id="adminrole">
    <option value="" selected disabled>select here</option>

    <?php 
    
    $con = mysqli_connect("localhost","root","","news-site") or die("connection failed");
    $sql = "SELECT * FROM role";
    $result = mysqli_query($con, $sql) or die("Query failed");

    if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){

    
    
    ?>
    <option value="<?php echo $row['id']; ?>"><?php echo $row['role']; ?></option>
 
    <?php   } } ?>
    
  
  </select>
  </div>
  <input type="submit" name="submit" value="submit" class="btn btn-primary"></input>
</form>
           
        </div>
    </div>

    
</body>
</html>
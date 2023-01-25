
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
    <link rel="stylesheet" href="dashbord.css">
    <title>user list</title>
</head>
<body>


    <div class="container">
        
    <?php include 'header_section.php'; ?>

<?php include 'navbar.php'; ?>

<?php 
    include 'connection.php';
    $sql = "SELECT * FROM add_user JOIN role WHERE add_user.adminrole=role.id";
    $result = mysqli_query($con, $sql) or die("Query failed");

    if(mysqli_num_rows($result)>0){

      
      if (isset($_REQUEST['delete_m_data'])) {
        $check_data = $_REQUEST['check_data'];
        $all_marked = implode(",", $check_data);

        $sql2 = "DELETE FROM `add_user` WHERE uid in ($all_marked)";

        $result2 = mysqli_query($con, $sql2) or die(" Query Unsuccesful");
       
    header("location: http://localhost/php-nirob/live_news_site/admin/user.php");
      }

    

      ?>

      <form action="" method="post">

<table class="table table-dark table-hover" style="margin-top: 5px;">
    <thead>
      <tr>
        <th>ID</th>
        <th>Fast name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Role</th>
        
        <th><input type="submit" name="delete_m_data" class="btn btn-success" value="Delete All"></th>
        
      </tr>
    </thead>
    <tbody>

  <?php 
      while($row=mysqli_fetch_assoc($result)){

    
    
    ?>
      <tr>
        <td><?php echo $row['uid']?></td>
        <td><?php echo $row['f_name']?></td>
        <td><?php echo $row['l_name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['role']?></td>
        <td><input type="checkbox" name="check_data[]" value="<?php echo $row['uid'] ?>"></td>
     </tr>
     
      <?php }} ?>
    </tbody>
  </table>
  </form>
  
    </div>
</body>
</html>
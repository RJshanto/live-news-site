
<?php 
if(isset($_REQUEST['submit'])){


    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $role = $_REQUEST['adminrole'];
if($fname && $lname && $email && $pass && $role){


    
$con = mysqli_connect("localhost","root","","news-site")or die("connection failed");
$sql = " INSERT INTO add_user(f_name, l_name ,email,password,adminrole) VALUES ('{$fname}','{$lname}','{$email}','{$pass}','{$role}')";

$result = mysqli_query($con,$sql) or die("Query Unseccesful");

header("location: http://localhost/php-nirob/live_news_site/admin/user.php");
}else{
    
    header("location: http://localhost/php-nirob/live_news_site/admin/add_user.php");
    
    }
    
}else{
    
header("location: http://localhost/php-nirob/live_news_site/admin/add_user.php");

}

?>

<?php
session_start();

if (isset($_REQUEST['submit'])) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pass'];

    if ($email && $password) {
        include 'connection.php ';
        $sql = "SELECT*FROM add_user WHERE email='$email' && password ='$password'";
        $result = mysqli_query($con, $sql) or die("Query failed");

        if (mysqli_num_rows($result)>0) {
            $row = mysqli_fetch_assoc($result);

            $_SESSION['email'] = $email;
            $_SESSION['adminrole'] = $row['adminrole'];

            header("location: http://localhost/php-nirob/live_news_site/admin/dashbord.php");
        } else {

            echo "faild";
        }
    } else {

        header("location: http://localhost/php-nirob/live_news_site/admin/login_page.php");
    }
} else {

    header("location: http://localhost/php-nirob/live_news_site/admin/login_page.php");
}

?>
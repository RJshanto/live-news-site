    




<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
   
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto ">
      <li class="nav-item"><button class="btn  btn-outline-info " type="button">
          <a class="text-light" href="dashbord.php">HOME</a></button>
        </li>
<?php
if(isset($_SESSION['adminrole']) && $_SESSION['adminrole']==1){



?>

        <li class="nav-item"><button class="btn  btn-outline-info " type="button">
          <a class="text-light" href="user.php">Users</a></button>
        </li>

 
        <li class="nav-item"><button class="btn  btn-outline-info " type="button">
          <a class="text-light" href="add_user.php">ADD USER</a></button>
        </li>
        <li class="nav-item"><button class="btn  btn-outline-info " type="button">
          <a class="text-light" href="add_post.php">ADD POST</a></button>
        </li>
       
        <?php } ?>
        
      </ul>
    
    </div>
    <form class="d-flex justify-content-end">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
  </div>
</nav>
<div class="d-flex justify-content-end" style="margin-top: 35px;">
 
<button class="btn  btn-primary " type="button">
          <a class="text-light" href="logout.php">log out</a></button>
</div>
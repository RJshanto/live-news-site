<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="login_page.css">
    <title>LOgin page</title>
</head>
<body>

    <div class="container">
        <div class="login_section">
            <div class="image">image</div>
            <div class="form">
            <form action="login_data.php">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
    </div>

    
</body>
</html>
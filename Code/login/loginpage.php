<?php
session_start();

// Hardcoded username and password for demonstration
$validUsername = 'demo';
$validPassword = 'password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the provided credentials are valid
    if ($username === $validUsername && $password === $validPassword) {
        // Authentication successful
        $_SESSION['username'] = $username;
        header('Location: ../index.php'); // Redirect to the dashboard or home page
        exit();
    } else {
        // Authentication failed
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="loginstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login </h2>
        
        <div class="card my-5">
          <form class="card-body cardbody-color p-lg-5" method="POST" action="">
            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" name="username" aria-describedby="emailHelp"
                placeholder="User Name">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
          
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100" style= "border-color: black;">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not Registered? 
              <a href="register.php" class="text-dark fw-bold"> Create an Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEX/ndQFf/PtG9L8=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>
</html>

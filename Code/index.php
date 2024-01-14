<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width, height=device-height, target-densitydpi=device-dpi">
  <title>Roomiee</title>

  <!-- Include Bootstrap CSS only within the head section -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Your custom stylesheet -->
  <link rel="stylesheet" href="style.css">
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var navbar = document.getElementById('navbarNav');
  
      navbar.addEventListener('show.bs.collapse', function () {
        var d1 = document.getElementById('d1');
        d1.style.paddingTop = '250px'; // You can adjust this value according to your needs
      });
  
      navbar.addEventListener('hidden.bs.collapse', function () {
        var d1 = document.getElementById('d1');
        d1.style.paddingTop = '0px'; // Reset to your original value
      });
    });
  </script>
  

</head>


<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid d-flex justify-content-center">
    <!-- Center the logo using 'd-flex justify-content-center' -->
    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" height="30px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#d1">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#d2">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#d3">Explore</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#d4">Contact</a>
        </li>
      </ul>

      <?php
            session_start();
            if (isset($_SESSION['username'])) {
                // User is logged in, show a different set of buttons or nothing
            } else {
                // User is not logged in, show login and signup buttons
                ?>
                <div class="ms-auto" style="background-color: white;">
                     <button type="button" class="btn btn-outline-primary" onclick="window.location.href='login/loginpage.php'">Login</button>
                    <button type="button" class="btn btn-outline-primary" style="margin-right: 30px;">Signup</button>
                </div>
                <?php
            }
            ?>
     
      </div>
    </div>
  </div>
</nav>


<div class="mainpage">

  <div class="d1" id="d1">
    <div class="container-fluid maintextcont">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="maintext">
            <h1 class="display-md-3 custom-font  ">Welcome to Roomiee<br>Your Ultimate Room Rental Platform</h1>
            <br>
          </div>
          <div class="smalltextcont">
            <h4 class="fs-md-4 fs-lg-3 custom-font ">Looking for a room to rent or share in your preferred area?
              Look no further!<br> Roomiee is here to simplify your search and connect you with the ideal living space
            </h4>

          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 homepageimgcont">
          <img src="images/model1.png" alt="model1" class="model1 img-fluid">
        </div>
      </div>
    </div>
  </div>




  <div class="d2" id="d2">

    <div class="container-fluid maintextcont">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <h2 class="fs-md-4 fs-lg-2 custom-font">Why Roomiee?</h2>
          
          <br>

          <h3 class="fs-md-4 fs-lg-3 custom-font">Effortless Search</h3>
          <h4 class = "fs-md-4 fs-lg-3 custom-font">Easily browse through a variety of room listings in your desired location.</h4>
          
          <br>

          <h3 class="fs-md-4 fs-lg-3 custom-font">Direct Communication</h3>
          <h4 class = "fs-md-4 fs-lg-3 custom-font">Connect directly with room owners through our secure and user-friendly messaging system.</h4>
          
          <br>
          <h3 class="fs-md-4 fs-lg-3 custom-font">Detailed Listings</h3>
          <h4 class = "fs-md-4 fs-lg-3 custom-font">Explore comprehensive room details, including high-quality photos, amenities, and rental information.</h4>
          <br>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 homepageimgcont">
          <img src="images/model2.png" alt="model1" class="model1 img-fluid">
        </div>
      </div>
    </div>
  </div>



  <div class="d3" id="d3">
    <div class="container-fluid explore-cont">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <h2 class="fs-md-4 fs-lg-2 custom-font text-left">Explore Roomiee</h2>
          <br>
          <h3 class="fs-md-4 fs-lg-2 custom-font text-left">Find Your Ideal Living Space</h3>
          <br>
          <h4 class="fs-md-4 fs-lg-3 custom-font text-left"> Welcome to Roomiee's Explore page, where your perfect
            room awaits!<br>
            Discover a variety of available rooms for rent or sharing in your preferred area.</h4>
          <form class="search-bar">
            <div class="input-group mb-3 col-lg-8 col-md-8 col-sm-12">
              <input type="text" class="form-control" placeholder="Search for rooms...">
              
              <div class="input-group-append">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Type
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Rent</a>
                  <a class="dropdown-item" href="#">Sharing</a>
                  
                  <!-- Add more filters as needed -->
                </div>
              </div>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  City
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Filter 1</a>
                  <a class="dropdown-item" href="#">Filter 2</a>
                  <a class="dropdown-item" href="#">Filter 3</a>
                  <!-- Add more filters as needed -->
                </div>
              </div>

              
              <button class="btn btn-outline-secondary" type="button">Search</button>


              
            </div>
          </form>
          <br>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <img src="images/model3.png" alt="Explore Image" class="explore-image img-fluid">
        </div>
      </div>
    </div>
  </div>


<div class="d4">
  <img src="thumbnail-image.jpg" alt="Thumbnail" class="thumbnail">
    <div class="details">
      <div class="location">Location: City, State</div>
      <div class="type">Type: Single Room / Entire Apartment</div>
      <div class="rent">Rent: ₹12,000 per month</div>
      <div class="amenities">Amenities: Furnished, Kitchen Access, Wi-Fi</div>
      <div class="description">
        Description: Discover your cozy haven in the heart of...
      </div>
      <div class="buttons">
        <button class="button view-details ">View Details</button>
        <button class="button contact-owner">Contact Owner</button>
        <button class="button save-to-favorites">Save to Favorites</button>
      </div>
    </div>
</div>

  <!-- Include jQuery and Bootstrap JS at the end of the body -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEX/ndQFf/PtG9L8=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  </div>
</body>

</html>
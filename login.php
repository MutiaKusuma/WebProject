<?php
// Define the email and password for authentication
$mail = 'mutia.kusuma@ogr.sakarya.edu.tr';
$pass = 'b221210590';

$message = ''; // Initialize an empty message.

// Check if the form is submitted
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the email format
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      // If email is not valid, set an error message
      $message = '<div class="message-box warning">Error, please enter a valid email address</div>';
    }
    else{
       // If email is valid, check if it matches the predefined email and password
      if($email == $mail && $password == $pass){
          // If login is successful, set a welcome message and redirect to the home page
          echo '<script>alert("Welcome, Mutia Kusuma!");</script>';
          echo '<script>window.location = "index.html";</script>'; // Redirect back to the home page
      }
      else{
           // If login fails, set an error message
          $message = '<div class="message-box error">Error, incorrect username or password</div>';
      }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Teknolojileri Project</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!--Custom CSS-->
    <link rel="stylesheet" href = "assets/css/style.css">

    <!-- JavaScript to display message box -->
    <script>
        // Function to show the message box if there is a message to display
        window.onload = function() {
            var messageBox = document.getElementById('message-box');
            if (messageBox && messageBox.innerHTML.trim() !== '') {
                messageBox.style.display = 'block';
            }
        };
    </script>

  </head>

<body>
  <!-- Navbar Section Start -->
  <!--HEADER-->
  <header id="full_nav">
    <div class="header">
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
          <div class="container-fluid">
             <!-- Navbar Brand Icon -->
            <a class="navbar-brand" href="#"> <i class="bi bi-flower3"></i> </a>
             <!-- Navbar Toggle Button for Mobile View -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <i class="bi bi-list"></i>
            </button>
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto" >
                <li class="nav-item">
                  <a class="nav-link" aria-current='page' href="index.html">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cv.html">CV Page</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="country.html">My Country</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="heritage.html">Heritage</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="interest.html">My Interests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Me</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Log in <i class="bi bi-box-arrow-in-right"></i></a>
              </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- Navbar Section Exit -->


  <!-- Login Page Start-->
  <section id="login-page" class="login-form">
    <div class="login-title">
      <div class="row">
        <div class="col-12 text-center">
          <div class="section-title">
              <!-- Title for the Login Page -->
              <h1 class="text-black display-5 fw-semibold">LOGIN</h1>
              <div class="line"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="login-data">
      <div class="row justify-content-center align-items-center ">
        <div class="col-lg-6 bg-light p-5 align-items-center" style="border-radius: 1rem;">
          <!-- Display message box for showing errors or success messages -->
          <!-- HTML code to display the message -->
            <?php echo $message; ?>
            <!-- Login Form -->
              <form action="" method="post" id="login-form" class="row g-3 ">  <!-- g = gather space for the form -->
                <!-- Email Input -->
                <div class="form-group col-lg-12 ">
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email" class="form-control" placeholder="ex: mutia.kusuma@ogr.sakarya.edu.tr" required>
                </div>
                 <!-- Password Input -->
                <div class="form-group col-lg-12">
                    <!-- <label for="name">Surname:</label> -->
                    <label for="password">Password:</label><br>
                    <input type="text" id="password" name="password"  class="form-control" placeholder="ex: b221210590"  required>                          </div>
                                  <!-- Submit Button -->
                <div class="form-group d-grid">
                    <button type="submit" id="submit-btn" class="button-login">LOG IN</button>
                </div>
                </div>
  
              </form>
        </div>  
      </div>
    </div>
  </section>
    <!-- Login Page End-->
    

    <!--Bootstrap-->
    <script src = "	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!--JavaScript-->
    <script src= "assets/js/main.js"></script>
  </body>
</html>
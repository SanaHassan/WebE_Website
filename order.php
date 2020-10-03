<?php
  $servername = "localhost";
$username = "root";
$password = "root";
$database = "webe";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

  $errors = [];
  $missing = [];
  if (isset($_POST['send'])){
    $expected = ['name','phonenumber','email','companyname','countryname','service','url','budget','textarea'];
    $required = ['name','email','service','phonenumber','budget'];
    $to = 'Asjad Salahuddin <salahuddinasjad9@gmail.com>';
    $subject = 'Feedback from Order-Us Form';
    $headers = [];
    $headers[] = 'From: salahuddinasjad9@gmail.com';
    $headers[] = 'Cc: sanazia700@gmail.com';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = '-fsalahuddinasjad9@gmail.com';

    require './includes/process_mail.php'; 

    // if($mailSent){
    //   header('Location: thanks.php');
    //   exit;
    }
 ?>

<!DOCTYPE html>
<html>
<head>

  <!-- Bootstrap v4.0 CDN  -->
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">


  <!-- Google FONTS CDN -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,800i&display=swap" rel="stylesheet">

  <!-- ICONS CDN -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- External CSS Style Sheet -->
  <link rel="stylesheet" type="text/css" href="order.css">

  
  <!-- MOBILE RESPONSIVE META CODE -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>WebE</title>

</head>
<body>

<!-- CODING FOR NAVIGATION BAR -->

  <nav class="navbar navbar-expand-lg navbar-dark position-static" style="background-color: rgba(34,34,34,0.3); text-transform: uppercase;">

    <a class="navbar-brand" href="index.php"><img src="logo.png" width="40px" height="40px"> Web E</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigationindex.php>
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>

        <!--Navbar Drop Down Item    -->
        

        <li class="nav-item">
          <a class="nav-link" href="pricing.php">Prices</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="work.php">Work</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
<!--NAVBAR CODING ENDED HERE  -->


<!-- ORDER NOW CODING -->

<h1 class="display-1 "><b> ORDER NOW</b></h1>

  <?php
    if($_POST && $suspect ):
  ?>
  <br>
  <br>
  <p class="text-danger display-4">Sorry For Inconvenience , Potential Attackers on website.</p>

  <?php elseif ($errors || $missing): ?>
  <p class="text-warning">Please Fix it.</p>
  <?php endif; ?>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="small" style="padding-left: 15px; padding-right: 15px; padding-top: 15px; background-color:rgba(8,68,135,0.6);border-radius:7px;">
        <hr style="border: 0.5px solid white;">
        <h3>
          <b>Your Details</b>
        </h3>
        <hr style="border: 0.5px solid white;">

<!-- FORM STARTED FROM HERE -->
        <form method="POST" action="<?= $_SERVER ['PHP_SELF'] ?>">
          <div class="form-row ">
            <div class="form-group col-md-6">
              <label for="name"><b>Name: 
                <?php
                  if ($missing && in_array('name', $missing)):
                ?>
                <span class="text-warning">Please Enter Your Name</span>
                <?php
                  endif;
                ?>
              </b></label>
              <input type="username" class="form-control" id="username1" placeholder="Name" name="name"
              <?php 
                if($errors || $missing){
                  echo 'value = "'  . htmlentities($name) . '"';
                }
              ?>
              >
            </div>
            <div class="form-group col-md-6">
              <label for="email"><b>Email:<?php
                  if ($missing && in_array('email', $missing)):
                ?>
                <span class="text-warning">Please Enter Your Email</span>
                <?php elseif (isset($errors['email'])):
                ?>
                <span class="text-warning">Invalid Email Address</span>
                <?php
                  endif;
                ?></b></label>
              <input type="email" class="form-control" id="email" placeholder="Email" name="email"
              <?php 
                if($errors || $missing){
                  echo 'value = "'  . htmlentities($email) . '"';
                }
              ?>
              >
            </div>
          </div>
          <div class="form-row ">
            <div class="form-group col-md-6">
              <label for="phonenumber"><b>Phone Number:
                <?php
                  if ($missing && in_array('phonenumber', $missing)):
                ?>
                <span class="text-warning">Enter Phone Number</span>
                <?php
                  endif;
                ?>
              </b></label>
              <input type="Number" class="form-control" id="phonenumber" placeholder="Phone Number" name="phonenumber"
              <?php 
                if($errors || $missing){
                  echo 'value = "'  . htmlentities($phonenumber) . '"';
                }
              ?>
              >
            </div>
            <div class="form-group col-md-6">
              <label for="companyname"><b>Company Name:
                <?php
                  if ($missing && in_array('companyname', $missing)):
                ?>
                <span class="text-warning">Please Enter Your Company Name</span>
                <?php
                  endif;
                ?>
              </b></label>
              <input type="text" class="form-control" id="companyname" placeholder="Company Name" name="companyname"
              <?php 
                if($errors || $missing){
                  echo 'value = "'  . htmlentities($companyname) . '"';
                }
              ?>
              >
            </div>
          </div>
          <div class="form-group">
            <label for="countryname"><b>Select Country:
              <?php
                  if ($missing && in_array('countryname', $missing)):
                ?>
                <span class="text-warning">Please Enter Your Country Name</span>
                <?php
                  endif;
                ?>
            </b></label>
            <select class="form-control" id="countryname" placeholder="Select Country" name="countryname"
            <?php 
                if($errors || $missing){
                  echo 'value = "'  . htmlentities($countryname) . '"';
                }
              ?>
            >
              <option>Karachi</option>
              <option>Dubai</option>
              <option>Austraila</option>
              <option>Canada</option>
              <option>London</option>
            </select>
          </div>
          <hr style="border: 0.5px solid white;">
          <h3>
            <b>Project Details</b>
          </h3>
          <hr style="border: 0.5px solid white;">
          <div class="form-group">
            <label for="service"><b>Select Service:
              <?php
                  if ($missing && in_array('service', $missing)):
                ?>
                <span class="text-warning">Please Enter Your Service</span>
                <?php
                  endif;
                ?>
            </b></label>
            <select class="form-control" id="service" placeholder="Select Service" name="service"
            <?php 
                if($errors || $missing){
                  echo 'value = "'  . htmlentities($service) . '"';
                }
              ?>
            >
              <option>Website Design</option>
              <option>Web Development</option>
              <option>Wordpress Development</option>
            </select>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="url"><b>Existing Website Url:</b></label>
              <input type="Url" class="form-control" id="url" placeholder="Existing Website Url" name="url"
              <?php 
                if($errors || $missing){
                  echo 'value = "'  . htmlentities($url) . '"';
                }
              ?>
              >
            </div>
            <div class="form-group col-md-6">
              <label for="budget"><b>Your Budget:
                <?php
                  if ($missing && in_array('budget', $missing)):
                ?>
                <span class="text-warning">Please Enter Your Budget</span>
                <?php
                  endif;
                ?>
              </b></label>
              <input type="text" class="form-control" id="budget1" placeholder="Your Budget in USD" name="budget"
              <?php 
                if($errors || $missing){
                  echo 'value = "'  . htmlentities($budget) . '"';
                }
              ?>
              >
            </div>
          </div>
          <div class="form-group">
            <label for="textarea"><b>Your Project Details:
              <?php
                  if ($missing && in_array('name', $missing)):
                ?>
                <span class="text-warning">Please Enter Project Details:</span>
                <?php
                  endif;
                ?>
            </b></label>
            <textarea class="form-control" id="textarea" rows="3" name="textarea"><?php 
            if ($errors || $missing){
              echo htmlentities($textarea);
            }
            ?></textarea>
          </div>
          <div>
            <button type="submit" class="btn btn-warning" style="margin-left: 220px;" name="send">Submit</button>
            <?php
                if (isset($_POST['send']))
                {
                  $sql = "INSERT INTO OrderNow (Fullname,Email,PhoneNumber,Country,Service,ExistingURL,Budget,ProjectDetails) VALUES ('".$name."','".$email."','".$phonenumber."','".$countryname."','".$service."','".$url."','".$budget."','".$textarea."')";

                  if ($conn->query($sql) === TRUE) 
                    {
                    echo "New record created successfully";
                    } 
                  else
                    {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    } 
                }
             ?>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- FORM CODING ENDED HERE -->


<div style="background-color:rgba(8,68,135,0.6);background-image: url(12.jpg); width: 500px; border-radius: 25px; margin-left: 100px;">
  <pre class="text-dark text-center">
  <?php 
  if($_POST){
    echo "Message: \n\n";
    echo htmlentities($message);
    echo "Headers: \n\n";
    echo htmlentities($headers);
  }
  ?>
  </pre>
</div>
  
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #00CCCC;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Web E</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Web E is the digital agency in Pakistan having the specialists for creating the compelling and highly interactive websites. Using our powerful strategies we have created some amazing websites for our customers and have helped them to market their business properly.

</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Quick Access</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
          <a href="index.php">Home</a>
        </p>
        <p>
          <a href="about.php">About Us</a>
        </p>
        <p>
          <a href="pricing.php">Price and packages</a>
        </p>
        <p>
          <a href="work.php">Work</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="order.php">Order Now</a>
        </p>
        <p>
          <a href="contact.php">Contact Us</a>
        </p>
        

      </div>
      <!-- Grid column -->
      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Karachi , Pakistan</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@webE.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> WebE.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<script type="text/javascript" src="jquery-3.4.1.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

  <script type="text/javascript" src="popper.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
  
  <script type="text/javascript" src="bootstrap.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>
</html>


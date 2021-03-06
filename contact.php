<!DOCTYPE html>
<html>
<head>

  <!-- Bootstrap v4.0 CDN  -->
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">


  <!-- Google FONTS CDN -->
  <link href="font-awesome.min.css" rel="stylesheet">
    <link href="prettyPhoto.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,800i&display=swap" rel="stylesheet">

  <!-- ICONS CDN -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- External CSS Style Sheet -->
  <link rel="stylesheet" type="text/css" href="contact.css">

  
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
        <li class="nav-item ">
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

        <li class="nav-item active">
          <a class="nav-link " href="contact.php">Contact Us</a>
        </li>

        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->

      </ul>

      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->

    </div>
  </nav>
  <h1 class="display-1 " style="padding-top:100px;margin-bottom:160px;"><b>CONTACT US</b><hr style="border:1.5px solid white;width:20%;"></h1>
  <BR>
   <section id="contact">
        <div class="container-fluid">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 style="color:rgb(27,54,72);">Contact Form</h1>
                        <p  style="color:rgb(27,54,72);"><b>Please Enter the desired Requirements below.</b></p>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info btn-lg" style="margin-left:210px; margin-top: 30px;">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-6">
                        <h1 style="color:rgb(27,54,72);">Our Address</h1>
                        <div class="row">
                            <div class="col-md-6" style="color:rgb(27,54,72);">
                                <address style="color:rgb(27,54,72);margin-left:30px;" >
                                    <strong>Karachi , Pakistan</strong><br>
                                    <br>
                                    info@webE.com<br>
                                    <abbr title="Phone">P:</abbr> + 01 234 567 88
                                </address>
                            </div>
                            <div class="col-md-6" style="color:rgb(27,54,72);">
                                <address style="color:rgb(27,54,72);margin-left: 30px;">
                                    <strong>Dubai, UAE.</strong><br>
                                    info@webE.com<br>
                                   
                                    <abbr title="Phone">P :</abbr> (123) 456-7890
                                </address>
                            </div>
                        </div>
                        <h1 style="color:rgb(27,54,72);">Connect with us</h1>
                        <br>
                        <div class="row" style="margin-left: 30px;">
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-facebook icon-social" style="color:rgb(27,54,72);"></i><b style="color:black;">  Facebook</b></a></li>
                                    <li><a href="#"><i class="icon-google-plus icon-social" style="color:rgb(27,54,72);"></i> <b style="color:black;">  Plus</b></a></li>
                                    <li><a href="#"><i class="icon-pinterest icon-social" style="color:rgb(27,54,72);"></i><b style="color:black;"> Pinterest</b></a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-linkedin icon-social" style="color:rgb(27,54,72);"></i><b style="color:black;"> Linkedin</b></a></li>
                                    <li><a href="#"><i class="icon-twitter icon-social" style="color:rgb(27,54,72);"></i><b style="color:black;"> Twitter</b></a></li>
                                    <li><a href="#"><i class="icon-youtube icon-social" style="color:rgb(27,54,72);"></i><b style="color:black;"> Youtube</b></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#contact-->
<br>
<br>
<br>
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
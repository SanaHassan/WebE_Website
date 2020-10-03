<!DOCTYPE html>
<html>
<head>

  <!-- Bootstrap v4.0 CDN  -->
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

  <!-- Google FONTS CDN -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,800i&display=swap" rel="stylesheet">

  <!-- ICONS CDN -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- External CSS Style Sheet -->
  <link rel="stylesheet" type="text/css" href="about.css">

  
  <!-- MOBILE RESPONSIVE META CODE -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>WebE</title>

</head>


<body>

<!-- CODING FOR NAVIGATION BAR -->

  <nav class="navbar navbar-expand-lg navbar-dark position-static" style="background-color: rgba(34,34,34,1); text-transform: uppercase;">

    <a class="navbar-brand" href="index.php"><img src="logo.png" width="40px" height="40px"> Web E</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigationindex.php>
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
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
<!--NAVBAR CODING ENDED HERE  -->

<!-- CAROUSEL CODING -->

  <div class="carousel fade-carousel slide carousel-fade" data-ride="carousel"
  data-interval="5000" id="bs-carousel">
    <!-- Overlay -->
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item slides active carousel-item">
            <div class="slide-1">
                <div class="overlay"></div>
            </div>
        </div>
        <div class="item slides carousel-item">
            <div class="slide-2">
                <div class="overlay"></div>
            </div>
        </div>
        <div class="item slides carousel-item">
            <div class="slide-3">
                <div class="overlay"></div>
            </div>
        </div>
        <div class="hero">
            <hgroup>
                 <h1>We are amazing</h1> 
                 <h3>Get start your next awesome project</h3>
            </hgroup>
            <button class="btn btn-hero btn-lg" role="button"><a href="work.php">View Our Work</a></button>
        </div>
    </div>
  </div>
<!-- CAROUSEL CODING ENDED HERE -->
  
  <br>
  <br>

<!-- GRIDVIEW -->
  <div class="container-fluid">
    <div class="row"id="whoarewe">
        <div class="col-lg-6 col-md- 8 col-sm-10 col-xs-12">
            <div>
                <img src="whoweare.png" class="image-fluid">
            </div>  
        </div>
        <div class="col-lg-6 col-md- 8 col-sm-10 col-xs-12">
            <div id = "whoarewe">
                <h3>Who are we?</h3>
                <small>We are the Web Experts</small>
                <hr>
                <p>We provide creative, innovative, and professional services for digital marketing. Having the team of expert designers, marketing professionals, web developers that can drive your business towards the desired destination and take you where you want. We have learnt that the great designs teamwork at once; it needs patience, effective teamwork and creativity to bring something that is just awesome!</p>
                <br>
                <button class="btn btn-info active"></i> Read More</button>
            </div>  
        </div>
    </div>
    <br>
    <br>
  </div>
<!-- GRID VIEW CODING ENDED HERE -->


<!-- QUOTES -->
  <div  class="container">

        <p class="approach1">OUR APPROACH</p>
        <hr class="hr1" align="left">
        <p class="ap_paragraph">We are dedicated to cater the best services for our customers. We want to use our creative skills as we have realized that our customers expect something that is extraordinary from us. In this condition it is needed that we must have a clear approach in our mind to serve our customers; allowing them to achieve their goal providing the best quality services to them.</p>

        <br>

        <p class="approach">OUR GOAL</p>
        <hr class="hr1" align="left">
        <p class="ap_paragraph">We want to bring a big smile on the face of our customers by making them visible among their competitors. Providing them with the help pursuing for the success and playing a little role in their success in the form of the web design and development to boost their business and making them a prominent brand.</p>

        <blockquote class="blockquote">
        <p class="mb-0">

            <i class="fas fa-quote-left"></i>
            We try to provide the extraordinary services; in which quality is not optional but the basic requirement; as we want to make our customers happy from our services.
            <i class="fas fa-quote-right"></i>
        </p>
            <footer class="blockquote-footer">
               Developers Team - <cite title="Source Title">Web E</cite>
            </footer>
        </blockquote>
  </div>
<!-- QUOTES CODING ENDED HERE -->

  <br>

<!-- HOW WE CREATE -->

  <h3 class="text-center headingh3">This is how we <strong>Create</strong></h3>
  <hr class="hr1" align="center">
  <small class="dreams">We are the Web Experts</small>
  <br>
  <br>


  <div class="container">      
    <div class="row no-gutters" id=howwecreate>
      <div class="col-sm-3">
          <div class="card" style="border:none;">
              <img class="card-img-top" src="analyze.png" style="width: 150px; margin-left: 25%; padding-top: 15px; ">
              <div class="card-body">
                  <h3 class="card-title">ANALYZE</h3>
                  <p class="card-text text-center text-justify">
                    First, we conduct a proper analysis using the information you have provided about your brand and making the use of our research skills to ensure that your website has all the things that are needed to stay in the competition.
                    <br>
                    <br>
                    <br>
                    <br>                              
                  </p>
              </div>
          </div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="border:none;">    
          <img class="card-img-top" src="plan.png" style="width: 150px; margin-left: 25%; ">
            <div class="card-body">
              <h3 class="card-title">PLAN</h3>
              <p class="card-text text-center text-justify ">
                Once we are done with the research and analysis, then we create a proper plan to work on your website. This includes the planning related to the design and the development that how your website would become SEO friendly and highly interactive
                <br>
                <br>
                <br>
              </p>
            </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="border:none;">
          <img class="card-img-top" src="create.png" style="width: 150px; margin-left: 25%; ">
            <div class="card-body">
              <h3 class="card-title">CREATE</h3>
              <p class="card-text text-center text-justify">
                After planning the next step is about implementing the plan to create a website that would be bringing profits for your business. This will include the different onsite changes and addition of functional designs ensuring the quality to provide you with the effective platform for your business
                <br>
              </p>
            </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="border:none;">
          <img class="card-img-top" src="deliver.png" style="width: 150px; margin-left: 25%; ">
            <div class="card-body">
              <h3 class="card-title">DELIVER</h3>
                <p class="card-text text-center text-justify">
                  We ensure to deliver the order to our customers on the time that is according to their needs having the quality that would be eliminating all sort of risks and the doubts you have about your website. We would like to receive the feedback from our customers
                  <br>
                  <br>
                  <br>
                </p>
            </div>
        </div>
      </div>
    </div>
  </div>
<!-- HOW WE CREATE CODING ENDED -->


<!-- OUR TEAM -->
  <h3 class="text-center display-2"><small style="color: rgba(94,94,94,1); ">Co</small><strong> Founders</strong></h3>
  <hr class="hr1" align="center">
  <small class="dreams" style="letter-spacing: 10px;">TEAM BINARY</small>
  <br>
  <br>

 <div class="container-fluid" style="padding-top: 20px; background-color: rgba(229,173,7,1); border-radius: 10px;">
    <div class="row ">
      <div class="col-5 offset-1" >
        <br>
        <img src="member1.jpg" alt="Sana Hassan" class="rounded-circle" style="width: 200px; height: 200px;">
        <br>
        <br>
        <h2 class="text-white"><b>ASJAD SALAHUDDIN</b></h2>
      </div>
      <div class="col-5">
        <br>
        <img src="member2.jpg" alt="Asjad Salahuddin" class="rounded-circle" style="width: 200px; height: 200px;">
        <br>
        <br>
        <h2 class="text-white"><b>SANA HASSAN</b></h2>
      </div>
      <div class="col-12">
        <br>
      </div>
    </div>
  </div>
<!-- OUR TEAM CODING ENDING HERE -->

  <br>

<!-- FOOTER CODING STARTING FROM HERE -->
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
<!-- Footer CODING ENDED HERE -->

<!-- CDNS FOR JQUERY-----POPPER.JS-----JAVASCRIPT PLUGINS -->

  <script type="text/javascript" src="jquery-3.4.1.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

  <script type="text/javascript" src="popper.min.js"></script>
 <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->

  <script type="text/javascript" src="bootstrap.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jodogo Airport Assist</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  
  <style>
  
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #ffffff;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #E8E8E8;
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: white !important;
  }
  .carousel-indicators li {
    border-color: #ffffff;
  }
  .carousel-indicators li.active {
    background-color: #ffffff;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #000000;
    z-index: 9999;
    border: 0;
    font-size: 13px !important;
    line-height: 2.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
    font-color: #32acd1;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #800080 !important;
    background-color: #fff !important;
    font-size: 15px;
    
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #800080; //#f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  \\ Added by me
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top" >
  <div class="container">
 	<div class="nav navbar-nav navbar-left">
        <a href="/"><img src="logo-small.png" alt="" style="max-height: 350px; max-width: 350px;" ></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <!--<li><a href="https://jodogoairportassist.com/blog">Blog</a></li>-->
                        <li><a href="#contact">Contact Us</a></li>
                        <li class="register"><a href="https://jodogoairportassist.com/request/create">Book Now</a></li>
                   </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://jodogoairportassist.com/main/assets/images/banner1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Shake your hand with us, Go on with a smile</h3>
        </div>      
      </div>

      <div class="item">
        <img src="https://jodogoairportassist.com/main/assets/images/banner2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Departure or Arrival, We serve you as a King</h3>
        </div>      
      </div>
      <div class="item">
        <img src="https://jodogoairportassist.com/main/assets/images/banner3.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Play your music, Your Job Done in Style!</h3>
        </div>      
      </div>
      <div class="item">
        <img  src="https://jodogoairportassist.com/main/assets/images/banner4.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Head High, We will take you to the point!</h3>
        </div>      
      </div>
      <div class="item">
        <img  src="https://jodogoairportassist.com/main/assets/images/banner5.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Skip the Q, GO for fast track</h3>
        </div>      
      </div>
      <div class="item">
        <img  src="https://jodogoairportassist.com/main/assets/images/banner6.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Leave your worries with JODOGO, fly high !</h3>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

</div>

<!-- Container (About Section) -->
 <div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-6 slideanim">
      <br><br><br><br><br><br>
      <h2>About Us</h2><br>
      <p>Story of JODOGO evolved through its founders long back and we put forward our foot formally on Jan 2020.
      We born in a challenging year but the path was defined for us much before. We are fervid on Information Technology Enable Services.
      Aiming to provide pre-eminent services and combining creativity + technology to enable zillion smiley faces.</p>
    </div>
    <div class="col-sm-4 slideanim">
     <br><br><br><br><br><br><br><br><br>
      <img  src="https://cdn.images.express.co.uk/img/dynamic/17/590x/meet-636206.jpg"/>
    </div>
  </div>
</div>
<!-- Customers say -->

<div class="jumbotron text-center">
  <div id="myCarouselCust" class="carousel slide" data-ride="carousel">
     <h2>What our customers say</h2>
     <br><br><br>
<!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarouselCust" data-slide-to="0" class="active"></li>
      <li data-target="#myCarouselCust" data-slide-to="1"></li>
      <li data-target="#myCarouselCust" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <h4>"Thank you JODOGO for your on-time and great services.With your help, I had a worry- free passage through airport. I’m glad that I chose your assistance and you did a really good job."<br><span><br><strong>Sean Parker</strong></span></h4> </div>
      <div class="item">
        <h4>"Thank you JODOGO, for your assistance given to my mother who needed wheelchair support. You guys helped her with her wheelchair access and language problems. A big thanks for your team for making her 1st airline experience simple and safe."<br><span><br><strong>Ritu Gupta</strong></span></h4>
      </div>
      <div class="item">
        <h4>"Their meet and greet service is highly appreciable. The staffs were genuinely kind and welcomed us with a flower bouquet at the decided waiting area. Good job JODOGO team.
		"<br><span><br><strong>Sonia Paul</strong></span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarouselCust" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarouselCust" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- End of customer say -->
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
<br><br><br><br><br>
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5 slideanim" >
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>1309 Coffeen Avenue <br> STE 1200 SHERIDAN <br>WY 82801</p>
      <p><span class="glyphicon glyphicon-phone"></span> <a href="https://web.whatsapp.com/send?phone=+13073171724&amp;text=Hello" style="text-decoration: none" target="_blank">+1(307) 317 1724</a></p>
      <p><span class="glyphicon glyphicon-envelope"></span><a href="mailto:info@jodogoairportassist.com" style="text-decoration: none"> info@jodogoairportassist.com</a></p>
      <p><span><a href="https://www.facebook.com/Airport-Assist-a-Jodogo-Wing-106644444288182/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
       <a href="twitter.com/jodogoassist" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
       <a href="https://www.linkedin.com/company/jodogoairportassist" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
       <a href="https://www.instagram.com/p/B9ywijjJ4WJ/?igshid=1cotue91got8k" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
       <a href="#" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
       <a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
       </span></p>            
    </div>
    <div class="col-sm-5 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="location" name="19147" placeholder="Location" type="text" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button type="button" class="btn btn-outline-light text-dark" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Copyright © 2019 Jodogo. Design & Develop by <a href="#">Jodogo.</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>
</html>
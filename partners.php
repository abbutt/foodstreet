<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>Document</title>
  <style>
    #banner {
      background: url(pictures/bannersignup.jpg);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position-x: 0;
      background-position-y: 0;
    }

    .russo {
      font-family: 'Mitr', sans-serif;
    }
  </style>
</head>

<body>
  <div class="container-fluid sticky-top bg-light">
    <div class="row">
      <div class="col">
        <!-- Image and text -->
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="index.php" style="font-family: 'Russo One', sans-serif; font-size: xx-large;">
            <img src="pictures/foodlogo.png" width="50" height="50" class="d-inline-block align-top" alt="">
            foodstreet<span class="text-danger">.</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link navbar-brand" href="#">
                  <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa fa-shopping-bag" style="font-size: large;" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <div class="container-fluid py-5" id="banner">
    <div class="row py-5">
      <div class="col-md-12">
        <h1 class="text-center display-3 text-white russo py-5">Partner with Us</h1>
        <div class="text-center py-5">
          <a href="#signupform" class="btn btn-danger btn-lg russo">Sign up now</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="russo mt-3">Our customers love good food.</h1>
        <h1 class="russo mt-3">You prepare it.</h1>
        <h1 class="russo mt-3">We bring it.</h1>
      </div>
      <div class="row mt-3">
        <div class="col-md-4">
          <div class="col shadow">
            <h2 class="russo text-danger">More revenue</h2>
            <p class="russo text-secondary">With foodstreet, you will gain an additional source of income. Our customers
              are continually searching the latest cool restaurants in their city.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col shadow">
            <h2 class="russo text-danger">Dedicated support</h2>
            <p class="russo text-secondary">Pause orders if you're feeling overwhelmed. You decide for yourself when you
              want to cook for your food lovers and are free to leave on a monthly basis.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="col shadow">
            <h2 class="russo text-danger">Constant flexibility</h2>
            <p class="russo text-secondary">From perfecting your delivery menu and sending out weekly reports, to
              improving your performance, we're here to help you every step of the way</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-danger">
    <div class="row">
      <div class="col py-5">
        <h1 class="russo text-white text-center">About foodstreet</h1>
        <p class="russo text-white text-center">We're hungry for the best things in life: delicious food, exploring the
          city and <br> bringing the first bite of food to our customers.</p>
        <p class="russo text-white text-center">foodstreet is a multi-national, fast-growing business that maintains its
          appeal as a <br> localised service with community ambition.</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="russo text-center mt-3">How it Works:</h1>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-3 text-center">
        <i class="fa fa-map-marker fa-4x text-danger" aria-hidden="true"></i>
        <p class="russo">Customers enter a delivery address via the app or website and select a restaurant nearby.</p>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa fa fa-cutlery fa-4x text-danger" aria-hidden="true"></i>
        <p class="russo">Restaurant accepts the order through the tablet we provide, and starts preparing the food for a
          specific pick up time</p>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa fa fa-motorcycle fa-4x text-danger" aria-hidden="true"></i>
        <p class="russo">Our rider arrives at the right time to collect and delivers the order within 30min after the
          order was placed.</p>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa fa fa-usd fa-4x text-danger" aria-hidden="true"></i>
        <p class="russo">foodstreet sends you the proceeds from your orders every month and provides detailed insights
          on your performance.</p>
      </div>
    </div>
    <hr class="bg-dark">
  </div>
  <div class="container-fluid bg-danger">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h1 class="russo text-white">Interested? Fill in the form below to become our partner and
            increase your revenue!</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container bg-danger" id="signupform">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <img src="pictures/foodlogo.png" class="rounded mx-auto d-block" style="width: 100px; height: 100px;">
        <h1 class="russo text-center display-2 text-white">foodstreet</h1>
        <form action="data.php" method="post">
          <div class="form-group">
            <label for="formGroupExampleInput">Business Name*</label>
            <input type="text" class="form-control" name="bname">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Business Type</label>
            <select class="custom-select" name="btype">
              <option value="restaurant">Restaurant</option>
              <option value="shop">Shop</option>
            </select>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Food Type</label>
            <select class="custom-select" name="ftype">
              <option value="desi">Desi</option>
              <option value="fastfood">Fastfood</option>
              <option value="international">International</option>
              <option value="chinese">Chinese</option>
              <option value="arabic">Arabic</option>
              <option value="turkish">Turkish</option>
              <option value="lebenese">Lebenese</option>
            </select>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">City*</label>
            <select class="custom-select" name="city">
              <option value="lahore">Lahore</option>
              <option value="karachi">Karachi</option>
              <option value="islamabad">Islamabad</option>
              <option value="sialkot">Sialkot</option>
            </select>
          </div>
          <div class="form-group">
            <label>Business Address</label>
            <input type="text" class="form-control" name="baddress">
            <small class="form-text text-white">Format: Block, street name, building name, unit number</small>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Full Name*</label>
            <input type="text" class="form-control" name="fname">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email">
            <small class="form-text text-white">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Contact</label>
            <input type="number" class="form-control" placeholder="+92" name="contact">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Menu Upload</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input">
              <label class="custom-file-label" for="customFile">Choose file</label>
              <small class="form-text text-white">Please upload a copy of your menu as per current prices for in-store purchases. Supported files such as pdf, excel, word, jpg</small>
            </div>
          </div>
          <div class="text-center p-3">
            <input type="submit" class="btn btn-light text-dark" value="Submit Form" name="okay">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col p-2">
        <h4 class="text-muted">&copy; 2020 foodstreet.</h4>
      </div>
    </div>
  </div>




  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
      $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 700, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
    </script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.3.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.3.1/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
</body>

</html>
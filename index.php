<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>foodstreet</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
  <style>
    #bg1 {
      background: url(pictures/mainbg.jpg);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    #bg2 {
      background: url(pictures/mainbg2.jpg);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .russo {
      font-family: 'Mitr', sans-serif;    
      }
   
  </style>
</head>

<body class="bg-light">
  <div class="container-fluid sticky-top bg-light">
    <div class="row">
      <div class="col">
        <!-- Image and text -->
        <nav class="navbar navbar-expand-lg navbar-light" >
          <a class="navbar-brand" id="toptext" href="index.php" style="font-family: 'Russo One', sans-serif; font-size: xx-large; display: none;">
            <img src="pictures/foodlogo.png" width="50" height="50" class="d-inline-block align-top" alt="">
            foodstreet<span class="text-danger">.</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link navbar-brand russo" href="#" data-toggle="modal" data-target="#loginModal">
                  <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                  Login | Signup
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
  <!-- Login-Modal -->
  <div class="modal fade" id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header text-center">
          <h4 class="modal-title w-100" style="font-family: 'Russo One', sans-serif;">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
            <div class="alert">
              <strong>Don't have an account?</strong> <a href="#" class="alert-link" data-dismiss="modal"
                data-toggle="modal" data-target="#signupModal">Sign Up Here.</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Sign-up-Modal -->
  <div class="modal fade" id="signupModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header text-center">
          <h4 class="modal-title w-100" style="font-family: 'Russo One', sans-serif;">Register</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
            </div>
            <div class="form-group mt-3">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password">
            </div>
            <div class="form-group mt-3">
              <label for="exampleInputPassword2">Confirm Password</label>
              <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
            <div class="alert">
              <strong>Already have an account?</strong> <a href="#" class="alert-link" data-dismiss="modal"
                data-toggle="modal" data-target="#loginModal">Log In</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row" id="bg1">
      <div class="col-md-7 py-5 mx-2 my-5">
        <h1 class="russo">It's the food you love<span class="text-secondary">, delivered</span></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-md-8 py-5 mx-2 my-5">
        <div class="input-group input-group-lg mb-3">
          <input type="text" class="form-control" placeholder="Enter full address...">
          <div class="input-group-append">
            <button class="btn btn-info russo" type="submit">Delivery</button>
            <span class="mx-2 mt-3 russo text-secondary">OR</span>
            <button class="btn btn-info russo" type="submit">Pick Up</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 py-2 mx-2 my-1">
        <h1 class="display-2 russo text-secondary">Partners</h1>
        <h4 class="russo text-secondary">You prepare the food, we handle the rest</h4>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row" id="bg2">
      <div class="col-md-5 py-5 mx-5 my-5 bg-white shadow">
        <h3 class="russo">List your restaurant on foodstreet<span class="text-danger">.</span></h3>
        <p class="russo text-secondary">Would you like thousands of new customers to taste your amazing food?<br><br> So
          would we!
          It's simple: we list your menu online, help you process orders, pick them up, and deliver them to hungry
          pandas - in a heartbeat!<br><br>
          Interested? Let's start our partnership today!</p>
        <a href="partners.php" class="btn btn-lg btn-danger float-right">Get Started</a>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 py-3 mx-2 my-1">
        <h1 class="display-2 russo text-secondary">Cities</h1>
        <h4 class="russo text-secondary">Find us in these cities and many more!</h4>
      </div>
    </div>
    <div class="row bg-light">
      <div class="col-md-3">
        <figure class="figure">
          <img src="pictures/karachi.jpg" class="figure-img img-fluid rounded"
            alt="A generic square placeholder image with rounded corners in a figure.">
          <figcaption class="figure-caption russo">Karachi</figcaption>
        </figure>
      </div>
      <div class="col-md-3">
        <figure class="figure">
          <img src="pictures/lahore.jpg" class="figure-img img-fluid rounded">
          <figcaption class="figure-caption russo">Lahore</figcaption>
        </figure>
      </div>
      <div class="col-md-3">
        <figure class="figure">
          <img src="pictures/islamabad.jpg" class="figure-img img-fluid rounded">
          <figcaption class="figure-caption russo">Islamabad</figcaption>
        </figure>
      </div>
      <div class="col-md-3">
        <figure class="figure">
          <img src="pictures/sialkot.jpg" class="figure-img img-fluid rounded">
          <figcaption class="figure-caption russo">Sialkot</figcaption>
        </figure>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="russo">Order food and groceries online from the best restaurants and shops on foodstreet.</h2>
        <p class="text-muted russo">Are you hungry? Had a long and busy day? Then foodstreet is the right place for you!
          foodstreet, offers you a long and detailed list of the best restaurants near you. Whether it is a delicious
          Pizza, Burger, Japanese or any kind of Fast Food you are craving, foodstreet has an extensive roaster of 15000
          restaurants; further, if you are in the mood for Indian, Pakistani, or Afghan cuisines, there are plenty of
          restaurants available for you to order food online with home delivery. foodstreet is available in a total of
          30 cities in Pakistan, among which are the top popular four cities: Islamabad, Lahore, and Karachi.</p>
        <h2 class="russo">What's New?</h2>
        <ul class="list-group mx-3 russo text-muted" style="list-style-type: decimal;">
          <li>Selection of premium restaurants, all kind of cuisines.</li>
          <li> High quality delivery service.</li>
          <li>Live chat feature to give App users instant help when they need it.</li>
          <li>NEW: foodstreet grocery delivery! Discover the best shops, pharmacies, bakeries and more near you.</li>
        </ul>
        <hr>
        <h3 class="russo">Frequently Asked Questions</h3>
        <h5 class="russo mt-3">How can I get foodstreet delivery?</h5>
        <p class="russo text-muted mt-3">To get foodstreet delivery, simply locate the restaurants near you by typing in
          your address, browse through a variety of restaurants and cuisines, check menus and prices, choose your dishes
          and add them to the basket. Now you only need to checkout and make the payment. Soon your delicious food will
          arrive at your doorstep!</p>
        <h5 class="russo mt-3">How can I order food in Pakistan?</h5>
        <p class="russo text-muted">To order food delivery in Pakistan, follow these simple steps:</p>
        <p class="russo text-muted ml-3"> <span class="text-dark">Find a restaurant.</span> Enter your delivery address
          in the location form to see all the places that deliver to your location. It can be your home, office, a hotel
          or even parks!
        </p>
        <p class="russo text-muted ml-3"> <span class="text-dark">Choose your dishes.</span> Browse the menu of the
          chosen restaurant, select your dishes and add them to your basket. When you are done, press the "Checkout"
          button.
        </p>
        <p class="russo text-muted ml-3"> <span class="text-dark">Checkout & Payment. </span> Check your order, payment
          method selection and exact delivery address. Simply follow the checkout instructions from there.
        </p>
        <p class="russo text-muted ml-3"> <span class="text-dark">Delivery. </span> We will send you an email and SMS
          confirming your order and delivery time. Sit back, relax and wait for piping hot food to be conveniently
          delivered to you!.
        </p>
        <h5 class="russo mt-3">Does foodstreet deliver 24 hours?</h5>
        <p class="russo text-muted">Yes, foodstreet in Pakistan delivers 24 hours. However, many restaurants may be
          unavailable for a late night delivery. Please check which places in Pakistan deliver to you 24 hours by using
          your address.</p>
        <h5 class="russo mt-3">Can you pay cash for foodstreet?</h5>
        <p class="russo text-muted">Yes, you can pay cash on delivery for foodstreet in Pakistan.</p>
        <h5 class="russo mt-3">How can I pay foodstreet online?</h5>
        <p class="russo text-muted">You can pay online while ordering at foodstreet Pakistan by using a credit or debit
          card</p>
        <h5 class="russo mt-3">Does Foodstreet have minimum order?</h5>
        <p class="russo text-muted">Yes, many restaurants have a minimum order. The minimum order value depends on the
          restaurant you order from and is indicated during your ordering process.</p>
        <div id="accordion">
          <div class="card">
            <div class="card-header">
              <a class="card-link russo" data-toggle="collapse" href="#collapseOne">
                Click Here To Read More..
              </a>
            </div>
            <div id="collapseOne" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <h3 class="russo">Choose from over 28 cuisines and order online for home delivery
                </h3>
                <p class="russo text-muted">Starting from the first steps of ordering food online via foodpanda
                  Pakistan, the experience is assured to satisfy every customer. Offering a great choice of food ranging
                  from Steaks, Sushi, Sandwiches, BBQ, Tandoori Chicken, Fried Chicken to cuisines such as Western,
                  Italian, Mediterranean, Korean, Lebanese, Bakery or great Ice Cream for Dessert, foodstreet provides a
                  delivery service made to especially care for every necessity and exceed the expectations of every
                  customer..<br><br>
                  Pizza in Karachi, Burger in Lahore or Sandwiches in Islamabad? Among the great cuisines available on
                  foodstreet, choosing the one cuisine you want to order online can be a challenging task; but rest
                  assured, you can try one special cuisine every day and foodstreet will always keep its promise and
                  keep delivering your favorite dishes of your favorite cuisines from your favorite restaurants straight
                  to your doorsteps! Order great pizza from California Pizza. Many of your favourite dishes from around
                  the world can easily be ordered using foodpanda, like Egg Fried Rice, fresh salad and many types of
                  Chicken, like Chicken Biryani, Chicken Manchurian, Chicken Karahi, and Chicken Tikka.
                </p>
                <hr>
                <h3 class="russo">Order food and grocery online with the foodstreet app
                </h3>
                <p class="russo text-muted">
                  Even when on the move, the free foodpanda mobile application for iOS, Android and Windows Phone,
                  allows you to order food and groceries online anytime from anywhere. Whichever food you currently
                  desire, we have the largest selection of restaurants for you to choose from, right here on foodstreet!
                  <br><br> In three words, the process of ordering food online is simple, fast, and convenient. On the
                  homepage you can start your order by entering your city and area, which leads you to the next page
                  listing the number of total restaurants in your area. Next, you can either select the restaurant you
                  want from the list or further refine your search result by using the cuisine filter on the left hand
                  side of the page- all restaurants that offer your desired cuisine will then be displayed. You can now
                  select your desired restaurant, look through the available online menu, adding all of your favorite
                  appetizers, dishes, desserts as well as beverages to your online basket. Upon completion, you can go
                  ahead and check-out your order; now all you have to do is await your food delivery. Your order will be
                  processed, prepared and delivered straight to your home, office or your current location.<br><br> Some
                  of the best restaurants in Pakistan are represented on the service, from the likes of Pizza experts
                  Broadway Pizza and 14th Street Pizza, to extreme Chinese cuisine from Ginsoy.
                </p>
                <h6 class="russo">Order food and grocery online with foodpanda now and enjoy a great dining experience!
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="row py-3">
      <div class="col-md-6">
        <a class="navbar-brand text-secondary" href="home.html" style="font-family: 'Russo One', sans-serif; font-size: larger;">
          <img src="pictures/graycart.png" width="30" height="30" class="d-inline-block align-top" alt="">
           &copy; foodstreet</a>
      </div>
      <div class="col-md-6">
        <div class="d-flex justify-content-end">
          <div class="mr-2">
            <a href="" class="text-secondary"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
            </a>
          </div>
          <div>
            <a href="" class="text-secondary"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
     
    </div>
  </div>









  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
          $('#toptext').fadeIn(4000);
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
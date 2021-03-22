<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
$con = mysqli_connect('localhost', 'root', '', 'mydb');

// if($con) {
//     echo 'conected';
// } else {
//     echo 'not connected';
// }

$businessNames = $_POST["bname"];
$businessType = $_POST["btype"];
$foodType = $_POST["ftype"];
$businessCity = $_POST["city"];
$businessAddress = $_POST["baddress"];
$fullName = $_POST["fname"];
$email = $_POST["email"];
$contact = $_POST["contact"];

$ins = "INSERT INTO shop(business_name, business_type, food_type, city, business_adrs, 
full_name, email, contact) VALUES ('$businessNames', '$businessType', '$foodType', '$businessCity',
'$businessAddress', '$fullName', '$email', '$contact')";

$saved = mysqli_query($con, $ins);

if ($saved) {
    echo "<div class= 'alert alert-success'><a href='index.php' >Home</a><h3 class='text-center'>Your request has been received</h3></div>";
} else {
    echo "error";
}
?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.3.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.3.1/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
  </body>
</html>


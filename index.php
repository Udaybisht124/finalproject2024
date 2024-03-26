
<?php
session_start();


// include("connection.php"); // connection
$server="sql201.infinityfree.com";
$username="if0_36235497";
$password="NAS6hzk2qSy";
$dbname="if0_36235497_userdata";

$con = mysqli_connect($server,$username,$password,$dbname);

if (!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

// making connection to the database

if(isset($_POST['login'])){
    $name = $_POST["name"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM user_info  WHERE name = '$name' and  password = '$password'";
    
    $result = mysqli_query($con, $sql);

    // Check if user exists
    if (mysqli_num_rows($result) > 0) {
        $_SESSION["name"] = $name;
        


        header("Location: home.php"); // Redirect to dashboard
    } 
    else {
    
      $error_message = "Incorrect username or password.if we don,t sinup so please go sinup page";

      // Display an alert box using JavaScript
      echo "<script>alert('$error_message');</script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Anta&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./css/style.css">
<style>

.input-box
{
  border: 1px solid var(--primary);
  border-radius:5px;
}
.icon
{
  font-size:2em;
  padding:0 5px;
}

</style>


<body class="">

    <!--
      -------------------------------
      | navbar login with nav links |
      -------------------------------
    -->
    <div class="navbar navbar-expand-md bg-warning bg-body-tertiary">
      <div class="container">
        <!-- ( brandname ) -->
        <a class="navbar-brand" href="#"><b>QPaper</b></a>
        <!-- ( toggle button ) -->
        <div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </div>
        <!-- (navbar) -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav w-auto mx-auto">
          
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          
            <a class="nav-link" href="#search">Search Paper</a>
          
            <a class="nav-link" href="#">About Us</a>

            <a class="nav-link" href="feedback.php">Feedback</a>

          </div>

          <a class="btn btn-dark p-2" href="logout.php">logout</a>
        </div>
      
      </div>
    </div>

  <div class="container border rounded shadow my-5">
    <div class="row">
      <div class="col-6">
        
        <img src="3.png" class="my-5" alt="">

      </div>
      <div class="col"></div>

      <div class="col-4">

      <div class="h1 py-3"> <img src="logo.png" alt="" width="50px" height="50px"> QPaper </div>

      <div class="w-100 py-3 "></div>

      <form action="" method="post" class="border-top my-3 ">

        <div class="h3 py-3">Login Form </div>
        
        <!-- username -->
        <div class="input-box d-flex my-3">
        <span class="icon material-symbols-outlined">person</span>
        <input type="text"  name="name"placeholder="username" class="form-control" required>

        </div>
        <!-- password  -->
        <div class="input-box d-flex my-3">
        <span class="icon material-symbols-outlined">passkey</span>
        <input type="password" name="password" placeholder="password" class="form-control" required>

        </div>
        <!-- confirmpassowrd -->
        <div class="forgot-pass">
        <a href="#" class="btn py-3">Forgot-Password?</a>
        </div>  
        <input type="submit" value="LOGIN" name="login" class="btn btn-dark">
        <a href="signup.php" class="btn btn-outline-dark">SIGNUP</a>

        <div class="register-link">
        <p class="h4 py-3">Don,t have an account</p>
      
        <a href="#" class="btn btn-link">Register</a>
        
      </div>
        </form>

      </div>

      <div class="col"></div>

    </div>
  </div>
  <footer id="footer">
      <div class="container border-top py-5">

        <div class="h5"> Copyright &copy; <a href="https://github.com/Udaybisht124">Uday</a> and <a href="" class="">Rohit</a>  </div>
        
      </div>
    </footer>


</body>
</html>
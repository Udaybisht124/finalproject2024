<?php
$server="localhost";
$username="root";
$password="";
$dbname="userdata";
// making connection to the database
$con = mysqli_connect($server,$username,$password,$dbname) or die("error coming to create a connection");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    // checking if the password and confirm password fields match
    if($password === $confirmpassword){
        $sql="insert into user_info values('$name','$email','$number','$password','$confirmpassword')";

        // inserting the record into the database
        if(mysqli_query($con,$sql)){
        $_SESSION["name"]=$name;
          $error_message = "SignUp Successfully please Login Now";
          echo "<script>alert('$error_message');</script>";
          header("Location: index.php"); // Redirect to dashboard
        }
        else{
            echo"error in inserting record";
        }
    }
    else{
      echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Password and Confirm Password fields do not match
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  ';
    }
}
mysqli_close($con);
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
        <a class="navbar-brand" href="#"><img src="logo.png" height="40" width="40"  alt=""><b>QPaper</b></a>
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

      <div class="col-5">
   
      <form action="" method="post" class="my-3 ">

        <div class="h1 py-3 text-success">Signup Form </div>
        
        <div class="w-100 py-2"></div>

        <!-- username -->
        <div class="input-box d-flex my-3">
        <span class="icon material-symbols-outlined">person</span>
        <input type="text"  name="name"placeholder="username" class="form-control" required>

        </div>
        <!-- email  -->
        <div class="input-box d-flex my-3">
        <span class="icon material-symbols-outlined">passkey</span>
        <input type="text" name="email" placeholder="email" class="form-control" required>

        </div>
        <!-- number -->
        <div class="input-box d-flex my-3">
        <span class="icon material-symbols-outlined">passkey</span>
        <input type="text" name="number" placeholder="number" class="form-control" required>

        </div>

        <!-- password -->
        <div class="input-box d-flex my-3">
        <span class="icon material-symbols-outlined">passkey</span>
        <input type="password" name="password" placeholder="password" class="form-control" required>

        </div>


        <!-- confirmpassowrd -->
        <div class="input-box d-flex my-3">
        <span class="icon material-symbols-outlined">passkey</span>
        <input type="password" name="confirmpassword" placeholder="confirmpassword" class="form-control" required>

        </div>

        <div class="w-100 py-2"></div>


        <input type="submit" value="SIGNUP" name="submit" class="btn btn-dark">
     

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

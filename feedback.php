<?php
session_start();
$server="localhost";
$username="root";
$password="";
$dbname="feedback1";

// making connection to the database
$con = mysqli_connect($server,$username,$password,$dbname) or die("error coming to create a connection");

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];
    
    // checking if the password and confirm password fields match
        $sql="insert into user_feedback1 (name,email,feedback)values('$name','$email','$feedback')";

        // inserting the record into the database
        if(mysqli_query($con,$sql)){
        
          $error_message = "feedback submitted successfully!";
          echo "<script>alert('$error_message');</script>";
          header("Location:feedback.php"); // Redirect to dashboard
        }
        else{
            echo"error in doing feedback";
        }
    
}
mysqli_close($con);
?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uday & Rohit</title>

  <!-- style -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

 <style>

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:Anta;


}

.wrapper{
 position:relative;
  display:flex;
  justify-content:center;
  align-items:center;
  width:400px;
  height:600px;
  background:#000;
  border:5px solid #333;
  border-radius:10px;
transition: .5s;
margin-left:470px;
}
.wrapper:hover{
  border:5px solid white;
  background-color:5px solid cyan,inset 0 0 20px cyan;
}
.wrapper:hover h2{
  color:cyan;

}



h2{
  font-size:2em;
  text-align:center;
  color:#fff;

}
.input-box{
  position:relative;
  width:320px;
  margin:30px 0;

}
.input-box input{
  width:100%;
  height:50px;
  background:transparent;
  border:3px solid #333;
  outline:none;
  border-radius:5px;
  font-size:1em;
  color:#fff;
  padding: 0 10px 0 35px;
transition: .5s;
}
.wrapper:hover .input-box input{
  border:2px solid dark;
  box-shadow: 0 0 10px white,inset  0 0 10px white;
}


.input-box input::placeholder{
  color:rgba(255,255,255, .3);
}
.input-box .icon{
  position:absolute;
  left:#fff;
  font-size:1.2em;
  line-height:55px;
color:white;
}
.forgot-pass{
  margin:-15px 0 15px;
}

.forgot-pass .a{
  color:#fff;
  font-size: .9em;
  text-decoration:none;
}
.forgot-pass .a:hover{
  text-decoration:underline;
}
button{
  position:relative;
  width:100%;
  height:45px;
  background:#333;
border:none;
outline:none;
border-radius:5px;
cursor:pointer;
font-size:1em;
color:#fff;
font-weight:500;
}
.register-link{
  font-size: .9em;
  text-align: center;
  margin:25px 0;
}
.register-link p{
  color:#fff;
}

.register-link p a{
  color:#333;
  text-decoration: none;
  font-weight: 600;
}

.register-link p a:hover{
  text-decoration: none;
}

</style> 


  
</head>

<body>
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#main">home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#home">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav> -->

  
  <main id="main">

    <!--
      header section ==============================================================
    -->
    <header class="bg-dark border-bottom" id="header">
    <div class="container py-5">
   
    <div class="row">

          <!-- first child -->
          <div class="col">
      
          <img src="intangible-assets_10513176.png" class="mx-3" width="100" height="100"alt="">
<h1 class="font-weight-lighter text-secondary my-5"> 
          <span id="element"> </span></h1> 

          </div>
          <!-- second child -->
          <div class="col d-flex align-items-center justify-content-end  box-shadow: 3px 2px 10px var(--dark);
      ">

            
            <a href="index.php" class="btn btn-outline-success mx-3 p-2">HOME</a>
            <a href="https://github.com/" class="btn btn-outline-success mx-3 p-2"> About us </a>
            <a href="logout.php" class="btn btn-outline-success mx-3 p-2"> LogOut </a>
            
          </div>
          
        </div>
      </div>
 
      <marquee direction="right"><P class="text-success " style="font-size:30px; font-weight:bold;text-decoration:underline;text-decoration-color:white;">PLEASE! GIVE YOUR FEEDBACK HERE.</P>
</marquee>
    </header>

    <!-- <div class="bg-dark">
    <img src="feed.png" class="m-auto" width="300" height="300"alt="">

    </div> -->
      <!-- content section ======================================================= -->
     <div class="bg-dark my-3">
<div class="wrapper my-2">

  <form action=" " method="post">
  <h2>GIVES YOUR FEEDBACK</h2>
    <br>
    <div class="mb-3">
  <input type="text" class="form-control" name="name"id="exampleFormControlInput1" placeholder="enter username">
</div>
  <div class="mb-3">
  <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="enter email">
</div>

    <!-- username -->
    <div class="form-floating">
  <textarea class="form-control" name="feedback"  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
  <label for="floatingTextarea2">Comments</label>
</div>
<br>
  <!-- <a class="btn btn-outline-primary" name="send">SEND FEEDBACK</a> -->

  <button type="submit" name="send">send feedback</button>
    </div>
  </form>
  

</div>

</div>
    <!--
      footer section ===============================================================
    -->
    <footer id="footer">
      <div class="container border-top py-3">

        <div class="h5"> Copyright &copy; <a href="https://github.com/Udaybisht124">Uday</a> and <a href="" class="">Rohit</a>  </div>
        
      </div>
    </footer>

  </main>

  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

<!-- Setup and start animation! -->
<script>
  var typed = new Typed('#element', {
    strings: ['<b>FREE PAPER DOWNLOAD</b>','PANJAB UNIVERSITY','CHANDIGARH UNIVERSITY'],
    typeSpeed: 100,
  });
</script>
</body>

</html>
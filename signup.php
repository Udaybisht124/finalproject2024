<?php

$server="sql201.infinityfree.com";
$username="if0_36235497";
$password="NAS6hzk2qSy";
$dbname="if0_36235497_userdata";

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

<body class="bg-dark" >


<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style>

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:Anta;

}
body{
  display:flex;
  justify-content:center;
  align-items:center;
  min-height:100vh;
/* background-color:white; */
}
.wrapper{
  position:relative;
  display:flex;
  justify-content:center;
  align-items:center;
  width:400px;
  height:500px;
  background-color:#3e773e;
  border:5px solid white;
  border-radius:10px;
transition: .5s;
margin:44px 64px;
}
/* .wrapper:hover{
  border:5px solid white;
  background-color:5px solid cyan,inset 0 0 20px cyan;
} */




h2{
  font-size:2em;
  text-align:center;
  color:#fff;

}
.input-box{
  position:relative;
  width:320px;
  margin:19px 0;

}
.input-box input{
  width:100%;
  height:50px;
  background:transparent;
  border:2px solid black;
  outline:none;
  border-radius:5px;
  font-size:1em;
  color:black;
  padding: 0 10px 0 35px;
transition: .5s;
}
.wrapper:hover .input-box input{
  border:2px solid white;
  box-shadow: 2px 2px white;
  text:black;
}


.input-box input::placeholder{
  color:black;
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
  color:black;
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
  background:black;
border:2px solid black;
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
.paper{
  font-size:70px;
  background-color:#3e773e;
  width:100%;
}
.container{
  background-color:black;
max-width:100%;
max-height:100%;
}
</style>

<div class="container  w-100">
  <div class="row  ">
  <h1 class="paper">PyQuestionPapers</h1>
  <div class="col-6 ">
      <img src="3.png" class="bg-dark my-5 mx-5" alt="" width="500px" height="500px">
    </div>
     <div class="wrapper">

<form action="" method="post">

  <h2>SignUp Form</h2>    <!-- username -->
  <div class="input-box">
    <span class="icon material-symbols-outlined">
person
</span>
      <input type="text"  name="name"placeholder="username" required>

    </div>
    <!-- email -->
    <div class="input-box">
    <span class="icon material-symbols-outlined">
mail
</span>
      <input type="text" id="name" name="email" placeholder="email" required>
      
    </div>

    <!-- number -->
    <div class="input-box">
      <span class="icon material-symbols-outlined">call</span>

      <input type="text" name="number" id="number" placeholder="number" required>  
    </div>

    <!-- password  -->
    <div class="input-box">
      <span class="icon material-symbols-outlined">passkey</span>
      <input type="password" name="password" placeholder="password" required>
    </div>
    <!-- confirmpassowrd -->
    <div class="input-box">
        <span class="icon material-symbols-outlined">
    passkey
    </span>
          <input type="password" name="confirmpassword" placeholder="confirmpassword" required>
          
        </div>
    <div class="forgot-pass">
      <a href="#" class="text-black">Forgot-Password?</a>
    </div>  
    <input type="submit" value="submit" name="submit" class="btn btn-dark">
<a href="signup.php" class="btn btn-outline-dark">SIGNUP</a>
  </form>

</div>
</div>
  </div>
</div>

</body>
</html>
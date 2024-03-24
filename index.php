
<?php
session_start();


// include("connection.php"); // connection

$server="localhost";
$username="root";
$password="";
$dbname="userdata";

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
margin:45px 20px;
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
  margin:30px 0;

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
    <div class="col-6"><div class="wrapper">

<form action="" method="post">
  <h2>Login Form</h2>
  <br>
  <!-- username -->
  <div class="input-box">
  <span class="icon material-symbols-outlined">
person
</span>
    <input type="text"  name="name"placeholder="username" required>

  </div>
<!-- password  -->
  <div class="input-box">
  <span class="icon material-symbols-outlined">
passkey
</span>
    <input type="password" name="password" placeholder="password" required>
    
  </div>
  <!-- confirmpassowrd -->
  <div class="forgot-pass
  ">
    <a href="#" class="text-dark">Forgot-Password?</a>
  </div>  
   <input type="submit" value="LOGIN" name="login" class="btn btn-dark">
<a href="signup.php" class="btn btn-outline-dark">SIGNUP</a>

   <div class="register-link">
    <p>Don,t have an account</p>
    <a href="#">Register</a>
  </div>
</form>
</div>
</div>
  </div>
</div>




































    <!-- <style>
        :root
{
    --primary:#16a085;
    --secondary:#1abc9c;
    --light:#ecf0f1;
    --white:#fff;
    --dark:#34495e;
    --black:#2c3e50;
--primary-blue:rgb(0, 102, 255);
}
        *{
        padding:0;
        margin:0;
        box-sizing: border-box;
        }
        body{
            width:100vw;
            height:100vh;
      display: grid;
      place-content: center;
      background-color: rgb(65, 85, 218);
        }
        .container{
            width:550px;
            height:550px;
        background-color: rgb(132, 146, 221);
        display: grid;
        place-content: center;
        }
        h1{
            color:#fff;
            text-transform: uppercase;
            padding:20px 0;
        }

        .form-group{
            background-color: greenyellow;
            width:400px;
            margin:20px 0;
        }
        .form-group input{
            width:100%;
            height: 50px;
            padding: 0 20px;
        border:none;
        outline: none;
        font-size: 1em;
        }
        .form-group input:hover{
            width:100%;
            height: 50px;
            padding: 0 20px;
           font-weight: bolder;
        }
    
    </style>
    <script>

        function validateForm() {
            var username = document.getElementById("name").value;
            var password = document.getElementById("password").value;

            if (username.trim() === "" || password.trim() === "") {
                alert("Please fill in both username and password.");
                return false; // Prevent form submission
            }
            return true; // Proceed with form submission
        }
    </script>
   <div class="container my-3">
   
   <h1 class="text-dark">Login Form</h1>
           <form action=" " method="post">
        <div class="form-group ">
     <input type="text"  name="name" id="name" placeholder="enter name">
                 </div>
         

           <div class="form-group">
                     
          <input type="password" name="password" id="password" placeholder="password">
             
                       </div>
   
<button class="btn  btn-primary" name="login">LOGIN</button>
<button class="btn btn-dark text-white"><a href="signup.php" style="text-decoration:none;">SIGNUP</a></button>
       </form>
   </div>  -->
</body>
</html>
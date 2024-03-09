<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Anta&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>

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
            height:600px;
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
    
    </style>  -->
<!-- 
   <div class="my-2"> <nav class="navbar navbar-expand-lg navbar-light bg-light my-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav></div>   -->
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
        
          $error_message = "SignUp Successfully please Login Now";
          echo "<script>alert('$error_message');</script>";
          header("Location: loginform.php"); // Redirect to dashboard
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
     <!-- <div class="container my-3">
   
     <h1 class="text-dark">sign up form</h1>
             <form action=" " method="post">
          <div class="form-group ">
                            <label for="name">Name</label>
       <input type="text"  name="name" id="name" placeholder="enter name">
                   </div>
         <div class="form-group">
                         <label for="email">Email:</label>
       <input type="text" name="email" id="email" placeholder="enter email">
             </div>
             <div class="form-group">
                             <label for="number">Number</label>

     <input type="text" name="number" id="number" placeholder="enter number">
          </div>
            

             <div class="form-group">
               <label for="password">Password</label>            
                    <input type="password" name="password" id="password" placeholder="password">
                      </div>
       <div class="form-group">
              <label for="confirmpassword">Confirm Password</label>      
              <input type="password" name="confirmpassword" id= "confirmpassword" placeholder="enter confirm password"></div>
               <input type="submit" value="submit" name="submit" class="btn btn-primary">
               <button class="btn btn-dark text-white"><a href="loginform.php" style="text-decoration:none;">lOGIN</a></button>

               <br>
     
         

         </form>
     </div>  -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style>
  <link href="https://fonts.googleapis.com/css2?family=Anta&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
  background-color:#34495e;
}
.wrapper{
  position:relative;
  display:flex;
  justify-content:center;
  align-items:center;
  min-width:500px;
  height:678px;
  background:black;
  border:5px solid #333;
  border-radius:10px;
transition: .5s;
}
.wrapper:hover{
  border:5px solid #fff;
  background-color:5px solid white,inset 0 0 20px white;
}
.wrapper:hover h2{
  color:#0ef;

}

h2{
  font-size:2em;
  text-align:center;
  color:white;

}
.input-box{
  position:relative;
  width:400px;
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
  border:2px solid white;
  box-shadow: 0 0 10px blue,inset  0 0 10px blue;
}


.input-box input::placeholder{
  color:rgba(255,255,255, .3);
}
.input-box .icon{
  position:absolute;
  left:#fff;
  margin-top:-5px;
  padding:5px 5px 5px 10px !important;
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
      <a href="#">Forgot-Password?</a>
    </div>  
     <input type="submit" value="submit" name="submit" class="btn btn-primary">
  <a href="loginform.php" class="btn btn-outline-primary">LOGIN</a>

     <div class="register-link">
      <p>Don,t have an account</p>
      <a href="#">Register</a>
    </div>
  </form>
</div>




</body>
 </html>
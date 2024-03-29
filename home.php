<?php
session_start();





?>

<?php
$server="localhost";
$username="root";
$password="";
$dbname="userdata";


$con = mysqli_connect($server,$username,$password,$dbname);

if (!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

$userprofile=$_SESSION['name'];

if($userprofile == true){

}
else{
  header('location:index.php');
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uday & Rohit</title>

  <!-- style -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  <link rel="stylesheet" href="css/style.css">
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  
</head>

<body>

  
  <main id="main">




    
    <div class="w-100">
    <!--
      -------------------------------
      | navbar login with nav links |
      -------------------------------
    -->
    <div class="navbar navbar-expand-md bg-warning bg-body-tertiary">
      <div class="container">
        <!-- ( brandname ) -->
        <a class="navbar-brand" href="#"><img src="img\logo.png" height="40" width="40"  alt=""><b>QPaper</b></a>
        <!-- ( toggle button ) -->
        <div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </div>
        <!-- (navbar) -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav w-auto mx-auto" id="navbar">
          
            <a class="nav-link active "  aria-current="page" href="#">Home</a>
          
            <a class="nav-link " href="#search">Search Paper</a>
          
            <a class="nav-link" href="about.php">About Us</a>

            <a class="nav-link" href="feedback.php">Feedback</a>

          </div>

          <a class="btn btn-dark p-2" href="logout.php">logout</a>
        </div>
      
      </div>
    </div>
    <!--
      header section ==============================================================
    -->
    <header class=" border-bottom" id="header">

      <div class="container py-5">
      <div class="row">
        <div class="col"></div>
      </div>
      
      <div class="row">
        <div class="col-6 d-grid align-items-center">
          
          <div>

            <div class="h1 pb-5 text-success"> PREVIOUS YEAR QUESTION PAPERS</div>
            
            <div class="lead">Here we can provide a previous year question papers for different universities for benifits of a student.</div>
          
            <a href="#search" class="btn btn-outline-dark mt-5 px-3"> Search Paper </a>
          
          </div>

        </div>
        <div class="col-6 text-center">
          <img src="img\3.png" class="my-5" alt="" width="500px" height="500px" >
        </div>

      </div>
      <marquee direction="right"><P class="text-success " style="font-size:2rem;"><b>HELLO WE ARE MAKING THIS WEBSITE ONLY FOR STUDENT BENEFITS OF UNIVERSITY LEVEL</b></P></marquee>
    </header>
<div>   

</div>

<!--
    university section ========================================================================================================================
-->
<section id="university">


  
  <div class="container py-5  ">

<h1 style="font-size:40px;"><span class="h1" style="text-decoration:underline;">Avalabile</span> <span class="text-success" style="text-decoration:underline;">Universites</span> </H1>
<br><br>
    <div class="d-flex  gap-2">

      <div class="card" style="width:50rem;">
        <img src="img\puimg.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title ">PANJAB UNIVERSITY</h5>
          <p class="card-text "style="color:#1abc9c;">This is the best univeristy in Chandigarh</p>
          
          <a href="https://pu.ac.in/" class="btn btn-secondary text-white">Read More</a>
        </div>
      </div>
      
      <div class="card" style="width:50rem;">
        <img src="img\chdchuni.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CHANDIGARH UNIVERSITY</h5>
          <p class="card-text "style="color:#1abc9c;">This is the best univeristy in Chandigarh</p>
          
          <a href="https://www.cuchd.in/" class="btn btn-secondary text-white">Read More</a>
        </div>
      </div>
      
      <div class="card" style="width:50rem;">
        <img src="img\delhi-university.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title ">DELHI UNIVERSITY</h5>
          <p class="card-text "style="color:#1abc9c;">This is the best univeristy in delhi.</p>
          
          <a href="https://www.du.ac.in/" class="btn btn-secondary text-white">Read More</a>
        </div>
      </div>
     
      <div class="card " style="width:50rem;">
        <img src="img\pupat.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Panjab University Patiala</h5>
          <p class="card-text "style="color:#1abc9c;">This is the best univeristy in located at Panjab</p>
          
          <a href="https://www.nitt.edu/" class="btn btn-secondary text-white">Read More</a>
        </div>
        
      </div>
      
      <div class="card" style="width:50rem;">
        <img src="img\nitkuru.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title ">NIT KURUSHETRA</h5>
          <p class="card-text" style="color:#2bc9a4;">This is the best univeristy in Chandigarh</p>
          
          <a href="https://nitkkr.ac.in/" class="btn btn-secondary text-white">Read More</a>
        </div>
      </div>
      
      
    </div>
  </div>
</section>
    <!--
      content section =======================================================
    -->
    <section id="content" class="">
      <!--
        search bar ------------------------
      -->
      <div class="p-5 bg-light" id="search">
        <div class="container ">

          <div class="h2 py-3 "> Search Question Paper that you require </div>
          
          <input type="search" name="" id="searchbar" class="form-control bg-white" placeholder="Search PDF question paper ...">
        
        </div>  </div>
      
      <div class="container">

        <div id="main_data_container">
          <!-- target by id and fetch data -->
        </div>

      </div>
    </section>

    <!--
      footer section ===============================================================
    -->
    <footer id="footer">
      <div class="container border-top py-5">

        <div class="h5"> Copyright &copy; <a href="https://github.com/Udaybisht124">Uday</a> and <a href="" class="">Rohit</a>  </div>
        
      </div>
    </footer>

  </main>

  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="js\data.js"></script>
  <script src="js\script.js"></script>
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

<!-- Setup and start animation! -->


</body>

</html>
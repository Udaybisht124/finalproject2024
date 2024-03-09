<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uday & Rohit</title>

  <!-- style -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  
  <main id="main">

    <!--
      header section ==============================================================
    -->
    <header class="bg-dark border-bottom" id="header">
      <div class="container py-5">
        <div class="row">

          <!-- first child -->
          <div class="col">
            <div class="display-1 py-5n bg-dark text-white"> FREE PAPERS DOWNLOADS</div>
            <h1 class="font-weight-lighter text-secondary">  </h1>

          </div>
          <!-- second child -->
          <div class="col d-flex align-items-center justify-content-end  box-shadow: 3px 2px 10px var(--dark);
      ">

            <a href="campus.php" class="btn btn-outline-success mx-3"> AVAILABLE UNIVERSITIES </a>
            <a href="feedback.php" class="btn btn-outline-success mx-3"> FEEDBACK </a>
            
            <a href="https://github.com/" class="btn btn-outline-success mx-3"> About us </a>
            <a href="logout.php" class="btn btn-outline-success mx-3"> LogOut </a>
            
          </div>
          
        </div>
      </div>
    </header>

    <!--
      content section =======================================================
    -->
    <section id="content" class="bg-dark">
      <!--
        search bar ------------------------
      -->
      <div class="p-5" id="search">
        <div class="container ">

          <div class="h2 py-3 bg-dark"> Search Question Paper that you require </div>
          
          <input type="search" name="" id="searchbar" class="form-control" placeholder="Search PDF question paper ...">
        
        </div>
      </div>
      <!-- 
          { MAIN DATA CONTAINER  } --------------------------
       -->
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
      <div class="container border-top py-3">

        <div class="h5"> Copyright &copy; <a href="https://github.com/Udaybisht124">Uday</a> and <a href="" class="">Rohit</a>  </div>
        
      </div>
    </footer>

  </main>

  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="data.js"></script>
  <script src="script.js"></script>

</body>

</html>
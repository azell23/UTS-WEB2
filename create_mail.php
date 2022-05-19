<?php

  include('./connection.php');

  $statement = pg_query($connection,"SELECT * FROM outmail;");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Mail</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./profile.css">
    <link rel="shortcut icon" href="./logo.png"width="200">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Data Table CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <!-- GSAP Animation CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js"></script>
</head>
<body style="background-color: #1c91ff;">
    


    <div class="container-fluid">
      <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="./logo.png" alt="" width="100" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page"a href="index.php">Beranda</a>
        <a class="nav-link"a href="create_mail.php">Create</a>
        <a class="nav-link"a href="profile.html">Profile</a>
        
      </div>
    </div>
  </div>
</nav>
        <div class="col-md-3 col-sm-3 d-md-none d-sm-none d-block">
           <nav class="navbar tembus navbar-dark bg-info navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom position-fixed" style="background-image: linear-gradient(to bottom left, #00dbde,#fc00ff);">
            <span class="nav-indicator"></span>
            <ul class="navbar-nav nav-justified w-100">
              <li class="nav-item item-passive">
                <a href="./index.php" class="nav-link text-decoration-none text-white">
                 <i class="bi bi-house-door text-white ms-5 me-3"></i>
                 <span class="title-passive d-block small ms-5 me-3">Home</span>
                </a>
              </li>
              <li class="nav-item item-active">
                <a href="./create_mail.php" class=" nav-link text-decoration-none text-white">
                  <i class="bi bi-pencil ms-5 me-3"></i>
                  <span class="title-active d-block small ms-5 me-3">Add</span>
                </a>
              </li>
              <li class="nav-item item-passive">
                <a href="./profile.html" class=" nav-link text-decoration-none text-white">
                  <i class="p bi bi-person-check ms-5 me-3 text-white"></i>
                  <span class="title-passive d-block small ms-5 me-3">Profile</span>
                </a>
              </li>
            </ul>
          </nav>

        </div>
        <div class="home col-md-8 col-sm-8 col-12" style="background-image: linear-gradient(to bottom left,#fc00ff);">
          <div class="card mt-5 shadow">
            <div class="card-body">
                <form method="POST" action= "Backend/tambah_proses.php">
                        <div class="card-title ">
                                <h5><b>Create Mail</b></h5>
                                <hr>
                        </div>
                        <div class="form-group mt-2">
                            <p>Number of mail</p>
                            <input type="text" class="form-control" id ="nomor" name ="nomor" placeholder="Enter mail number . . . ." required>
                        </div>
                        <div class="form-group mt-2">
                            <p for="nama">Date</p>
                            <input type="date" class="form-control" id ="tanggal" name ="tanggal" placeholder="Enter date ...." required>
                        </div>
                        <div class="form-group mt-2">
                            <p for="prodi">Title</p>
                            <input type="text" class="form-control" id ="judul" name ="judul" placeholder="Enter mail title . . . ." required>
                        </div>

                        <div class="text-center mt-5">
                            <input type="submit" name="submit" class="btn" style="background-color: #00dbde; color: aliceblue;" value="SAVE" onclick="return confirm('Are you sure ?')">
                        </div>
                        
                    </div>
                </form>    
            </div>
          </div>
        </div>
      </div>
    </div>

   
   
    
    <!-- Data Table Framework -->
    <script>

      gsap.from("input", {duration: 1, x: 100, opacity:0});
      gsap.from("p", {duration: 0.8, x: -100, opacity:0});
      gsap.from("h5 ", {duration: 1.5, y: -100, opacity:0});
      gsap.from("h6 ", {duration: 1, y: -100, opacity:0});
    </script>

    <!-- Framework Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>
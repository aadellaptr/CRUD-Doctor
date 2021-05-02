<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<title>RS KARYA MEDIKA</title>

<style>

    .pills-rounded .nav-fill .nav-item .nav-link {
        border-radius: 8em;
        padding: 0.5rem 1.25rem;
        margin-left : 3rem;
        color: white;
    }
 
    .flex-column {
        height: 100%;
        width : 200px;
        position: fixed;
        padding-top: 5rem;
    }

    .flex-column a{
        padding: 10px 8px 6px 16px;
        display: block;
    }

    .flex-column a.active{
        border-radius: 8em;
        padding: 0.5rem 1.25rem;
        background-color: #ba68c8;
        color : white;
    }

    .menu-section{
        padding: 5rem 3rem 2rem 15rem;

    }

</style>

</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/medical2.png" alt="" width="30" height="28" class="d-inline-block align-text-top">
            RS KARYA MEDIKA
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="nav md-pills nav-justified pills-rounded ms-auto">
                <ul class="navbar-nav nav-fill">
                    <li class="nav-item">
                        <a class="nav-link btn" style="background-color:#ba68c8;" href="#"><?php echo $_SESSION["email"]?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger" href="logout.php">
                        <i class="bi bi-box-arrow-right"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
</header>
        <nav class="nav flex-column navbar-light bg-light">
            <div class="nav pills-rounded mx-auto d-block ">
                <a class="nav-link active " href="index.php">Home</a>
                <a class="nav-link" href="doctor.php">Doctors</a>
                <a class="nav-link" href="#">Patients</a>
                <a class="nav-link" href="#">Nurses</a>
            </div>
        </nav>

    <section class="menu-section">
        <div class="row">
            <div class="col-4">
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-body bg-light">
                        <div class="row g-0">
                            <div class="col-4">
                                <img src="img/doctor.png" alt="" height="80">
                            </div>
                            <div class="col-8">
                                <h5 class="card-title text-center">Doctors</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="doctor.php" class="card-link"> <i class="bi bi-arrow-right-circle"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-body bg-light">
                        <div class="row g-0">
                            <div class="col-4">
                                <img src="img/patient.png" alt="">
                            </div>
                            <div class="col-8">
                                <h5 class="card-title text-center">Patients</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link"> <i class="bi bi-arrow-right-circle"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-body bg-light">
                        <div class="row g-0">
                            <div class="col-4">
                                <img src="img/nurse.png" alt="">
                            </div>
                            <div class="col-8">
                                <h5 class="card-title text-center">Nurses</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link"> <i class="bi bi-arrow-right-circle"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    
</body>
</html>
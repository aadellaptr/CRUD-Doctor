<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Login</title>

<style>
.pills-rounded .nav-fill .nav-item .nav-link {
border-radius: 8em;
width: 8rem;
color : white;
}
.pills-light-purple .nav-fill .nav-item .nav-link.active {
background-color: #ba68c8;
}

.btn-light-purple{
border-radius: 8em;
background-color: #ba68c8;
width: 8rem;
color : white;
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
            <div class="nav md-pills nav-justified pills-light-purple pills-rounded ms-auto">
            <ul class="navbar-nav nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Login</a>
                </div>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </nav>
</header>
    <div class="container">

        <div class="row" style="padding-top:4rem;">
        <?php
            include 'alert.php';
        ?>
        <div class="col-6">
            <div class="text-center" style="margin-top: 3rem;"><h1> WELCOME </h1></div>
            <div class="card border-light mx-auto d-block mb-3" style="max-width: 25rem; margin-top: 2rem">
                <div class="card-body bg-light">
                    <h5 class="card-title text-center">Login</h5>
                    <form class="" action="proses_login.php" method="post">
                        <label for="email">Email</label>
                            <input class="form-control mt-2 mb-2" type="email" name="email" value="">
                        <label for="password">Password</label>
                            <input class="form-control mt-2" type="password" name="password" value="">
                        <button class="btn btn-light-purple mx-auto d-block mt-4" type="submit" name="button">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <img src="img/hospital.jpg" alt="" width="600" height="500">
        </div>
        </div>
    </div>
    
</body>
</html>
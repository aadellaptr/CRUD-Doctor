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
    <title>Update</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

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

    .data-section{
        padding: 5rem 3rem 2rem 15rem;

    }

    .form-group{
        margin-bottom: 2rem;
    }

    .form-group{
        padding-left:18rem;
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
        <a class="nav-link" href="index.php">Home</a>
        <a class="nav-link active" href="doctor.php">Doctors</a>
        <a class="nav-link" href="#">Patients</a>
        <a class="nav-link" href="#">Nurses</a>
    </div>
</nav>

<?php
    include 'koneksi_db.php';
    $kd_dokter=$_GET['kd_dokter'];
    $data=mysqli_query($koneksi,"SELECT * FROM dokter WHERE kd_dokter='$kd_dokter'")
    or die (mysqli_error($koneksi));
    $baris=mysqli_fetch_array($data);
?>

<section class="data-section">
    <h3 align="center">Edit Data Dokter</h3>
    <form action="proses_edit.php?kd_dokter=<?php echo $kd_dokter ?>" method="post" style="margin-top:30px;">
        <div class="form-group row">
            <label for="kd_dokter" class="col-md-3 col-form-label">Kode Dokter</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="kd_dokter" value="<?php echo $baris['kd_dokter'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_dokter" class="col-md-3 col-form-label">Nama</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="nama_dokter" value="<?php echo $baris['nama_dokter'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis_kelamin" class="col-md-3 col-form-label">Jenis Kelamin</label>
            <div class="col-md-5">
                <select class="form-control" name="jenis_kelamin">
                    <option value="<?php echo $baris["jenis_kelamin"];?>" selected="selected"><?php echo $baris["jenis_kelamin"];?></option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option></select>
             </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="alamat" value="<?php echo $baris['alamat'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="no_telp" class="col-md-3 col-form-label">No Telp</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="no_telp" value="<?php echo $baris['no_telp'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="spesialis" class="col-md-3 col-form-label">Spesialis</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="spesialis" value="<?php echo $baris['spesialis'];?>">
            </div>
        </div>
        <div class="tombol">
            <button class=" btn btn-success mt-4" style="margin-left:28rem;" type="submit" name="button">Simpan Data</button> 
            <a href="doctor.php" class="btn btn-primary mt-4 ">Kembali</a>
        </div>
    </form>
</section>
</body>
</html>
<?php
include 'koneksi_db.php';
$kd_dokter=$_GET['kd_dokter'];

$query=mysqli_query($koneksi, "DELETE FROM dokter WHERE kd_dokter='$kd_dokter'")
or die (mysqli_error($koneksi));

if($query){
    $_SESSION["alert"] = "Data berhasil dihapus";
    header("Location: doctor.php");
} else{
    echo"Gagal Hapus Data";
}
?>
<?php
include 'koneksi_db.php';

$kd_dokter_lama=$_GET['kd_dokter'];
$kd_dokter=$_POST['kd_dokter'];
$nama_dokter=$_POST['nama_dokter'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$spesialis=$_POST['spesialis'];

$query=mysqli_query($koneksi, "UPDATE dokter SET kd_dokter='$kd_dokter', nama_dokter='$nama_dokter', jenis_kelamin='$jenis_kelamin', 
alamat='$alamat', no_telp='$no_telp', spesialis='$spesialis' WHERE kd_dokter='$kd_dokter_lama'")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: doctor.php");
} else{
    echo "Gagal Update Data";
}
?>
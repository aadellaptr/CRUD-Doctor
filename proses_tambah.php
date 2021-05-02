<?php
include 'koneksi_db.php';

$kd_dokter=$_POST['kd_dokter'];
$nama_dokter=$_POST['nama_dokter'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$spesialis=$_POST['spesialis'];

$query=mysqli_query($koneksi, "INSERT INTO dokter(kd_dokter, nama_dokter, jenis_kelamin, alamat, no_telp, spesialis) VALUES 
('$kd_dokter','$nama_dokter','$jenis_kelamin','$alamat','$no_telp','$spesialis')")
or die (mysqli_error($koneksi));

if ($query){
    header("Location: tambah.php");  
}   else{
    echo "Gagal Tambah Data";
}
?>
<?php
include '../../config/koneksi.php';

$id_jenis=$_POST['id_jenis'];
$nama_jenis=$_POST['nama_jenis'];

$query=mysqli_query($conn,"UPDATE jenis SET nama_jenis='$nama_jenis' WHERE id_jenis='$id_jenis'");

if($query){
    echo "<script>alert('Data Berhasil Diedit');</script>";
    echo "<script>window.location.href='index.php';</script>";
}else{
    echo "<script>alert('Data gagal Diedit');</script>";
    echo "<script>window.location.href='proses_tambah.php';</script>";

}
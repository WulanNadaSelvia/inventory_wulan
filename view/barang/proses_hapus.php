<?php
$id_barang=$_GET['id'];

include '../../config/koneksi.php';

$query=mysqli_query($conn, "DELETE FROM barang WhERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('Data Berhasil Dihapus');</script>";
    echo "<script>window.location.href='index.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus');</script>";
    echo "<script>window.location.href='proses_tambah.php';</script>";

}

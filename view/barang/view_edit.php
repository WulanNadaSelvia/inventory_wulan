<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <title>edit data barang</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">jenis</a>
        </li>
    </div>
  </div>
</nav>
<?php
 include '../../config/koneksi.php';
 $id_barang=$_GET['id'];
 $query=mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");
 $result=mysqli_fetch_array($query);
 ?>
    <div class="container">
        <h1>tambah data barang</h1>
        <?php
 include '../../config/koneksi.php';
 ?>
        <form action="proses_edit.php" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">ID_Barang</label>
                <input type="text" class="form-control" value="<?php echo $result['id_barang'];?> "name="id_barang" id="" placeholder=""/>
            </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nama_Barang2</label>
                    <input type="text" class="form-control"  value="<?php echo $result['nama_barang'];?> "name="nama_barang" id="" placeholder=""/>
                </div>
                <div class="mb-3">
                <label for="" class="form-label">ID_Jenis</label>
                <input type="text" class="form-control" value="<?php echo $result['id_jenis'];?> " name="id_jenis" id="" placeholder=""/>
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Harga</label>
                <input type="text" class="form-control"  value="<?php echo $result['harga'];?> "name="harga" id="" placeholder=""/>
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Stok</label>
                <input type="text" class="form-control"  value="<?php echo $result['stok'];?> "name="stok" id="" placeholder=""/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"></script>
    </div>
</body>
</html>
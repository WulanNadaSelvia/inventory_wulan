<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
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
          <a class="nav-link active" aria-current="page" href="">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">jenis</a>
        </li>
    </div>
  </div>
</nav>
    <div class="container">
        <h1>barang</h1>
        <a href ="view_tambah.php" class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i>tambah barang</a>
        <br></br>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>id_barang</th>
                    <th>nama_barang</th>
                    <th>id_jenis</th>
                    <th>harga</th>
                    <th>jenis</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../../config/koneksi.php';
                $query = mysqli_query($conn,"SELECT * FROM barang");
                if(mysqli_num_rows($query) > 0){
                    $id_barang = 30;
                    while($result=mysqli_fetch_assoc($query)){
                        ?>

                        <tr>
                            <td><?php echo $result['id_barang']?></td>
                            <td><?php echo $result['nama_barang']?></td>
                            <td><?php echo $result['id_jenis']?></td>
                            <td><?php echo $result['harga']?></td>
                            <td><?php echo $result['stok']?></td>
                            <td>
                                <a href="view_edit.php?id=<?php echo $result['id_barang'];?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>edit</a>
                                <a href="proses_hapus.php?id=<?php echo $result['id_barang'];?>"
                                onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="fa-solid fa-trash"></i>Hapus</a>
                            </td>
                        </tr>

                        <?php 
                        $id_barang++;
                    }
                }else{
                    echo "belum ada data";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
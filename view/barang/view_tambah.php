<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <title>tambah data barang</title>
</head>
<body>
    <div class="container">
        <h1>tambah data barang</h1>
        <form action="proses_tambah.php" method="post">
            <div class="mb-3">
                <label for="" class="form-label">ID_Barang</label>
                <input type="text" class="form-control" name="id_barang" id="" placeholder=""/>
            </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nama_Barang2</label>
                    <input type="text" class="form-control" name="nama_barang" id="" placeholder=""/>
                </div>
                <div class="mb-3">
                <label for="" class="form-label">ID_Jenis</label>
                <input type="text" class="form-control" name="id_jenis" id="" placeholder=""/>
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" id="" placeholder=""/>
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Stok</label>
                <input type="text" class="form-control" name="stok" id="" placeholder=""/>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"></script>
    </div>
</body>
</html>
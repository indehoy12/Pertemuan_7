<!DOCTYPE html>
<html>
<head>
    <title>Edit Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet">
</head>
<body class="container mt-5">

<h2 class="mb-4">Edit Pelanggan</h2>

<form action="/pelanggan/update/<?= $pelanggan['id'] ?>" method="post">
    <?= csrf_field(); ?>

    <div class="mb-3">
        <label>Nama Pelanggan</label>
        <input type="text" name="nama" class="form-control" value="<?= $pelanggan['nama'] ?>" required>
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?= $pelanggan['alamat'] ?>" required>
    </div>

    <div class="mb-3">
        <label>No HP</label>
        <input type="text" name="no_hp" class="form-control" value="<?= $pelanggan['no_hp'] ?>" required>
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="/pelanggan" class="btn btn-secondary">Kembali</a>
</form>

</body>
</html>

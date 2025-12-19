<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2>Data Barang</h2>

<a href="/barang/new" class="btn btn-primary mb-3">Tambah Barang</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach ($barang as $b): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $b['nama_barang'] ?></td>
            <td><?= number_format($b['harga'],0,',','.') ?></td>
            <td><?= $b['stok'] ?></td>
            <td>
                <a href="/barang/edit/<?= $b['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="/barang/delete/<?= $b['id'] ?>" 
                   onclick="return confirm('Yakin hapus?')" 
                   class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>

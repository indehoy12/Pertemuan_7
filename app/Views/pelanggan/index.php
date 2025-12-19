<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2>Data Pelanggan</h2>

<a href="/pelanggan/new" class="btn btn-primary mb-3">Tambah Pelanggan</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach ($pelanggan as $p): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $p['nama'] ?></td>
            <td><?= $p['alamat'] ?></td>
            <td><?= $p['no_hp'] ?></td>
            <td>
                <a href="/pelanggan/edit/<?= $p['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="/pelanggan/delete/<?= $p['id'] ?>"
                   onclick="return confirm('Yakin hapus pelanggan?')"
                   class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>

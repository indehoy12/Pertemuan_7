<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2>Data Transaksi</h2>
<a href="/transaksi/new" class="btn btn-primary mb-3">Tambah Transaksi</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Pelanggan</th>
        <th>Barang</th>
        <th>Qty</th>
        <th>Total</th>
        <th>Aksi</th>
    </tr>

    <?php $no = 1;
    foreach ($transaksi as $t): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $t['nama'] ?></td>
            <td><?= $t['nama_barang'] ?></td>
            <td><?= $t['qty'] ?></td>
            <td><?= number_format($t['total']) ?></td>
            <td>
                <a href="/transaksi/detail/<?= $t['id_transaksi'] ?>" class="btn btn-info btn-sm">
                    Detail Transaksi
                </a>
                <a href="/transaksi/delete/<?= $t['id_transaksi'] ?>" onclick="return confirm('Yakin hapus?')"
                    class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>

    <?php endforeach ?>
</table>

<?= $this->endSection() ?>
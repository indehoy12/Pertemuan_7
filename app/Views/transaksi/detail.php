<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2>Detail Transaksi</h2>

<table class="table table-bordered">
    <tr>
        <th>ID Transaksi</th>
        <td><?= $transaksi['id_transaksi'] ?></td>
    </tr>
    <tr>
        <th>ID Pelanggan</th>
        <td><?= $transaksi['id_pelanggan'] ?></td>
    </tr>
    <tr>
        <th>Nama Pelanggan</th>
        <td><?= $transaksi['nama_pelanggan'] ?></td>
    </tr>
    <tr>
        <th>ID Barang</th>
        <td><?= $transaksi['id_barang'] ?></td>
    </tr>
    <tr>
        <th>Nama Barang</th>
        <td><?= $transaksi['nama_barang'] ?></td>
    </tr>
    <tr>
        <th>Qty</th>
        <td><?= $transaksi['qty'] ?></td>
    </tr>
    <tr>
        <th>Total</th>
        <td>Rp <?= number_format($transaksi['total'], 0, ',', '.') ?></td>
    </tr>
    <tr>
        <th>Tanggal</th>
        <td><?= date('d-m-Y H:i', strtotime($transaksi['created_at'])) ?></td>
    </tr>
</table>

<a href="/transaksi" class="btn btn-secondary">Kembali</a>

<?= $this->endSection() ?>
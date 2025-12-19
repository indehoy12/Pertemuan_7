<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2>Tambah Transaksi</h2>

<form action="/transaksi/create" method="post">

    <div class="mb-3">
        <label>Pelanggan</label>
        <select name="pelanggan_id" class="form-control" required>
            <option value="">-- Pilih Pelanggan --</option>
            <?php foreach ($pelanggan as $p): ?>
                <option value="<?= $p['id'] ?>">
                    <?= $p['nama'] ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Barang</label>
        <select name="barang_id" class="form-control" required>
            <option value="">-- Pilih Barang --</option>
            <?php foreach ($barang as $b): ?>
                <option value="<?= $b['id'] ?>">
                    <?= $b['nama_barang'] ?> - <?= number_format($b['harga']) ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Qty</label>
        <input type="number" name="qty" class="form-control" required>
    </div>

    <button class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection() ?>

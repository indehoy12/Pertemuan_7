<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'KASIRKU contrast'; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid px-4">
        <a class="navbar-brand fw-bold" href="/">KASIRKU</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-3">
                <li class="nav-item">
                    <a class="nav-link" href="/barang">Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pelanggan">Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/transaksi">Transaksi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container mt-4">
    <?= $this->renderSection('content') ?>
</div>

</body>
</html>

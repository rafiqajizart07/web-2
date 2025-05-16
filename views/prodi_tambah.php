<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    Prodi::create($_POST);
    header("Location: index.php?page=prodi");
}
?>

<div class="container mt-4">
    <h2>Tambah Program Studi</h2>
    <form method="post">
        <div class="mb-3">
            <label>Kode</label>
            <input type="text" name="kode" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jenjang</label>
            <input type="text" name="jenjang" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Ketua</label>
            <input type="text" name="ketua" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="?page=prodi" class="btn btn-secondary">Kembali</a>
    </form>
</div>

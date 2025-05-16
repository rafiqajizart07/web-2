<?php
$id = $_GET['id'];
$prodi = Prodi::getById($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    Prodi::update($id, $_POST);
    header("Location: index.php?page=prodi");
}
?>

<div class="container mt-4">
    <h2>Edit Program Studi</h2>
    <form method="post">
        <div class="mb-3">
            <label>Kode</label>
            <input type="text" name="kode" class="form-control" value="<?= $prodi['kode'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= $prodi['nama'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Jenjang</label>
            <input type="text" name="jenjang" class="form-control" value="<?= $prodi['jenjang'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Ketua</label>
            <input type="text" name="ketua" class="form-control" value="<?= $prodi['ketua'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="?page=prodi" class="btn btn-secondary">Kembali</a>
    </form>
</div>

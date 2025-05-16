<?php
require_once './Config/DB.php';
$db = DB::connect();
$jenisList = $db->query("SELECT * FROM jenis_kegiatan")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    Kegiatan::create($_POST);
    header("Location: index.php?page=kegiatan");
}
?>

<div class="container mt-4">
    <h2>Tambah Kegiatan</h2>
    <form method="post">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Jenis Kegiatan</label>
            <select name="jenis_kegiatan_id" class="form-control" required>
                <option value="">-- Pilih Jenis --</option>
                <?php foreach ($jenisList as $jenis): ?>
                    <option value="<?= $jenis['id'] ?>"><?= $jenis['nama'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="?page=kegiatan" class="btn btn-secondary">Kembali</a>
    </form>
</div>

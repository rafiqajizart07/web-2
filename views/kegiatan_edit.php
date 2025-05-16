<?php
$id = $_GET['id'];
$data = Kegiatan::getById($id);

$db = DB::connect();
$jenisList = $db->query("SELECT * FROM jenis_kegiatan")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    Kegiatan::update($id, $_POST);
    header("Location: index.php?page=kegiatan");
}
?>

<div class="container mt-4">
    <h2>Edit Kegiatan</h2>
    <form method="post">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="form-control" value="<?= $data['tanggal_mulai'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" class="form-control" value="<?= $data['tanggal_selesai'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"><?= $data['deskripsi'] ?></textarea>
        </div>
        <div class="mb-3">
            <label>Jenis Kegiatan</label>
            <select name="jenis_kegiatan_id" class="form-control" required>
                <?php foreach ($jenisList as $jenis): ?>
                    <option value="<?= $jenis['id'] ?>" <?= $jenis['id'] == $data['jenis_kegiatan_id'] ? 'selected' : '' ?>>
                        <?= $jenis['nama'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="?page=kegiatan" class="btn btn-secondary">Kembali</a>
    </form>
</div>

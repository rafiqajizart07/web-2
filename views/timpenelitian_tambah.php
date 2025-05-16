<h1 class="mt-4">Tambah Anggota Tim Penelitian</h1>
<form method="post" action="index.php?page=timpenelitian_tambah">
    <div class="mb-3">
        <label>Dosen</label>
        <select name="dosen_id" class="form-control" required>
            <?php
            include './Controllers/Dosen.php';
            foreach (Dosen::getAll() as $d) {
                echo "<option value='{$d['id']}'>{$d['nama']}</option>";
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Judul Penelitian</label>
        <select name="penelitian_id" class="form-control" required>
            <?php
            include './Controllers/Penelitian.php';
            foreach (Penelitian::getAll() as $p) {
                echo "<option value='{$p['id']}'>{$p['judul']}</option>";
            }
            ?>
        </select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
</form>

<?php
include './Controllers/TimPenelitian.php';
if (isset($_POST['submit'])) {
    $data = [
        'dosen_id' => $_POST['dosen_id'],
        'penelitian_id' => $_POST['penelitian_id']
    ];
    if (TimPenelitian::create($data)) {
        echo "<script>location.href='index.php?page=timpenelitian';</script>";
    }
}
?>

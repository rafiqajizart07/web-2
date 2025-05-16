<?php
require_once './Controllers/Prodi.php';
$prodiList = Prodi::getAll();
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Data Program Studi</h1>
    <a href="?page=prodi_tambah" class="btn btn-primary mb-3">+ Tambah Prodi</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jenjang</th>
                <th>Ketua</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($prodiList as $prodi): ?>
                <tr>
                    <td><?= $prodi['kode'] ?></td>
                    <td><?= $prodi['nama'] ?></td>
                    <td><?= $prodi['jenjang'] ?></td>
                    <td><?= $prodi['ketua'] ?></td>
                    <td>
                        <a href="?page=prodi_edit&id=<?= $prodi['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="?page=prodi_hapus&id=<?= $prodi['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

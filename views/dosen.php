<?php
require_once './Controllers/Dosen.php';
$dosenList = Dosen::getAll();
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Data Dosen</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Gelar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($dosenList as $dosen): ?>
            <tr>
                <td><?= $dosen['nidn'] ?></td>
                <td><?= $dosen['nama'] ?></td>
                <td><?= $dosen['gelar_belakang'] ?></td>
                <td>
                    <a href="?page=dosen_edit&id=<?= $dosen['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="?page=dosen_delete&id=<?= $dosen['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>

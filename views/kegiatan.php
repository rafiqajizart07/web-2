<?php
require_once './Controllers/Kegiatan.php';
$kegiatanList = Kegiatan::getAll();
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Data Kegiatan</h1>
    <a href="?page=kegiatan_tambah" class="btn btn-primary mb-3">+ Tambah Kegiatan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Jenis Kegiatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($kegiatanList as $k): ?>
                <tr>
                    <td><?= $k['nama'] ?></td>
                    <td><?= $k['tanggal_mulai'] ?></td>
                    <td><?= $k['tanggal_selesai'] ?></td>
                    <td><?= $k['jenis_nama'] ?></td>
                    <td>
                        <a href="?page=kegiatan_edit&id=<?= $k['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="?page=kegiatan_hapus&id=<?= $k['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

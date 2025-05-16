<h1 class="mt-4">Tim Penelitian</h1>
<a href="index.php?page=timpenelitian_tambah" class="btn btn-primary mb-3">Tambah Anggota</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Dosen</th>
            <th>Judul Penelitian</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include './Controllers/TimPenelitian.php';
        $data = TimPenelitian::getAll();
        $no = 1;
        foreach ($data as $row):
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['dosen_nama'] ?></td>
            <td><?= $row['penelitian_judul'] ?></td>
            <td>
                <a href="index.php?page=timpenelitian_hapus&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

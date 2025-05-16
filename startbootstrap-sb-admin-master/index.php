<?php
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'timpenelitian': include 'views/timpenelitian.php'; break;
    case 'timpenelitian_tambah': include 'views/timpenelitian_tambah.php'; break;
    case 'timpenelitian_hapus': include 'views/timpenelitian_hapus.php'; break;
    default: echo "<h1>Selamat Datang</h1>";
}
?>

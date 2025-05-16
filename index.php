<?php
include './Layouts/header.php';
include './Layouts/navbar.php';

$page = $_GET['page'] ?? 'home';

$view = "./views/$page.php";
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'timpenelitian': include 'views/timpenelitian.php'; break;
    case 'timpenelitian_tambah': include 'views/timpenelitian_tambah.php'; break;
    case 'timpenelitian_hapus': include 'views/timpenelitian_hapus.php'; break;
    // ...
}

if (file_exists($view)) {
    include $view;
} else {
    include './views/404.php';
}

include './Layouts/footer.php';

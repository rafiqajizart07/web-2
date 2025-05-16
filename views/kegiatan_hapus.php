<?php
$id = $_GET['id'];
Kegiatan::delete($id);
header("Location: index.php?page=kegiatan");

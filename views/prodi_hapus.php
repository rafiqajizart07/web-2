<?php
$id = $_GET['id'];
Prodi::delete($id);
header("Location: index.php?page=prodi");

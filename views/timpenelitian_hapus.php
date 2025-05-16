<?php
include './Controllers/TimPenelitian.php';
if (isset($_GET['id'])) {
    TimPenelitian::delete($_GET['id']);
}
echo "<script>location.href='index.php?page=timpenelitian';</script>";
?>

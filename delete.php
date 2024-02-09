<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM siswa WHERE id=$id";
mysqli_query($koneksi, $query);
?>
<script>alert('Data dengan id <?= $id ?> suskses di hapus'); location.href = 'index.php'; </script>
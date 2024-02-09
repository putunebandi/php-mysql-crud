<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $gender = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    $hobi = $_POST['hobi'];

    $query = "INSERT INTO siswa (nama, jenis_kelamin, kelas, hobi) VALUES ('$nama', '$gender', '$kelas', '$hobi')";
    mysqli_query($koneksi, $query);

    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data User</h2>
    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label>Pilih gender:</label>
        <select name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>
        <label>Kelas:</label>
        <input type="text" name="kelas" required>
        <br>
        <label>Hobi:</label>
        <input type="text" name="hobi" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>
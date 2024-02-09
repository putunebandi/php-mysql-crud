<?php
include 'koneksi.php';

$id = $_GET['id'];
$hasil = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id=$id");
$row = mysqli_fetch_assoc($hasil);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $gender = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    $hobi = $_POST['hobi'];

    $query = "UPDATE siswa SET nama='$nama', jenis_kelamin='$gender', kelas='$kelas', hobi='$hobi' WHERE id=$id";
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
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $row['nama']; ?>" required>
        <br>
        <label>Pilih gender:</label>
        <select name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>
        <label>Kelas:</label>
        <input type="text" name="kelas" value="<?= $row['kelas']; ?>" required>
        <br>
        <label>Hobi:</label>
        <input type="text" name="hobi" value="<?= $row['hobi']; ?>" required>
        <br>
        <button type="submit">Simpan Perubahan</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>
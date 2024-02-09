<?php
include 'koneksi.php';

$result = mysqli_query($koneksi, "SELECT * FROM siswa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh CRUD</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                <td><?= $row['kelas']; ?></td>
                <td><?= $row['hobi']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="tambah.php">Tambah Data</a>
</body>
</html>
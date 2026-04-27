<?php
include "koneksi.php";
echo "<script>console.log('Koneksi berhasil')</script>";
$hasil = mysqli_query($koneksi, "SELECT * FROM Siswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar MySQL</title>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jurusan</th>
            <th>Kelas</th>
        </tr>
        <?php while ($baris = mysqli_fetch_assoc($hasil)) { ?>
        <tr>
            <td><?= $baris["nama"]; ?></td>
            <td><?= $baris["umur"]; ?></td>
            <td><?= $baris["jurusan"]; ?></td>
            <td><?= $baris["kelas"]; ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>
<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'pw_20230124');

$result = mysqli_query($conn, "SELECT * FROM karyawan");

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

$karyawan = $rows;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h3>Daftar Mahasiswa</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>UMUR</th>
            <th>JANTINA</th>
            <th><a href="tambah.php">tambah maklumat</a></th>

        </tr>

        <?php $i = 1;
        foreach ($karyawan as $m) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $m['nama']; ?></td>
            <td><?= $m['alamat']; ?></td>
            <td><?= $m['umur']; ?></td>
            <td id="e"><?= $m['jantina']; ?></td>
            <td>
                <a href="">ubah</a> | <a href="">hapus</a>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>


</body>

</html>
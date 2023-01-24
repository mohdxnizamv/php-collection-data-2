<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'tambah.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h4>Form Tambah Data Mahasiswa</h4>
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama" autofocus required>
                </label>
            </li>
            <li>
                Negeri :
                <select name="negeri">
                    <option value="kuala lumpur">kuala lumpur</option>
                    <option value="putrajaya">putrajaya</option>
                    <option value="selangor">selangor</option>
                    <option value="johor">johor</option>
                    <option value="perak">perak</option>
                    <option value="kedah">kedah</option>
                    <option value="kelantan">kelantan</option>
                    <option value="perlis">perlis</option>
                    <option value="pahang">pahang</option>
                    <option value="pulau pinang">pulau pinang</option>
                    <option value="negeri sembilan">negeri sembilan</option>
                </select>
            </li>
            <li>
                <label>
                    Umur :
                    <input type="text" name="umur" required>
                </label>
            </li>
            <li>
                Jantina :
                <select name="jantina">
                    <option value="lelaki">lelaki</option>
                    <option value="perempuan">perempuan</option>
                </select>
            </li>
            <!--  -->
            <li>
                <button type="submit" name="tambah">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>

</html>
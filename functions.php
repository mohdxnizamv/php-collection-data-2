<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', 'root', 'pw_20230124');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $negeri = htmlspecialchars($data['negeri']);
  $umur = htmlspecialchars($data['umur']);
  $jantina = htmlspecialchars($data['jantina']);
  

  $query = "INSERT INTO
              karyawan
            VALUES
            (null, '$nama', '$negeri', '$umur', '$jantina');
          ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
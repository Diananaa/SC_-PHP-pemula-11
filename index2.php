<!DOCTYPE html>
<?php

// menghubungkan
$conn = mysqli_connect("localhost","root","","phpdasar");

// 
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
if (!$result){
    echo mysqli_error($conn);
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>


    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>gambar</th>
            <th>nrp</th>
            <th>nama</th>
            <th>email</th>
            <th>jurusan</th>
        </tr>
        <?php $i=1; ?>
        <?php while($row =mysqli_fetch_assoc($result)): ?>
        <tr>
            <td> <?= $i ?></td>
            <td>
                <a href="">ubah </a>|
                <a href="">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row ["gambar"];?>" width="50">
            </td>
            <td>
               <?= $row["nrp"]; ?>
            </td>
            <td>
               <?= $row["nama"]; ?>
            </td>
            <td>
               <?= $row["email"]; ?>
            </td>
            <td>
               <?= $row["jurusan"]; ?>
            </td>

        </tr>
        <?php $i++; ?>
        <?php endwhile;?>
    </table>
</body>
</html>
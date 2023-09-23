<?php

require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding=10 cellspacing=0>
        <h1><a href="tambah.php">Tambah Data</a></h1>
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>NPM</td>
            <td>Jurusan</td>
            <td>Fakultas</td>
            <td colspan=2>Aksi</td>
        </tr>
        <?php $i=1;?>
        
        <?php foreach ($mahasiswa as $mhs):?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?= $mhs['nama']?></td>
                <td><?= $mhs['npm']?></td>
                <td><?= $mhs['jurusan']?></td>
                <td><?= $mhs['fakultas']?></td>
                <td><a href="hapus.php/?id= <?= $mhs['id'];?>">Hapus</a></td>
                <td>edit</td>
            </tr>
            <?php $i++;?>
        <?php endforeach ?>
    </table>
</body>
</html>
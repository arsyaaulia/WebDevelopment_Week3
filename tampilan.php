<?PHP 
include "koneksi.php";
$sql = "SELECT * FROM mhs";
$result = mysqli_query($conn, $sql);

$mhs = [];
if ($result){
    $mhs = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

mysqli_close($conn);
?>

<!DOCTYPE html!>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Mahasiswa</title>
    </head>

    <body>
        <h1>Daftar Mahasiswa</h1>
        <?php if (count($mhs) > 0) : ?>
        <table border="" cellpadding="5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Jurusan</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($mhs as $row) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['posisi']; ?></td>
                        <td><?php echo $row['jurusan']; ?></td>
                        <td><img src="gambar/<?php echo $row['foto']?>" width="100"></td>
                        
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>

    <?php else: ?>
        <p>Tidak ada data</p>
    <?php endif; ?>
        <br>

</html>
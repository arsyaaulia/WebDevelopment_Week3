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

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1{
            color: #333;
        }
        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td{
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th{
            background-color: #f2f2f2;
        }
        tr:nth-child(even){
            background-color: #f9f9f9;
        }
        tr:hover{
            background-color: #e9e9e9;
        }
        a{
            text-decoration: none;
            color: #007BFF;
        }
        a:hover{
            text-decoration: underline;
        }
         
    </style>

    <body>
        <h1>Daftar Mahasiswa</h1>
        <?php if (count($mhs) > 0) : ?>
        <table cellpadding="5">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Jurusan</th>
                    <th>Foto</th>
                    <th>Others</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($mhs as $row) : ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['posisi']; ?></td>
                        <td><?php echo $row['jurusan']; ?></td>
                        <td><img src="gambar/<?php echo $row['foto']?>" width="100"></td>
                        
                        <td>
                            <a href="update.php?id=<?php echo $row['id']?>">Edit</a> |
                            <a href="delete.php?id=<?php echo $row['id']?>" onclick="return confirm ('Delete this Data?')">Delete</a>
                        </td>
                    </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br>
        <a href="form.php">Tambah Data Baru</a>
    </body>

    <?php else: ?>
        <p>Tidak ada data</p>
    <?php endif; ?>
        <br>

</html>
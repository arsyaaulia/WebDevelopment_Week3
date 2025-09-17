<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f4f4f4;
    }
    h1{
        color: #333;
        text-align: center;
    }
    form{
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        max-width: 400px;
        margin: auto;
    }
    input[type="text"], input[type="file"]{
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button{
        background-color: #007BFF;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    button:hover{
        background-color: #1486ffff;
    }
</style>
<body>
    <h1>Form Input Data O-Week</h1>
    <form method="POST" enctype="multipart/form-data" >
        Nama: <input type="text" name="nama" required><br><br>
        Posisi: <input type="text" name="posisi" required><br><br>
        Jurusan: <input type="text" name="jurusan" required><br><br>
        Foto: <input type="file" name="foto" required><br><br>
        <button type="submit" name="submit">Simpan</button>
        <button type="button" onclick="window.location.href='tampilan.php'">Tampilkan Data</button>

    </form>
</body>

<?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $posisi = $_POST['posisi'];
        $jurusan = $_POST['jurusan'];

        $foto = $_FILES['foto']['name'];
        $temp = $_FILES['foto']['tmp_name'];
        $folder = "gambar/";
        move_uploaded_file($temp, $folder . $foto);

        $sql = "INSERT INTO mhs (nama, posisi, jurusan, foto) VALUES ('$nama', '$posisi', '$jurusan', '$foto')";
        if(mysqli_query($conn, $sql)){
            echo "Data berhasil disimpan.";
            header("Location: tampilan.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

    
<?php
    include "koneksi.php";
    
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $posisi = $_POST['posisi'];
        $jurusan = $_POST['jurusan'];

        
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];


        $path = "gambar/".$foto;

        if(move_uploaded_file($tmp, $path)){
            $sql = "INSERT INTO mhs (nama, posisi, jurusan, foto) VALUES ('$nama', '$posisi', '$jurusan', '$foto')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<script>alert('Data berhasil disimpan'); window.location='tampilan.php';</script>";
            } else {
                echo "<script>alert('Data gagal disimpan'); window.location='form.php';</script>";
            }
        } else {
            echo "<script>alert('Gagal mengupload foto'); window.location='form.php';</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Input Data Mahasiswa</h1>
    <form method="POST" enctype="multipart/form-data" >
        nama: <input type="text" name="nama" required><br><br>
        posisi: <input type="text" name="posisi" required><br><br>
        jurusan: <input type="text" name="jurusan" required><br><br>
        foto: <input type="file" name="foto" required><br><br>
        <button type="submit" name="submit">Simpan</button>

    </form>
</body>    
<?php
include 'koneksi.php';

// Validasi ID
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: ID tidak ditemukan. <a href='menampilkan.php'>Kembali</a>");
}

$id = (int) $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM mhs WHERE id=$id");

if (!$result || mysqli_num_rows($result) == 0) {
    die("Error: Data tidak ditemukan. <a href='menampilkan.php'>Kembali</a>");
}

$data = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $nama   = !empty($_POST['nama']) ? $_POST['nama'] : $data['nama'];
    $posisi  = !empty($_POST['posisi']) ? $_POST['posisi'] : $data['posisi'];
    $jurusan  = !empty($_POST['jurusan']) ? $_POST['jurusan'] : $data['jurusan'];

    if (!empty($_FILES['foto']['name'])) {
        $foto   = $_FILES['foto']['name'];
        $temp   = $_FILES['foto']['tmp_name'];
        $folder = "gambar/";
        move_uploaded_file($temp, $folder . $foto);
    } else {
        $foto = $data['foto'];
    }

    $sql = "UPDATE mhs SET 
                nama='$nama',
                posisi='$posisi',
                jurusan='$jurusan',
                foto='$foto'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: tampilan.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
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
    <h1>Update Data O-Week</h1>
    <form method="POST" enctype="multipart/form-data">
        Nama: <input type="text" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required><br><br>
        Posisi: <input type="text" name="posisi" value="<?php echo htmlspecialchars($data['posisi']); ?>" required><br><br>
        Jurusan: <input type="text" name="jurusan" value="<?php echo htmlspecialchars($data['jurusan']); ?>" required><br><br>
        Foto: <input type="file" name="foto"><br>
        <small>Foto saat ini: <?htmlspecialchars($data['foto']);?></small><br><br>
        <button type="submit" name="submit">Update</button>
        <a href="tampilan.php">
            <button type="button">
                Kembali
            </button>
        </a>
    </form>
</body>
</html>
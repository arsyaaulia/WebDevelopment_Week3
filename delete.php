<?php
include 'koneksi.php';

if (!isset($_GET['id'])) {
    die("Error: ID tidak ditemukan. <a href='tampilan.php'>Kembali</a>");
}

$id = (int) $_GET['id'];

$result = mysqli_query($conn, "SELECT foto FROM mhs WHERE id=$id");
if (!$result || mysqli_num_rows($result) == 0) {
    $data = mysqli_fetch_assoc($result);
    $foto = $data['foto'];
    if ($foto && file_exists("gambar/" . $foto)) {
        unlink("gambar/" . $foto);
    }
}

$sql = "DELETE FROM mhs WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    header("Location: tampilan.php");
    exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>
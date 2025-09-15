<?PHP
$servername = "localhost";
$username = "root";
$password = "root";
$database = "phpDasar";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
echo "Koneksi Berhasil";

?>
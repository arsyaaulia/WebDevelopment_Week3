<?php
// Definisi class mahasiswa
class PISKO{

    public  $id, 
            $nama,
            $tglLahir, 
            $kampus,
            $jurusan,
            $foto;
    
    public function __construct($id, $nama, $tglLahir, $kampus, $jurusan, $foto){
        $this->id = $id;
        $this->nama = $nama;
        $this->tglLahir = $tglLahir;
        $this->kampus = $kampus;
        $this->jurusan = $jurusan;
        $this->foto = $foto;
        
    }

    public function tampilkanData(){
        echo "NO.   : " . $this->id . "<br>";
        echo "Nama  : " . $this->nama . "<br>";
        echo "Tanggal Lahir: " . $this->tglLahcodir . "<br>";
        echo "Kampus: " . $this->kampus . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
        echo "foto: " . $this->foto . "<br>";
        echo "<img src='img/" . $this->foto . "width='100'<br><hr>";
        
    }
}

class punyaKucing extends Pisko{
    public $jumlahKucing, $jenisKucing;
    
    public function __construct($id, $nama, $nim, $jurusan, $email, $foto, $jumlahKucing, $jenisKucing){
        parent::__construct($id, $nama, $nim, $jurusan, $email, $foto);
        $this->jumlahKucing = $jumlahKucing;
        $this->jenisKucing = $jenisKucing;
    }

    public function tampilkanData(){
        parent::tampilkanData();
        echo "Jumlah Kucing: %this -> jumlahKucing <br>";
        echo "Jenis Kucing: %this -> jenisKucing <br>";
        // $this->Pisko->tampilkanData();
    }
    
}

class Kelas{
    public Pisko $pisko;
    public $ruangKelas;

    public function __construct($ruangKelas, Pisko $pisko){
        $this->ruangKelas = $ruangKelas;
        $this->pisko = $pisko;
    }

    public function tampilkanKelas(){
        echo "Ruang Kelas: " . $this->ruangKelas . "<br>";
        echo "Nama Mahasiswa: " . $this->pisko->nama . "<br>";
        $this->pisko->tampilkanData();
    }
}

$pisko1 = new Pisko(
    1, 
    "Habib", 
    "04 Juni 2005", 
    "Universitas Hasanuddin", 
    "Teknik Informatika", 
    "habib.png"
);

$pisko2 = new Pisko(
    2, 
    "Farhan", 
    "22 September 2005", 
    "Universitas Negeri Makassar", 
    "Teknik Elektro", 
    "farhan.png",
    4,
    "Anggora, Persia, Maine"
);

$pisko3 = new Pisko(
    3, 
    "Ifa", 
    "03 Maret 2006", 
    "Universitas Hasanuddin", 
    "Penginderaan Jarak Jauh dan Sistem Geografis", 
    "ifa.png",
    10,
    "Persia, Maine"
);

// $pisko1 = new PISKO(1, "Habib", "04 Juni 2005", "Universitas Hasanuddin", "Teknik Informatika", "habib.png");
// $pisko2 = new PISKO(2, "Farhan", "22 September 2005", "Universitas Negeri Makassar", "Teknik Mesin", "farhan.png");
// $pisko3 = new PISKO(3, "Ifa", "01 Maret 2006", "Universitas Hasanuddin", "Penginderaan Jarak Jauh dan Sistem Geografis", "ifa.png");

//object dari class Pisko
// $pisko1 = new PISKO();
// $pisko1->id = 1;
// $pisko1->nama = "Habib";
// $pisko1->tglLahir = "04 Juni 2005";
// $pisko1->kampus = "Universitas Hasanuddin";
// $pisko1->jurusan = "Teknik Informatika";
// $pisko1->foto = "habib.png";

// $pisko2 = new PISKO();
// $pisko2->id = 2;
// $pisko2->nama = "Farhan";
// $pisko2->tglLahir = "22 September 2005";
// $pisko2->kampus = "Universitas Negeri Makassar";
// $pisko2->jurusan = "Teknik Mesin";
// $pisko2->foto = "farhan.png";

// $pisko3 = new PISKO();
// $pisko3->id = 3;
// $pisko3->nama = "Ifa";
// $pisko3->tglLahir = "01 Maret 2006";
// $pisko3->kampus = "Universitas Hasanuddin";
// $pisko3->jurusan = "Penginderaan Jarak Jauh dan Sistem Geografis";
// $pisko3->foto = "ifa.png";  


$kelas1 = new Kelas("Ruang 101", $pisko1);
$kelas2 = new Kelas("Ruang 202", $pisko2);
$kelas3 = new Kelas("Ruang 303", $pisko3);

// output
$kelas1->tampilkanKelas();

$kelas2->tampilkanKelas();
$kelas3->tampilkanKelas();
?>
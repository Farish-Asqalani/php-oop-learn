<?php 
class Perabotan {
    private $barang, $kondisi, $harga;

    // membuat method untuk construct
    public function __construct($nama, $kondisi, $harga)
    {
        $this->barang = $nama;
        $this->kondisi = $kondisi;
        $this->harga = $harga;
    }

    // membuat method untuk menampilkan informasi
    public function info() {
        $str = "Nama : {$this->barang}\nKondisi : {$this->kondisi}\nHarga : {$this->harga}";
        return $str;
    }

    // membuat method untuk menampilkan dan mengubah nama barang
    public function setNama($nama) {
        $this->barang = $nama;
    }

    public function getNama() {
        return $this->barang;
    }

    // membuat method untuk menampilkan kondisi barang
    public function getKondisi() {
        return $this->kondisi;
    }

    // membuat method untuk menampilkan harga barang
    public function getHarga() {
        return $this->harga;
    }
}

// membuat class untuk tipe tipe barang yang akan digunakan
class Meja extends Perabotan {
    private string $jenisMeja;

    // membuat constructor untuk class Meja
    function __construct($nama, $kondisi, $harga, $jenisMeja)
    {
        parent::__construct($nama, $kondisi, $harga);
        $this->jenisMeja = $jenisMeja;
    }

    // membuat method untuk menampilkan informasi dari produk meja
    function info() {
        $str = "Meja : \n". parent::info(). "\nJenis Meja : {$this->jenisMeja}";
        return $str;
    }
}

// Mmembuat class untuk tipe barang yang akan digunakan yaitu Sepatu
class Sepatu extends Perabotan {
    private string $jenisSepatu, $warnaSepatu;

    // membuat method Construct untuk class Sepatu
    function __construct($nama, $kondisi, $harga, $jenisSepatu, $warnaSepatu)
    {
        parent::__construct($nama, $kondisi, $harga);
        $this->jenisSepatu = $jenisSepatu;
        $this->warnaSepatu = $warnaSepatu;
    }

    // membuat method untuk menampilkan informasi sepatu
    function info() {
        $str = "Sepatu : \n". parent::info(). "Jenis Sepatu : {$this->jenisSepatu}\nWarna Sepatu : {$this->jenisSepatu}";
        return $str;
    }
}

// mentest membuat object
$barang = new Perabotan("Kursi", "Baik", "2.000.000");
$meja = new Meja("Meja Sekolah", "Baru", "900.000", "Meja memanjang");
$sepatu = new Sepatu("Hommy ped", "Baru", "700.000", "Anak-anak", "hitam");
echo $barang->info($barang);
echo PHP_EOL. "\n";
$barang->setNama("Meja");
echo $barang->getHarga($barang);
echo PHP_EOL. "\n";
echo $meja->info($meja);
echo PHP_EOL. "\n";
echo $sepatu->info($sepatu);
echo PHP_EOL. "\n";

<?php 
class Barang {
   private string $namaBarang, $hargaBarang;

   public function __construct($namaBarang, $hargaBarang)
    {
            $this->namaBarang = $namaBarang;
            $this->hargaBarang = $hargaBarang;
    }

    function setNama($namaBarang) {
        $this->namaBarang = $namaBarang;
    }

    public function getNama() {
        return $this->namaBarang;
    }

    public function setHarga($hargaBarang) {
        return $this->hargaBarang = $hargaBarang;
    }

    public function getHarga($hargaBarang) {
        return $this->hargaBarang = $hargaBarang;
    }

    function info() {
        $str = "{$this->namaBarang}\nHarga : {$this->hargaBarang}";
        return $str;
    }
}

class Pulpen extends Barang{
    var string $warna;

    function __construct($namaBarang, $hargaBarang, $warna)
    {
        parent::__construct($namaBarang, $hargaBarang);
        $this->warna = $warna;
    }

    function info() {
        $str = "Pulpen : ". parent::info(). "\nWarna : {$this->warna}";
        return $str;
    }
}

class Buku extends Barang {
    var string $halaman;
    var string $ukuran;
    
    function __construct($namaBarang, $hargaBarang, $ukuran, $halaman)
    {
        parent::__construct($namaBarang, $hargaBarang,);
        $this->halaman = $halaman;
        $this->ukuran = $ukuran;
    }

    function info() {
        $str = "Buku : ". parent::info(). "\nUkuran : {$this->ukuran}\nHalaman : {$this->halaman}";
        return $str;
    }
}

class Lambang extends Barang {
    var string $lambang;

    function __construct($nama, $hargaBarang, $lambang)
    {
        parent::__construct($nama, $hargaBarang);
        $this->lambang= $lambang;
    }
    
    function info()
    {
        $str = "Lambang : ". parent::info(). "\nTipe : {$this->lambang}";
        return $str;
    }
}

$produk1 = new Buku("Buku tulis", "3.000", "Besar", "56");
$produk2 = new Pulpen("Pulpen", "2000", "hitam");
$produk3 = new Lambang("Lambang Kelas", "4.000", "Kelas");
$produk4 = new Pulpen("Pulpen", "2.000", "Biru");
echo $produk1->info($produk1);
echo PHP_EOL. "\n";
echo $produk2->info($produk2);
echo PHP_EOL. "\n";
echo $produk3->info($produk3);
echo PHP_EOL. "\n";
$produk4->setNama("Pensil");
echo $produk4->info($produk4);




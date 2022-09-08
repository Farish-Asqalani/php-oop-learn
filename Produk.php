<?php 
class Barang {
    var string $namaBarang;
    var string $hargaBarang;

   public function __construct($nama, $harga)
    {
            $this->namaBarang = $nama;
            $this->hargaBarang = $harga;
    }


    function info() {
        $str = "{$this->namaBarang}\nHarga : {$this->hargaBarang}";
        return $str;
    }
}

class Pulpen extends Barang{
    var string $warna;

    function __construct($nama, $harga, $warna)
    {
        parent::__construct($nama, $harga);
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
    
    function __construct($nama, $harga, $ukuran, $halaman)
    {
        parent::__construct($nama, $harga,);
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

    function __construct($nama, $harga, $lambang)
    {
        parent::__construct($nama, $harga);
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
echo $produk1->info($produk1);
echo PHP_EOL. "\n";
echo $produk2->info($produk2);
echo PHP_EOL. "\n";
echo $produk3->info($produk3);
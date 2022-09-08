<?php 
class Barang {
    var string $namaBarang;
    var string $kondisiBarang;
    var string $harga;

    public function __construct($nama, $kondisi, $harga)
    {
        $this->namaBarang = $nama;
        $this->kondisiBarang = $kondisi;
        $this->harga = $harga;
    }

    public function info() {
        $str = "Nama : {$this->namaBarang}\nKondisi : {$this->kondisiBarang}\nHarga : {$this->harga}";
        return $str;
    }
}

class Console extends Barang {
    var string $pembuat;

    public function __construct($nama, $kondisi, $harga, $pembuat)
    {
        parent::__construct($nama, $kondisi, $harga);
        $this->pembuat = $pembuat;
    }

    public function info() {
        $str = "Console : \n". parent::info(). "\nPembuat : {$this->pembuat}";
        return $str;
    }
}

class Pc extends Barang {
    var string $pc;
    public function __construct($nama, $kondisi, $harga, $pc) 
    {
        parent::__construct($nama, $kondisi, $harga);
        $this->pc = $pc;
    }

    public function info() {
        $str = "PC : \n". parent::info(). "\npc : {$this->pc}";
        return $str;
    }
}

class Game extends Barang {
    var string $game;
    public function __construct($nama, $kondisi, $harga, $game)
    {
        parent::__construct($nama, $kondisi, $harga);
        $this->game = $game;
    }

    public function info() {
        $str = "Game : \n". parent::info(). "\nGame : {$this->game}";
        return $str;
    }
}

$data = new Console("PS5", "Second", "4.000.000", "Sony");
$data2 = new Pc("T600", "Second", "10.000.000", "Gaming");
$produk = new Pc("Lenovo all in one pc", "BNIB", "13.000.000", "Office");
$produk2 = new Game("Spiderman", "second", "300.000", "Sony");
echo $data->info($data);
echo PHP_EOL. "\n";
echo $data2->info($data2);
echo PHP_EOL. "\n";
echo $produk->info($produk);
echo PHP_EOL. "\n";
echo $produk2->info($produk2);
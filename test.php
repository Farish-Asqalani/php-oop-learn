<?php  
// membuat class Laptop
class Laptop {
    // membuat property $brand, $storage, $vga
    var string $brand;
    var string $storage;
    var string $vga;

    // membuat method construct untuk memasukkan value
    function __construct($brand, $storage, $vga)
    {
        $this->brand = $brand;
        $this->storage = $storage;
        $this->vga = $vga;
    }

        function tampilkan(Laptop $produk) {
        $info = "Nama : $produk->brand | Storage : $produk->storage | VGA : $produk->vga";
        return $info;
    }
}

// class untuk menampilkan object
// class tampilan {
//     function tampilkan(Laptop $produk) {
//         $info = "Nama : $produk->brand | Storage : $produk->storage | VGA : $produk->vga";
//         return $info;
//     }
// }

// membuat object produk
$produk = new Laptop("ASUS", "512 GB SSD", "Intel iris xe");
// $info = new tampilan;
echo $produk->tampilkan($produk);

echo PHP_EOL;

$produk1 = new Laptop("MSI", "512 GB SSD", "RTX 3050");
// $info2 = new tampilan;
echo $produk1->tampilkan($produk1);

echo PHP_EOL;

$produk2 = new Laptop("ACER", "512 GB", "GTX 1650");
// $info3 = new tampilan;
echo $produk2->tampilkan($produk2);

echo PHP_EOL;
$produk3 = new Laptop("HP", "512 GB", "RTX 3050");
echo $produk3->tampilkan($produk3);

echo PHP_EOL;
$produk4 = new Laptop("Lenovo Legion", "512 GB SSD", "RTX 3060");
echo $produk4->tampilkan($produk4);

echo PHP_EOL;

$produk5 = new Laptop("Lenovo Ideapad", "512 GB SSD", "vega 7");
echo $produk5->tampilkan($produk5);
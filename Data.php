<?php 
// studikasus mengenai data mahasiswa
// ada nama, kelas, jurusan, dan nilai
class Data {
    public $nama = "masukkan nama!";
    public $kelas = "masukkan kelas!";
    public $jurusan = "masukkan jurusan!";
    public $nilai = "masukkan niali!";

    // method adalah function yang ada didalam class

    public function dataDasar() {
        // untuk mengakses property dalam kedalam method kita bisa gunakan $this
        return "$this->nama, $this->kelas";
    }

}

// $data1 = new Data();
// $data1->nama = "Farish";
// $data1->kelas = 11;
// $data2 = new Data();
// $data2->nama = "Faisal";
// var_dump($data1);
// var_dump($data2);

// echo $data1->dataDasar();

echo PHP_EOL;

// $data3 = new Data();
$data3->nama = "Syihwan";
$data3->kelas = 11;
$data3->jurusan = "PPLG";
$data3->nilai = 100;

echo "Nama ". $data3->dataDasar();
echo PHP_EOL;
echo "Jurusan ". $data3->jurusan;

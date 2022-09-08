<?php
class Data {
    public $nama = "masukkan nama!";
    public $kelas = "masukkan kelas!";
    public $jurusan = "masukkan jurusan!";
    public $nilai = "masukkan niali!";

    // constructor
    public function __construct($nama, $kelas, $jurusan, $nilai)
    {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->jurusan = $jurusan;
        $this->nilai = $nilai;
    }

    public function dataDasar() {
        return "$this->nama, $this->kelas, $this->jurusan, $this->nilai";
    }
}

class InfoMurid {
    // membuat object menjadi tipe data
    function tampilkan(Data $data) {
        $tampilan = "Nama : {$data->nama}". PHP_EOL. "Kelas : {$data->kelas}". PHP_EOL. "Jurusan : {$data->jurusan}";
        return $tampilan;
    }
} 

$data1 = new Data("Farish Asqalani", 11, "PPLG", 80);
$data2 = new Data("Nor Swyihwan", 11, "Kimia", 100);
$data3 = new Data("Faisal", 11, "Kimia", 100);
echo "Data". PHP_EOL;
echo "1. " . $data1->dataDasar(); 
echo PHP_EOL;
echo "2. " . $data2->dataDasar(); 
echo PHP_EOL;
echo "3. " . $data3->dataDasar(); 
echo PHP_EOL;
echo PHP_EOL;

$data4 = new InfoMurid();
echo $data4->tampilkan($data1);
echo PHP_EOL;
echo PHP_EOL;
$data5 = new InfoMurid();
echo $data5->tampilkan($data2);
o<?php

class Data {
    var $nama = "masukkan nama!";
    var $kelas = "masukkan kelas!";
    var $jurusan = "masukkan jurusan!";
    var $nilai = "masukkan niali!";
    var $eskul;

    // constructor
    public function __construct($nama, $kelas, $jurusan, $nilai, $eskul)
    {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->jurusan = $jurusan;
        $this->nilai = $nilai;
        $this->eskul = $eskul;
    }



    public function dataDasar() {
        return "$this->nama, $this->kelas, $this->jurusan, $this->nilai, $this->eskul";
    }

}

$data1 = new Data("Asqalani", 11, "PPLG", 80, "pmr");
$data2 = new Data("Nor Swyihwan", 11, "Kimia", 100, null);
// echo "1. " . $data1->dataDasar(); 
echo "1. ". $data1->dataDasar();
echo PHP_EOL;
echo "2. " . $data2->dataDasar(); 

echo PHP_EOL;

// destructor

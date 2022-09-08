<?php 
// membuat class untuk keperluan login dan login
class Register {
    // membuat property yang akan digunakan untuk keperluan register
    var string $userName;
    var string $email;
    var string $password;
    var string $gender;
    var int $tanggalLahir;
    var int $bulanLahir;
    var int $tahunLahir;

    // membuat method construct untuk bisa memasukkan value
    function __construct($userName, $email, $password, $tanggalLahir, $bulanLahir, $tahunLahir, $gender)
    {
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
        $this->tanggalLahir = $tanggalLahir;
        $this->bulanLahir = $bulanLahir;
        $this->tahunLahir = $tahunLahir;
        $this->gender = $gender;
    }

    // method tanggalLahir() berguna agar tidak perlu menuliskan property tanggal,bulan dan tahun lahir satu satu
    function tanggalLahir() {
        return "$this->tanggalLahir | $this->bulanLahir | $this->tahunLahir";
    }

    // // membuat method untuk bisa menampilkan data user
    // function info($data) {
    //     $str =  "Username : $data->userName\nEmail : $data->email\nTanggal Lahir : {$data->tanggalLahir()}\nGender : ";
    //     // lakukan percabangan untuk mencek gender dari user
    //     if ($data->gender == "laki-laki") {
    //         $str .= $data->gender;
    //     } elseif ($data->gender == "perempuan") 
    //         $str .= $data->gender;
    //     return $str;
    // }
}

class Info {
    function tampil($data) {
        $str = "Username : $data->userName\nEmail : $data->email\nTanggal Lahir : {$data->tanggalLahir()}\nGender ";
        return $str;
    }
}

class Laki extends Register {
    
}



// membuat object
$data1 = new Laki("CL3IX", "risfarishk@gmail.com", '12345', 13, 6, 2006, "laki-laki");
$data2 = new Laki("Emow", "emow123@gmail.com", "emow123", 4, 2, 2005, "laki-laki");
$data3 = new Laki("Saaa", "saaa90@gmail.com", "saaaa9876", 8, 8, 2005, "perempuan");
$info = new Info();
echo $info->tampil($data1);
echo PHP_EOL. "\n";
echo $info->tampil($data2);
echo PHP_EOL. "\n";
echo $info->tampil($data3);



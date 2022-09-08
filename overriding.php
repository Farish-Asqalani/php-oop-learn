<?php
class Registerr {
    var string $userName;
    var string $password;
    var string $email;
    var string $gender;
    var string $mapel;

    public function __construct($username, $password, $email, $gender, $mapel)
    {
        $this->userName = $username;
        $this->password = $password;
        $this->email = $email;
        $this->gender = $gender;
        $this->mapel = $mapel;
    }

    public function infoData() {
        $str = "Username : {$this->userName}\nEmail : {$this->email}\nGender : {$this->gender}";
        return $str;
    }
}

class Murid extends Registerr {
    public function infoMurid() {
        $str = "Murid ". parent::infoData();
        return $str;
    }
}

class Guru extends Registerr {
    public function infoGuru() {
        $str = "Guru ". parent::infoData(). "\nMapel : {$this->mapel}";
        return $str;
    }
}

$data = new Murid("Farish", "risfarishk@gmail.com", "askaska", "laki-laki", null);
$data2 = new Guru("asas", "asasa", "asasa@gmail.com", "Laki-laki", "ipa");
$data3 = new Murid("Alam", "alam", "alam@gmail.com", "laki-laki", null);
$data4 = new Guru("kaska", "alslas", "alsalsa@gmail.com", "perempuan", "pkn");
echo $data->infoMurid($data);
echo PHP_EOL. "\n";
echo $data2->infoGuru($data2);
echo PHP_EOL. "\n";
echo $data3->infoMurid($data3);
echo PHP_EOL. "\n";
echo $data4->infoGuru($data4);
<?php

class Manusia {
    public $nama;
    public $umur;

    public function setNama($name){
        $this->nama = $name;
    }

    public function setUmur($umur){
        $this->umur = $umur;
    }

    public function getInfo(){
        return "Nama: " . $this->nama . ",Umur: " . $this->umur;
    }
}
// Membuat objek nya

$amalia = new Manusia();
$amalia->setNama("AMALIA");
$amalia->setUmur(19);

$imel = new Manusia();
$imel->setNama("IMEL");
$imel->setUmur(20);

echo $amalia->getInfo();
echo "<br>";
echo $imel->getInfo();
echo "<br>";
echo "<br>";

class Hewan {
    public $nama;
    public $jenis;
    public $umur;

    public function __construct($nama, $jenis, $umur) {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->umur = $umur;
    }

    public function getInfo() {
        return "Nama: " . $this->nama . ", Jenis: " . $this->jenis . ", Umur: " . $this->umur;
    }
}

// Membuat objek hewan
$harimau = new Hewan("Serigala", "Karnivora", 5);
$gajah = new Hewan("Sapi", "Herbivora", 8);

// Menampilkan informasi hewan
echo $harimau->getInfo();
echo "<br>";
echo $gajah->getInfo();
echo "<br>";
echo "<br>";

class Kendaraan {
    public $jenis;
    public $merk;
    public $tahun;

    public function __construct($jenis, $merk, $tahun) {
        $this->jenis = $jenis;
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function getInfo() {
        return "Jenis: " . $this->jenis . ", Merk: " . $this->merk . ", Tahun: " . $this->tahun;
    }
}

// Membuat objek kendaraan
$mobil = new Kendaraan("Mobil", "Toyota", 2023);
$motor = new Kendaraan("Motor", "Honda", 2022);

// Menampilkan informasi kendaraan
echo $mobil->getInfo();
echo "<br>";
echo $motor->getInfo();



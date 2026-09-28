<?php

class mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    public function tampilkanData(){
        echo "NIM : $this->nim" . "<br>";
        echo "Nama : $this->nama" . "<br>";
        echo "Prodi : $this->prodi" . "<br>";
        echo "Semester : $this->semester" . "<br>";
    }
}

$mhs1 = new mahasiswa();

$mhs1->nim = "1234";
$mhs1->nama = "Aufi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = "1";

// echo "NIM : " . $mhs1->nim . "<br>";
// echo "Nama : " . $mhs1->nama . "<br>";
// echo "Prodi : " . $mhs1->prodi . "<br>";
// echo "Semester : " . $mhs1->semester . "<br>";

$mhs1->tampilkanData();

$mhs2 = new mahasiswa();

$mhs2->nim = "4321";
$mhs2->nama = "Dhuha";
$mhs2->prodi = "Teknik Informatika";
$mhs2->semester = "3";

$mhs2->tampilkanData();
?>
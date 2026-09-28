<?php

class SistemMahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;
    public $keterangan;

    public function tampilkanData()
    {
        echo "Kode buku : " . $this->nim . "<br>";
        echo "Judul buku : " . $this->nama . "<br>";
        echo "Penulis buku : " . $this->prodi . "<br>";
        echo "Tahun Terbit : " . $this->nilai . "<br>";
    }

    public function tentukanGrade()
    {
        if ($this->nilai <= 100 and $this->nilai >= 80) {
            $this->keterangan = "A";
        } else if ($this->nilai <= 79 and $this->nilai >= 70) {
            # code...
            $this->keterangan = "B";
        } else if ($this->nilai <= 60 and $this->nilai >= 69) {
            # code...
            $this->keterangan = "C";
        } else if ($this->nilai <= 50 and $this->nilai >= 59) {
            # code...
            $this->keterangan = "D";
        } else if ($this->nilai <= 49 and $this->nilai >= 0) {
            # code...
            $this->keterangan = "E";
        } else {
            $this->keterangan = "Nilai Tidak valid";
        }

        echo "Kode buku : " . $this->nim . "<br>";
        echo "Judul buku : " . $this->nama . "<br>";
        echo "Penulis buku : " . $this->prodi . "<br>";
        echo "Tahun Terbit : " . $this->nilai . "<br>";
        echo "Keterangan : " . $this->keterangan . "<br>";
    }

}

$mhs1 = new SistemMahasiswa();

//code...
$mhs1->nim = "123456";
$mhs1->nama = "Aufi Dhuha";
$mhs1->prodi = "Sistem Informasi";
$mhs1->nilai = "100";

$mhs1->tentukanGrade();
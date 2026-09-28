<?php

class kendaraan
{

    public $nomor;
    public $merk;
    public $jenis;
    public string $status = "Tersedia";

    public function tampilkanData()
    {
        echo "Nomor Kendaraan : " . $this->nomor . "<br>";
        echo "Merk Kendaraan : " . $this->merk . "<br>";
        echo "Jenis Kendaraan : " . $this->jenis . "<br>";
        echo "Status Kendaraan : " . $this->status . "<br>";

    }

    public function statusKendaraan()
    {
        if (is_null($this->status)) {
            # code...
            return $this->status = "Tersedia";
        }
    }
}

class pelanggan
{

    public $id;
    public $nama;
    public $alamat;

    public $kotaAsal, $kotaTujuan, $sistem;

    public function tampilkanData()
    {
        echo "ID Pelanggan : " . $this->id . "<br>";
        echo "Nama Pelanggan : " . $this->nama . "<br>";
        echo "Alamat Pelanggan : " . $this->alamat . "<br>";
    }

    public function sewaKendaraan()
    {
        if (isset($this->nama) and isset($this->kotaAsal) and isset($this->kotaTujuan) and $this->sistem) {
            # code...
            echo "Pelanggan atas nama <strong>" . $this->nama . "</strong> Menyewa kendaraan dari kota <strong>" . $this->kotaAsal . "</strong> <br> sampai kota <strong>" . $this->kotaTujuan . "</strong> dengan sistem <strong>" . $this->sistem . "</strong><br>";
        }
    }
}

$k1 = new kendaraan();

$k1->nomor = "AG0001AA";
$k1->merk = "Avanza";
$k1->jenis = "Mobil";

$k1->statusKendaraan();
$k1->tampilkanData();

echo "<hr>";

$k2 = new kendaraan();

$k2->nomor = "AG0002BC";
$k2->merk = "Vario";
$k2->jenis = "Motor";
$k2->status = "Disewa";

$k2->statusKendaraan();
$k2->tampilkanData();

echo "<hr>";

$p1 = new pelanggan();
$p1->id = "098276";
$p1->nama = "Aufi";
$p1->alamat = "Kabupaten Nganjuk";
$p1->kotaAsal = "Kabupaten Nganjuk";
$p1->kotaTujuan = "Kota Kediri";
$p1->sistem = "Cash";

$p1->tampilkanData();
$p1->sewaKendaraan();

echo "<hr>";

$p2 = new pelanggan();
$p2->id = "45678765";
$p2->nama = "Dhuha";
$p2->alamat = "Kota Kediri";
$p2->kotaAsal = "Kota Kediri";
$p2->kotaTujuan = "Kota Malang";
$p2->sistem = "Cash";

$p2->tampilkanData();
$p2->sewaKendaraan();
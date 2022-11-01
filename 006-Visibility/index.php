<?php

class Produk {
    public $judul = "judul";
    public $penulis = "penulis";
    public $penerbit = "penerbit";
    protected $diskon = 0;
    private $harga = 0;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        $str = "$this->penulis, $this->penerbit";
        return $str;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function cetak() {
        $str = "{$this->judul} | {$this->getLabel()}";
        return $str;
    }
}

class Buku extends Produk{
    public $halaman = 0;

    public function __construct($judul, $penulis, $penerbit, $harga, $halaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->halaman = $halaman;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function cetak() {
        $str = "Buku : " . parent::cetak() . " | harga dengan diskon {$this->diskon}%({$this->getHarga()}) - {$this->halaman} halaman";
        return $str;
    }
}

class Film extends Produk{
    public $durasi = 0;

    public function __construct($judul, $penulis, $penerbit, $harga, $durasi) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->durasi = $durasi;
    }

    public function cetak() {
        $str = "Film : " . parent::cetak() . " | tiket({$this->getHarga()}) ~ {$this->durasi} menit";
        return $str;
    }
}


$produk1 = new Buku("Mariposa", "Hidayatul Fajriyah", "Coconut Books", 50000, 496);
$produk2 = new Film("Mariposa", "Fajar Bustomi", "Falcon Pictures", 35000, 118);
$produk3 = new Buku("Cantik itu Luka", "Eka Kurniawan", "Gramedia Pustaka Utama", 125000, 537);
$produk4 = new Buku("Bumi", "Tere Liye", "Gramedia Pustaka Utama", 85000, 440);

$produk1->setDiskon(10);
$produk3->setDiskon(30);
$produk4->setDiskon(20);
?>


<br>
<?= $produk1->cetak(); ?>
<br><hr><br>
<?= $produk2->cetak(); ?>
<br><hr><br>
<?= $produk3->cetak(); ?>
<br><hr><br>
<?= $produk4->cetak(); ?>
<br><hr><br>
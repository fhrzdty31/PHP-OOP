<?php

class Produk {
    public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit";

    public function __construct($judul, $penulis, $penerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
    }

    public function getLabel() {
        $str = "$this->penulis, $this->penerbit";
        return $str;
    }

    public function cetak() {
        $str = "{$this->judul} | {$this->getLabel()}";
        return $str;
    }
}

class Buku extends Produk{
    public $halaman = 0;

    public function __construct($judul, $penulis, $penerbit, $halaman) {
        parent::__construct($judul, $penulis, $penerbit);
        $this->halaman = $halaman;
    }

    public function cetak() {
        $str = "Buku : " . parent::cetak() . " - {$this->halaman} halaman";
        return $str;
    }
}

class Film extends Produk{
    public $durasi = 0;

    public function __construct($judul, $penulis, $penerbit, $durasi) {
        parent::__construct($judul, $penulis, $penerbit);
        $this->durasi = $durasi;
    }

    public function cetak() {
        $str = "Film : " . parent::cetak() . " ~ {$this->durasi} menit";
        return $str;
    }
}


$produk1 = new Buku("Mariposa", "Hidayatul Fajriyah", "Coconut Books", 496);
$produk2 = new Film("Mariposa", "Fajar Bustomi", "Falcon Pictures", 118);
$produk3 = new Buku("Cantik itu Luka", "Eka Kurniawan", "Gramedia Pustaka Utama", 537);
$produk4 = new Buku("Bumi", "Tere Liye", "Gramedia Pustaka Utama", 440);
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
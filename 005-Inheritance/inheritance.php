<?php

class Produk {
    public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $halaman = 0,
    $durasi = 0;

    public function __construct($judul, $penulis, $penerbit, $halaman, $durasi) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->halaman = $halaman;
        $this->durasi = $durasi;
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
    public function cetak() {
        $str = "Buku : {$this->judul} | {$this->getLabel()} - {$this->halaman} halaman";
        return $str;
    }
}

class Film extends Produk{
    public function cetak() {
        $str = "Film : {$this->judul} | {$this->getLabel()} ~ {$this->durasi} menit";
        return $str;
    }
}


$produk1 = new Buku("Mariposa", "Hidayatul Fajriyah", "Coconut Books", 496, 0);
$produk2 = new Film("Mariposa", "Fajar Bustomi", "Falcon Pictures", 0, 118);
$produk3 = new Buku("Cantik itu Luka", "Eka Kurniawan", "Gramedia Pustaka Utama", 537, 0);
$produk4 = new Buku("Bumi", "Tere Liye", "Gramedia Pustaka Utama", 440, 0);
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
<a href="overriding.php">Use Overriding</a>
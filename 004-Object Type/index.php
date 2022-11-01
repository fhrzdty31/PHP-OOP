<?php

class Buku {
    public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $hlaman = 0;

    public function __construct($judul, $penulis, $penerbit, $halaman) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->halaman = $halaman;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class Cetak {
    public function cetak(Buku $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} ({$produk->halaman})";
        return $str;
    }
}

$produk1 = new Buku("Mariposa", "Hidayatul Fajriyah", "Coconut Books", 496);
$produk2 = new Buku("Cantik itu Luka", "Eka Kurniawan", "Gramedia Pustaka Utama", 537);
$produk3 = new Buku("Bumi", "Tere Liye", "Gramedia Pustaka Utama", 440);

$infoProduk1 = new Cetak();
$infoProduk2 = new Cetak();
$infoProduk3 = new Cetak();


echo "<br>";
echo $infoProduk1->cetak($produk1);
echo "<br><hr><br>";
echo $infoProduk2->cetak($produk2);
echo "<br><hr><br>";
echo $infoProduk3->cetak($produk3);
echo "<br><hr><br>";
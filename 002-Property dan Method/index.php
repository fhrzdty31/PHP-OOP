<?php

class Buku {
    public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $hlaman = 0;

    public function cetak() {
        return "Buku\t: $this->judul, $this->penulis";
    }
}

$produk1 = new Buku();
$produk1->judul = "Mariposa";
$produk1->penulis = "Hidayatul Fajriyah";
$produk1->penerbit = "Coconut Books";
$produk1->halaman = "496";

$produk2 = new Buku();
$produk2->judul = "Cantik itu Luka";
$produk2->penulis = "Eka Kurniawan";
$produk2->penerbit = "Gramedia Pustaka Utama";
$produk2->halaman = "537";

$produk3 = new Buku();
$produk3->judul = "Bumi";
$produk3->penulis = "Tere Liye";
$produk3->penerbit = "Gramedia Pustaka Utama";
$produk3->halaman = "440";

echo "<br>";
echo $produk1->cetak();
echo "<br>Penerbit : $produk1->penerbit";
echo "<br><hr><br>";
echo $produk2->cetak();
echo "<br>Penerbit : $produk2->penerbit";
echo "<br><hr><br>";
echo $produk3->cetak();
echo "<br>Penerbit : $produk3->penerbit";
echo "<br><hr><br>";
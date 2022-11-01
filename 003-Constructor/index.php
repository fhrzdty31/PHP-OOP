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

    public function cetak() {
        return "Buku\t: $this->judul, $this->penulis";
    }
}

$produk1 = new Buku("Mariposa", "Hidayatul Fajriyah", "Coconut Books", 496);
$produk2 = new Buku("Cantik itu Luka", "Eka Kurniawan", "Gramedia Pustaka Utama", 537);
$produk3 = new Buku("Bumi", "Tere Liye", "Gramedia Pustaka Utama", 440);

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
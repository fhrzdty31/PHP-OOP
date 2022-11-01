<?php

class Produk {
    public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $tipe = "produk",
    $halaman = 0,
    $durasi = 0;

    public function __construct($judul, $penulis, $penerbit, $tipe, $halaman, $durasi) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->tipe= $tipe;
        $this->halaman = $halaman;
        $this->durasi = $durasi;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class Cetak {
    public function cetak(Produk $produk) {
        $str = "{$produk->tipe} : {$produk->judul} | {$produk->getLabel()}";
        if($produk->tipe == "Buku") :
            $str .= " - {$produk->halaman} halaman";
        elseif ($produk->tipe == "Film") :
            $str .= " ~ {$produk->durasi} menit";
        endif;
        return $str;
    }
}

$produk1 = new Produk("Mariposa", "Hidayatul Fajriyah", "Coconut Books", "Buku", 496, 0);
$produk2 = new Produk("Mariposa", "Fajar Bustomi", "Falcon Pictures", "Film", 0, 118);
$produk3 = new Produk("Cantik itu Luka", "Eka Kurniawan", "Gramedia Pustaka Utama", "Buku", 537, 0);
$produk4 = new Produk("Bumi", "Tere Liye", "Gramedia Pustaka Utama", "Buku", 440, 0);

$infoProduk1 = new Cetak();
$infoProduk2 = new Cetak();
$infoProduk3 = new Cetak();
$infoProduk4 = new Cetak();
?>


<br>
<?= $infoProduk1->cetak($produk1); ?>
<br><hr><br>
<?= $infoProduk2->cetak($produk2); ?>
<br><hr><br>
<?= $infoProduk3->cetak($produk3); ?>
<br><hr><br>
<?= $infoProduk4->cetak($produk4); ?>
<br><hr><br>
<a href="inheritance.php">Use Inheritance</a>
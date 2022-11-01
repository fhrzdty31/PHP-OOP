<?php

abstract class Produk {
    private $judul;
    private $penulis;
    private $penerbit;
    private $harga;
    protected $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul) {
        if(!is_string($judul)) :
            throw new Exception("Judul Harus String");    
        endif;
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        if(!is_string($penulis)) :
            throw new Exception("Penulis Harus String");    
        endif;
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        if(!is_string($penerbit)) :
            throw new Exception("Penerbit Harus String");    
        endif;
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setHargat($hargat) {
        if(!is_int($hargat)) :
            throw new Exception("Hargat Harus Integer");    
        endif;
        $this->hargat = $hargat;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
        $str = "$this->penulis, $this->penerbit";
        return $str;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()}";
        return $str;
    }

    abstract public function cetak();
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
        $str = "Buku : " . $this->getInfo() . " | harga dengan diskon {$this->diskon}%({$this->getHarga()}) - {$this->halaman} halaman";
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
        $str = "Film : " . $this->getInfo() . " | tiket({$this->getHarga()}) ~ {$this->durasi} menit";
        return $str;
    }
}

class CetakProduk {
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "<br><center>DAFTAR PRODUK</center><br><hr>";

        foreach ($this->daftarProduk as $p) {
            $str .= "{$p->cetak()}<br><hr>";
        }

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

$cetakProduk = new CetakProduk();
$cetakProduk-> tambahProduk($produk1);
$cetakProduk-> tambahProduk($produk2);
$cetakProduk-> tambahProduk($produk3);
$cetakProduk-> tambahProduk($produk4);

echo $cetakProduk->cetak();
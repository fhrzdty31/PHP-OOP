<?php

class Buku extends Produk implements InfoProduk{
    public $halaman = 0;

    public function __construct($judul, $penulis, $penerbit, $harga, $halaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->halaman = $halaman;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()}";
        return $str;
    }

    public function cetak() {
        $str = "Buku : " . $this->getInfo() . " | harga dengan diskon {$this->diskon}%({$this->getHarga()}) - {$this->halaman} halaman";
        return $str;
    }
}
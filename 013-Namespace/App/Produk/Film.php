<?php

class Film extends Produk implements InfoProduk{
    public $durasi = 0;

    public function __construct($judul, $penulis, $penerbit, $harga, $durasi) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->durasi = $durasi;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()}";
        return $str;
    }

    public function cetak() {
        $str = "Film : " . $this->getInfo() . " | tiket({$this->getHarga()}) ~ {$this->durasi} menit";
        return $str;
    }
}
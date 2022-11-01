<?php

abstract class Produk {
    protected $judul;
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

    abstract public function getInfo();
}
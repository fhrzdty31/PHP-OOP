<?php

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
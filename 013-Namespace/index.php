<?php

require_once 'App/init.php';

// $produk1 = new Buku("Mariposa", "Hidayatul Fajriyah", "Coconut Books", 50000, 496);
// $produk2 = new Film("Mariposa", "Fajar Bustomi", "Falcon Pictures", 35000, 118);
// $produk3 = new Buku("Cantik itu Luka", "Eka Kurniawan", "Gramedia Pustaka Utama", 125000, 537);
// $produk4 = new Buku("Bumi", "Tere Liye", "Gramedia Pustaka Utama", 85000, 440);

// $produk1->setDiskon(10);
// $produk3->setDiskon(30);
// $produk4->setDiskon(20);

// $cetakProduk = new CetakProduk();
// $cetakProduk-> tambahProduk($produk1);
// $cetakProduk-> tambahProduk($produk2);
// $cetakProduk-> tambahProduk($produk3);
// $cetakProduk-> tambahProduk($produk4);

// echo $cetakProduk->cetak();

use App\Produk\User as UserProduk;
use App\Service\User as UserService;

new UserProduk();
echo "<br>";
new UserService();
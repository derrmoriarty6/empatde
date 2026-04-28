<?php
// routes.php

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

switch ($page) {
    case 'dashboard';
        include 'dashboard.php';
        break;

    case 'profil';
        include 'profil.php';
        break;

    case 'kontak';
        include 'kontak.php';
        break;

// modul produk
    case 'tampil-produk';
        include 'produk/tampil.php';
        break;
    case 'tambah-produk';
        include 'produk/tambah.php';
        break;
    case 'ubah-produk';
        include 'produk/ubah.php';
        break;
    case 'hapus-produk';
        include 'produk/hapus.php';
        break;

    case 'upload-produk';
        include 'produk/upload.php';
        break;

// halaman 404 jika page tidak ditemukan
default:
    echo "<h1 class='h3 mb-4 text-gray-800'>Halaman tidak ditemukan!</h1>";
    break;
}
?>
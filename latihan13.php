<?php
// file latihan13.php

// gunakan require_once untuk konfigurasi
// script ini tidak akan berhasil jika file ini tidak ada
require_once 'konfigurasi.php';
?>

<html>
    <head>
        <title><?php echo NAMA_SITUS; ?>- Halaman Utama</title>
    </head>
    <body>
        <h1>Selamat datang di <?php echo NAMA_SITUS; ?></h1>

        <?php
        //gunakan 'include' untuk menu
        //jika file menu.php tidak ada,halaman tetap tampil
        //walau ada peringatan (warning)

        include ('menu.php');
        ?>
        <h2> Konten Halaman Utama</h2>
        <p>ini adalah latihan untuk menggabungkan file menggunakan require dan include</p>

        <br>

        <footer>
            <hr>
            <p>
                Hak cipta @copy; 2025 <?php echo TAHUN_COPYRIGHT ?> - <?php echo NAMA_SITUS; ?>
            </p>
        </footer>
    </body>
</html>
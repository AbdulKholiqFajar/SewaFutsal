<?php

// Koneksi database
$connect = mysqli_connect('localhost', 'root', '', 'sewa_futsal');

// Event Handler
if (!$connect) {
    exit("Gagal koneksi ke database..."); // Jika terjadi error, hentikan program
}
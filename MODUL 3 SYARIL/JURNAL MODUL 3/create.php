<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa

    $connect = mysqli_connect("localhost", "mysql_user", "mysql_password", "nama_database");
// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST

    $connect = mysqli_connect("localhost:8080", "mysql_user", "mysql_password", "nama_database")
// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil
        $query = "SELECT   * FROM   nama_mobil         "
    // b. Ambil data brand mobil
        $query = "SELECT   * FROM   brand_mobil        "  
    // c. Ambil data warna mobil
        $query = "SELECT   * FROM   warna_mobil        "
    // d. Ambil data tipe mobil
        $query = "SELECT   * FROM   tipe_mobil         "         
    // e. Ambil data harga mobil
        $query = "SELECT   * FROM   harga_mobil        "

    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    $dbhost = "localhost";
    $dbuser = "root";
    $dbname = "modul3";
    $dbpast = "";

    // (5) Buatkan kondisi jika eksekusi query berhasil

    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 

    include(config.php);
    $nama_mobil
    $brand_mobil
    $warna_mobil
    $tipe_mobil
    $harga_mobil
// (7) Tutup koneksi ke database setelah selesai menggunakan database
?>
    include('config.php');

    $id = $_GET['id'];
    mysqli_connect($connect, "")


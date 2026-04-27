# MySQL Basic Latihan

- CREATE DATABASE
- CREATE TABLE
- INSERT DATA
- SELECT QUERY
- UPDATE & DELETE
---
## Menambahkan Security basic
- Menyembunyikan koneksi PHP > MySQL

untuk file `koneksi.php` isinya kira-kira serti ini
```php
<?php
$host = "localhost";
$user = "root";
$password = "passwordgwygy"; 
$db   = "belajarmysql";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
```
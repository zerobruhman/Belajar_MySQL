<?php
$koneksi = mysqli_connect("localhost", "root", "321", "belajarmysql");
if (!$koneksi){
    echo "Koneksi gagal";
    return;
}
$hasil = mysqli_query($koneksi, "SELECT * FROM Siswa");
while ($baris = mysqli_fetch_assoc($hasil)){
    echo "
    Nama: {$baris["nama"]} 
    Umur: {$baris["umur"]} 
    Jurusan: {$baris["jurusan"]}
    Kelas: {$baris["kelas"]} \n";    
}
?>
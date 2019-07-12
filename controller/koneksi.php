<?php
$server     ="localhost";
$user       ="root";
$pasword    ="";
$nama       ="latihan";


$db=mysqli_connect($server,$user,$pasword,$nama);

if (mysqli_connect_errno()){
    echo  "koneksi database gagal:".mysqli_connect_error();
}
else{
    echo "koneksi berhasil";
}
?>
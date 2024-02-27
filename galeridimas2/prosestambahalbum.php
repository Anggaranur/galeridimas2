<?php
    include "koneksi.php";
    $userid=$_POST['userid'];
    $namaalbum=$_POST['namaalbum'];
    $deskripsi=$_POST['deskripsi'];
    $tanggaldibuat=$_POST['tanggaldibuat'];
    $query=mysqli_query($koneksi,"insert into album(namaalbum,deskripsi,tanggaldibuat,userid) values ('$namaalbum','$deskripsi','$tanggaldibuat','$userid')");
    if($query){
        header("location:album.php?pesan=tambahsukses");
    }else{
        header("location:tambahalbum.php?pesan=tambahgagal");
    }
?>
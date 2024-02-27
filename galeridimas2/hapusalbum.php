<?php
session_start();
    include "koneksi.php";
    $albumid=$_GET['albumid'];
    $userid=$_SESSION['userid'];
    $query=mysqli_query($koneksi,"delete from album where albumid='$albumid' and userid='$userid'");
    if($query){
        $sql=mysqli_query($koneksi,"delete from foto where albumid='$albumid' and userid='$userid'");
        header("location:album.php?pesan=hapussukses");
    }
?>
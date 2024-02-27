<?php
     include "koneksi.php";
     $userid=$_POST['userid'];
     $albumid=$_POST['albumid'];
     $judulfoto=$_POST['judulfoto'];
     $deskripsifoto=$_POST['deskripsifoto'];
     $tanggalunggah=$_POST['tanggalunggah'];
     $foto=$_FILES['lokasifile']['name'];
     $format=explode(".",$foto);
     $extensi=strtolower(end($format));
     $ukuranfoto=$_FILES['lokasifile']['size'];
     $file_tmp=$_FILES['lokasifile']['tmp_name'];
     $extensi_diperbolehkan=array("jpg","png","jpeg","jfif");

     if(in_array($extensi,$extensi_diperbolehkan)===true){
        if($ukuranfoto<1044070000){
            move_uploaded_file($file_tmp,'img/'.$foto);
            $query=mysqli_query($koneksi,"insert into foto(judulfoto,deskripsifoto,tanggalunggah,lokasifile,albumid,userid)
            values ('$judulfoto','$deskripsifoto','$tanggalunggah','$foto','$albumid','$userid')");
            if($query){
                header("location:foto.php?albumid=".$albumid."?pesan=fotosukses");
            }else{
                header("location:tambahfoto.php?albumid=".$albumid."?pesan=fotogagal");
            }
            }else{
                header("location:tambahfoto.php?albumid=".$albumid."?pesan=ukuransalah");
            }
            }else{
                header("location:tambahfoto.php?albumid=".$albumid."?pesan=ekstensisalah");
            }
?>
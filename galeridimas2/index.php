<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Kodinger">
    <meta name="keyword" content="Kodinger, template, html5, css3, bootstrap4">
    <meta name="description" content="HTML5 and CSS3 Template Based on Bootstrap 4">
    <title>My Pict</title>
    <link rel="stylesheet" href="ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" href="css/stisla.css">
</head>

<body>
<nav class="navbar navbar-expand-lg main-navbar">
    <div class="container-fluid">
        <a class="navbar-brand">
            <h1><span class="bold" style="color:white;">Mypict</span></h1>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mr-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="album.php#blog">Album</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" onclick="return confirm('Apakah anda yakin ingin hapus foto')">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section class="hero bg-overlay" id="hero" data-bg="img/hero.jpeg">
    <div class="text py-5">
        <p class="lead">Selamat Datang Di Menu Beranda</p>
        <h1><span class="bold">MyPict</span></h1>
    </div>
</section>

<section class="padding bg-grey" id="blog">
    <div class="container">
        <h2 class="section-title" style="text-align: center; margin-bottom: 30px; margin-top:-50px;">Beranda</h2>
        <p class="section-lead " style="text-align:center; margin-bottom:30px; margin-top:10px; color:#222;">Selamat Melihat Beranda Kamu</p>
        <div class="section-body">
            <div class="row col-spacing">
                <?php
                session_start();
                include "koneksi.php";
                $userid=$_SESSION['userid'];
                $query = mysqli_query($koneksi, "SELECT * FROM foto f JOIN user u ON f.userid=u.userid");
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div style="display: flex; gap: 12px;">
                            <img src="img/news/img01.jpg" alt="" style="width: 32px; height: 32px; border-radius: 99px; object-fit: cover; margin-bottom: 10px">
                            <?php echo $data['username']; ?>
                        </div>
                        <article class="card">
                            <a href="detail.php?fotoid=<?php echo $data['fotoid']; ?>">
                                <img class="card-img-top" src="img/<?php echo $data['lokasifile']; ?>" alt="Article Image" style="height: 320px;">
                            </a>
                            <div class="card-body">
                                <div class="card-subtitle mb-2 text-muted">Judul - <a href="#"><?php echo $data['judulfoto']; ?></a> on <?php echo $data['tanggalunggah']; ?></div>
                                <h4 class="card-title"><?php echo $data['deskripsifoto']; ?></h4>
                                <div style="display: flex; gap:3px;">
                                    <?php
                                    $fotoid = $data['fotoid'];
                                    $sql = mysqli_query($koneksi, "SELECT * FROM likefoto WHERE userid='$userid' AND fotoid='$fotoid'");
                                    $row = mysqli_fetch_array($sql);
                                    if ($row) {
                                        ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#ff1c03" stroke="#222" d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53z"/></svg>
                                    <?php } else { ?>
                                        <a href="likefotoindex.php?userid=<?php echo $userid; ?>&fotoid=<?php echo $fotoid; ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#bd2e2e" d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53z"/></svg>
                                        </a>
                                    <?php } ?>
                                    <?php
                                    $sql2 = mysqli_query($koneksi, "SELECT COUNT(fotoid) as jumlahlike FROM likefoto WHERE fotoid=$fotoid");
                                    $row2 = mysqli_fetch_array($sql2);
                                    echo $row2['jumlahlike'];
                                    ?>
                                    <a href="detail.php?fotoid=<?php echo $fotoid; ?>" style="display:flex; gap:4px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024"><path fill="currentColor" d="M573 421c-23.1 0-41 17.9-41 40s17.9 40 41 40c21.1 0 39-17.9 39-40s-17.9-40-39-40m-280 0c-23.1 0-41 17.9-41 40s17.9 40 41 40c21.1 0 39-17.9 39-40s-17.9-40-39-40"/><path fill="currentColor" d="M894 345c-48.1-66-115.3-110.1-189-130v.1c-17.1-19-36.4-36.5-58-52.1c-163.7-119-393.5-82.7-513 81c-96.3 133-92.2 311.9 6 439l.8 132.6c0 3.2.5 6.4 1.5 9.4c5.3 16.9 23.3 26.2 40.1 20.9L309 806c33.5 11.9 68.1 18.7 102.5 20.6l-.5.4c89.1 64.9 205.9 84.4 313 49l127.1 41.4c3.2 1 6.5 1.6 9.9 1.6c17.7 0 32-14.3 32-32V753c88.1-119.6 90.4-284.9 1-408M323 735l-12-5l-99 31l-1-104l-8-9c-84.6-103.2-90.2-251.9-11-361c96.4-132.2 281.2-161.4 413-66c132.2 96.1 161.5 280.6 66 412c-80.1 109.9-223.5 150.5-348 102m505-17l-8 10l1 104l-98-33l-12 5c-56 20.8-115.7 22.5-171 7l-.2-.1C613.7 788.2 680.7 742.2 729 676c76.4-105.3 88.8-237.6 44.4-350.4l.6.4c23 16.5 44.1 37.1 62 62c72.6 99.6 68.5 235.2-8 330"/><path fill="currentColor" d="M433 421c-23.1 0-41 17.9-41 40s17.9 40 41 40c21.1 0 39-17.9 39-40s-17.9-40-39-40"/></svg>
                                        <?php
                                        $sql4 = mysqli_query($koneksi, "SELECT COUNT(fotoid) as jumlahkomentar FROM komentarfoto WHERE fotoid='$fotoid'");
                                        $row4 = mysqli_fetch_array($sql4);
                                        echo $row4['jumlahkomentar'];
                                        ?>
                                    </a>
                                </div>
                                <p class="card-text"></p>
                                <div class="text-right">
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.easeScroll.js"></script>
<script src="sweetalert/dist/sweetalert.min.js"></script>
<script src="js/stisla.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="Kodinger, template, html5, css3, bootstrap4">
		<meta name="description" content="HTML5 and CSS3 Template Based on Bootstrap 4">
		<title>I'm Stisla</title>
		<link rel="stylesheet" href="ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" href="css/stisla.css">
	</head>

	<body>
		
		
		
		<section class="padding" id="features">
			<div class="container">
				<div class="row">	
		<section class="padding bg-grey" style="margin-top:10px; width:3000rem;" >
			<div class="container">
				<h2 class="section-title text-center">Tambah Foto</h2>
				<div class="section-body">				
					<div class="row col-spacing">
						<div class="col-12 col-md-12">
							<form class="contact row" id="contact-form" action="prosestambahfoto.php" method="POST" enctype="multipart/form-data">
								<?php
                                session_start();
								$userid=$_SESSION['userid'];
                                $albumid=$_GET['albumid'];
                                ?>
								<input type="hidden" name="userid" value="<?php echo $userid;?>">
								<input type="hidden" name="albumid" value="<?php echo $albumid;?>">
								<div class="form-group col-12">
								<label >Judul Foto</label>
									<input type="text" class="form-control" placeholder="Subject" name="judulfoto" required="">
								</div>
								<div class="form-group col-12">
								<label >Deskripsi</label>
									<textarea class="form-control" placeholder="Message" name="deskripsifoto" required=""></textarea>
								</div>
								<div class="form-group col-12">
								<label >Tanggal Unggah</label>
									<input type="date" class="form-control" placeholder="Subject" name="tanggalunggah" required="">
								</div>
								<div class="form-group col-12">
								<label >Tambah File</label>
									<input style="padding:12px; background: white; width:100%;" type="file" class="" placeholder="Subject" name="lokasifile" required="">
								</div>
								<div class="form-group col-12">
								<a href="album.php#blog"  class="btn btn-primary" style="margin-left:10rem">
										Kembali
                                </a>
									<button class="btn btn-primary" style="margin-left:30rem" type="submit">
										Simpan
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		</div>
		</section>

		

		

		<script src="js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<script src="sweetalert/dist/sweetalert.min.js"></script>
		<script src="js/stisla.js"></script>
	</body>
</html>


					  
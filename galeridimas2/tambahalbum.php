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
		<section class="padding bg-grey" style="margin-top:10px" >
			<div class="container">
				<h2 class="section-title text-center">Tambah Album</h2>
				<div class="section-body">				
					<div class="row col-spacing">
						<div class="col-12 col-md-12">
							<form action="prosestambahalbum.php" method="POST" class="contact row" id="contact-form">
								<?php
								session_start();
								$userid=$_SESSION['userid'];
								?>
								<input type="hidden" name="userid" value="<?php echo $userid; ?>">
								<div class="form-group col-12">
								<label >Nama Album</label>
									<input type="text" class="form-control" placeholder="Subject" name="namaalbum" required="">
								</div>
								<div class="form-group col-12">
								<label >Deskripsi</label>
									<textarea class="form-control" placeholder="Message" name="deskripsi" required=""></textarea>
								</div>
								<div class="form-group col-12">
								<label >Tanggal</label>
									<input type="date" class="form-control" placeholder="Subject" name="tanggaldibuat" required="">
								</div>
								
								<div class="form-group col-12">
								<a href="album.php#blog"  class="btn btn-primary" style="margin-left:10rem">
										Kembali
                                </a>
									<button class="btn btn-primary" type="submit" style="margin-left:35rem">
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


					  
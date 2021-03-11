<?php
        include "../../koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>APPM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../util.css">
	<link rel="stylesheet" type="text/css" href="../../main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
       		 <?php 
                    $tampilPeg =mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$_GET[id]'");
					$peg    =mysqli_fetch_array($tampilPeg);
					if($tampilPeg)
					{
                    ?>
            
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="../../<?php echo $peg['gambar'];?>" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="POST" action="data_laporan.php">
				<span class="contact1-form-title">
					Data Lengkap <?php echo $peg['nama']; ?>
				</span>
                <div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="id_pengaduan" value="<?php echo $peg['id_pengaduan']; ?>" readonly="">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="nik" value="<?php echo $peg['nik']; ?>" readonly="">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="nama" value="<?php echo $peg['nama']; ?>" readonly="">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="isi_laporan" value="<?php echo $peg['isi_laporan']; ?>" readonly="">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<input class="input1" type="text" name="tgl_pengaduan" value="<?php echo $peg['tgl_pengaduan']; ?>" readonly="">
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Kembali 
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
            </form>
			<?php } ?> 
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

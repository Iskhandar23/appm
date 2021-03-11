<?php
ob_start();
session_start();
        include "../../koneksi.php";
?>                                                                                                                                               
<!doctype html>
<html lang="en">
  <head>
  	<title>APPM</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="icon" href="assets/brand/icon.svg" type="image/gif" sizes="16x16">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/tanggapan.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <style>
    body {
        color: #566787;
		background: #131b25;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}

</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	                    <i class="fa fa-bars"></i>
	                    <span class="sr-only">Toggle Menu</span>
	                </button>
                </div>
				<div class="p-4">
                <img class="mb-4" src="../../assets/brand/Group1.png" alt="" width="190" height="50">
                <br>
                <br>
                <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="../admin.php"><span class="fa fa-home mr-3"></span> Dashboard</a>
	          </li>
	          <li>
	              <a href="tanggapan.php"><span class="fa fa-check mr-3"></span> Verifikasi Pengaduan</a>
              </li>

              <li>
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"><span class="fa fa-file mr-3"></span> Data</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="data_petugas.php">Data Petugas</a>
                </li>
                <li>
                    <a href="data_masyarakat.php">Data Masyarakat</a>
                </li>
                <li>
                    <a href="data_laporan.php">Data Laporan</a>
                </li>
                <li>
                    <a href="data_tanggapan.php">Data Tanggapan</a>
                </li>
	            </ul>
            </li>
            <li>
	            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-print mr-3"></span> Generate Laporan</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu1">
                <li>
                    <a href="#">Laporan Data Registrasi</a>
                </li>
                <li>
                    <a href="#">Laporan Semua Pengaduan</a>
                </li>
                <li>
                    <a href="#">Laporan Tanggapan </a>
                </li>
	            </ul>
	          </li>
            
			  <li>
              <a href="../../logout.php"><span class="fa fa-sign-out mr-3"></span> Logout</a>
	          </li>
            </ul> 
	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <i class="icon-heart" aria-hidden="true"></i> by <a target="_blank">Desa Tajur </a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>
	      </div>
    	</nav>
 
        <!-- Page Content  -->
		<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
       
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2>Data Laporan</b></h2>
                    </div>
                     <div class="col-xs-7">
                        <a href="generate_laporan.php" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> <span>Generate Laporan</span></a>						
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NIK</th>	
                        <th>Nama</th>						
                        <th>Laporan</th>
                        <th>Gambar</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                <?php
                $produktebaru=mysqli_query($koneksi,"SELECT * FROM pengaduan LIMIT 0,6");
                while($tampilproduk=mysqli_fetch_array($produktebaru)){
            ?>
                    <tr>
                        <td><?php echo $tampilproduk['id_pengaduan']; ?></td>
                        <td><?php echo $tampilproduk['nik']; ?></td>
                        <td><?php echo $tampilproduk['nama']; ?></td>
                        <td><?php echo substr($tampilproduk['isi_laporan'], 0, 25)  ?>  ...</td>
                        <td><img  src="../../<?php echo $tampilproduk['gambar']; ?>" alt="" height="50"></td>                     
                        <td><?php echo $tampilproduk['tgl_pengaduan']; ?></td>
                        <td><?php echo $tampilproduk['status']; ?></td>  
                        <td>
                            <a href="detail_laporan.php?id=<?php echo $tampilproduk['id_pengaduan']; ?>" class="settings" title="Lihat" data-toggle="tooltip"><i class="fa fa-eye" aria-hidden="true"></i></a>
                          </td>
                    </tr>
                   
            <?php } ?>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item"><a href="#" >Previous</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item "><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>        
</div>  

          </div>
          
       <!--===============================================================================================-->
	<script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../popper.js"></script>
	<script src="../../bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../vendor/tilt/tilt.jquery.min.js"></script>
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
 

    <script src="../../jquery.min.js"></script>
    <script src="../../popper.js"></script>
    <script src="../../bootstra.min.js"></script>
    <script src="../../main.js"></script>
  </body>
</html>
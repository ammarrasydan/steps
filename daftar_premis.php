<?php 
require('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!--
New Event
http://www.templatemo.com/tm-486-new-event
-->
<title>S.T.e.P.s BTPNPP</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">



<!-- Main css -->
<link rel="stylesheet" href="css/style.css">


 <script>
    $(document).ready(function(){
        $('.menu').mobileMenu();
    });
    </script>

    <script>
    function validateNum(evt) {
      var theEvent = evt || window.event;
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode( key );
      var regex = /[0-9]|\./;
      if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
      }
    }
    </script>

    <script>
    function validateEmpty()
    {

     if( document.myForm.namapremis.value == "" )
     {
        alert( "Sila masukkan nama bilik!" );
        document.myForm.namapremis.focus() ;
        return false;
     }

     if( document.myForm.tarikh.value == "" )
     {
        alert( "Sila isi tarikh!" );
        document.myForm.tarikh.focus() ;
        return false;
     }
     
     if( document.myForm.saluran.value == "" ||
     isNaN( document.myForm.saluran.value ) ||
     document.myForm.saluran.value.length != 12 )
     {
        alert( "Sila nyatakan saluran anda");
        document.myForm.saluran.focus() ;
        return false;
     }

     if( document.myForm.namapemohon.value == "" )
     {
        alert( "Sila nyatakan nama anda!" );
        document.myForm.namapemohon.focus() ;
        return false;
     }

     if( document.myForm.agensi.value == "" )
     {
        alert( "Sila nyatakan agensi anda!" );
		document.myForm.agensi.focus() ;
        return false;
     }

     if( document.myForm.alamat.value == "" )
     {
        alert( "Sila nyatakan alamat anda!" );
		document.myForm.alamat.focus() ;
        return false;
     }

     if( document.myForm.tujuan.value == "" )
     {
        alert( "Sila nyatakan tujuan anda!" );
		document.myForm.tujuan.focus() ;
        return false;
     }

     if( document.myForm.tarikhmula.value == "" )
     {
        alert( "Sila nyatakan tarikh mula tempahan" );
		document.myForm.tarikhmula.focus() ;
        return false;
     }

     if( document.myForm.tarikhtamat.value == "" )
     {
        alert( "Sila nyatakan tarikh tamat tempahan!" );
		document.myForm.tarikhtamat.focus() ;
        return false;
     }

     if( document.myForm.masa.value == "" )
     {
        alert( "Sila nyatakan masa tempahan!" );
		document.myForm.masa.focus() ;
        return false;
     }

     if( document.myForm.bil.value == "" )
     {
        alert( "Sila nyatakan bilangan peserta!" );
		document.myForm.masa.focus() ;
        return false;
     }

     if( document.myForm.pilih.value == "" )
     {
        alert( "Sila pilih!" );
		document.myForm.pilih.focus() ;
        return false;
     }
     if( document.myForm.perlu.value == "" )
     {
        alert( "Sila nyatakan keperluan anda!" );
		document.myForm.perlu.focus() ;
        return false;
     }

    } 
  </script>
  

<style>

div.gallery {
    margin: 10px;
    border: 1px solid #ccc;
    float: left;
    width: 370px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>



</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


<form enctype="multipart/form-data" name="form" action="daftarpremis_conn.php" method="POST">


<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>


<!-- =========================
     NAVIGATION LINKS     
============================== -->
<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<!-- navbar header -->
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">S.T.e.P.s BTPNPP</a><br>
			<a href="#" class="navbar-brand1">Sistem Tempahan Premis BTPNPP</a>
		</div>

		<div class="collapse navbar-collapse">

			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php" class="smoothScroll">LAMAN UTAMA</a></li>
				<li><a href="tempahanpremis.php" class="smoothScroll">TEMPAHAN PREMIS</a></li>
				<li><a href="../login" class="smoothScroll">LOG KELUAR</a></li>
			</ul>

		</div>

	</div>
</div>


<!-- =========================
    INTRO SECTION   
============================== -->
<section id="intro" >
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<b><h1 class="wow bounceIn" data-wow-delay="0.9s">TEMPAHAN PREMIS BTPNPP</h1><b>
			</div>
			
			




		</div>
	</div>
</section>
 <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script>
		
		function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
		</script>
		
		
		
		
		<style >

    .upload-button {
    padding: 4px;
    border: 1px solid black;
    border-radius: 5px;
    display: block;
    float: left;
}

.profile-pic {
    max-width: 200px;
    max-height: 200px;
    display: block;
}

.file-upload {
    display: none;
}
   </style>

   
		
		
</head>

<body>





<nav id="nav-mobile"></nav>


<div class="container">
<section>
<div class="row">
    <div class="box">
    <div class="col-lg-12">

  <br><br>
 
	<body>
	
					<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">NAMA PREMIS</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									                <select name="namapremis" id="namapremis" class="form-control selectpicker" >
                  <option value=" "/>SENARAI BILIK</option>
                  <option>MAKMAL KOMPUTER</option>
                  <option>STUDIO BTPNPP</option>
                  <option >ASRAMA(INAPAN MUTIARA)</option>
                  <option >BILIK JEREJAK</option>
                  <option >BILIK PINANG</option>
                  <option >BILIK AMAN</option>
                  <option >BILIK REHAT (L & P)</option>
                </select>
								</div>
							</div>
						</div>
	
	
	
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">TARIKH</label>
							<div class="col-md-8">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input type="date" name="tarikh" id="tarikh" class="form-control selectpicker">
                </div>
              </div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">SALURAN</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<select name="saluran" id="saluran" class="form-control selectpicker" required="required"/>
                      <option value=" " >SALURAN ANDA</option>
                      <option>Telefon</option>
                      <option>Fax</option>
                      <option>Surat</option>
                      <option>Email</option>
                      <option>Lain-lain</option>
                    </select>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">NAMA PEMOHON</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" rows="3" required id="namapemohon" name="namapemohon" id="namapemohon"  placeholder="MASUKKAN NAMA"/>
								</div>
							</div>
						</div>
						

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">AGENSI</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<select name="agensi" id="agensi" class="form-control" rows="3" id="agensi" required="required"/>
                      <option value=" " >AGENSI</option>
                      <option>KPM</option>
                      <option>JPN</option>
                      <option>PPD</option>
                      <option>KKM</option>
                      <option>Lain-lain</option>
                    </select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">ALAMAT</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									 <textarea class="form-control" rows="3" required id="alamat" name="alamat"></textarea>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">TUJUAN</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tujuan" id="tujuan"  placeholder="TUJUAN ANDA" require/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">TARIKH MULA</label>
							<div class="col-md-8">
							<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input type="date" name="tarikhmula" id="tarikhmula" class="form-control selectpicker">
						</div>
					</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">TARIKH AKHIR</label
							<div class="col-md-8">
							<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input type="date" name="tarikhtamat" id="tarikhtamat" class="form-control selectpicker">
						</div>
					</div>
						</div>
						
							<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">MASA</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="masa" id="masa" class="form-control selectpicker" required="required"/>
                      <option value=" " >PILIH MASA ANDA</option>
                      <option>8.00am - 10.00am</option>
                      <option>10.00am - 12.00tgh hari</option>
                      <option>12.00tgh hari - 2.00pm</option>
                      <option>2.00pm - 4.00pm</option>
                      <option>4.00pm - 5.00pm</option>
                    </select>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">BILANGAN PESERTA</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="bil" id="bil" class="form-control selectpicker" required="required"/>
                      <option value="" >PILIH BILANGAN PESERTA</option>
                      <option>10 ORANG</option>
                      <option>20 ORANG</option>
                      <option>30 ORANG</option>
                      <option>40 ORANG</option>
                      <option>50 ORANG</option>
                    </select>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">MENGINAP</label>
							<div class="cols-sm-8">
								<div class="input-group">
									 <label class="radio-inline"><input type="radio" id="pilih" name="pilih" value="Male" checked>Ya</label>
									 <label class="radio-inline"><input type="radio" id="pilih" name="pilih" value="Female">Tidak</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">KEPERLUAN</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<select name="perlu" id="perlu" class="form-control selectpicker" required="required"/>
                      <option value=" " >KEPERLUAN ANDA:</option>
                      <option>LCD</option>
                      <option>SIARAYA</option>
                      <option>PC KOMPUTER</option>
                      <option>MAKAN&MINUM </option>
                      <option>TALIAN INTERNET</option>
					  <option>LAIN-LAIN (NYATAKAN)</option>
                    </select>
								</div>
							</div>
						</div>
					
					<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">STATUS</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" readonly="readonly" name="status" id="status"  placeholder="STATUS DALAM PROSES...."/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">CATATAN</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="catatan" id="catatan"  placeholder="CATATAN ANDA"/>
								</div>
							</div>
						</div>
						
						<div class="form-group ">
							<button type="submit" id="submit" name="submit" value="simpan" class="btn btn-primary btn-lg btn-block login-button">HANTAR</button>
						</div>
					
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>


<!-- =========================
    FOOTER SECTION   
============================== -->
	<section id="speakers" class="parallax-section">
	<div class="container">
		<div class="row">

				<p class="wow fadeInUp" data-wow-delay="0.6s">Copyright S.T.e.P.s BTPNPP<br>Bahagian Teknologi Pendidikan Negeri Pulau Pinang


			</div>
			
		</div>
	</div>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
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
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

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

ul {
	list-style-type: none;
	padding: 20px;
	margin: auto;
	overflow: hidden;
	width: 1000px;
	background-color: #000000;
	border: 3px solid #C70039;
}


li {
	float: left;
	
}

li a {
	display: block;
	text-align: left;
	padding: 16px;
	color: white;
	text-decoration: none;
}

img {
	border: 3px solid #C70039;
}

li a:hover {
	background-color: #C70039;
}

</style>



</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


<form enctype="multipart/form-data" name="form" action="daftarpremis_conn.php" method="POST">



<!-- =========================
     NAVIGATION LINKS     
============================== -->
<body>
	<div class="container">
        <br><img class="img-responsive center-block" src="images/btp.png" width="700" height="50">
      </div>
	  <body>
      <br><marquee scrollamount="12" style="font-size:17px"><B>SELAMAT DATANG KE BAHAGIAN TEKNOLOGI PENDIDIKAN NEGERI PULAU PINANG<B></marquee>
   </body>
    <div>
            <br><ul>
              <li><a href="index.php">&nbsp;&nbsp;&nbsp;LAMAN UTAMA&nbsp;&nbsp;&nbsp;</a></li>
              <li><a href="premis.php">&nbsp;&nbsp;TEMPAH&nbsp;&nbsp;</a></li>
			  <li><a href="../lamanutama.php">&nbsp;&nbsp;LOG KELUAR&nbsp;&nbsp;</a></li>
             
            </ul>
          </div>
		  
        </div>
      </div>
	  
	 <br><center><img src="images/btpnpp.jpg" alt="btpnpp" width="1000" height="500"></center>

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
						<label for="name" class="cols-sm-2 control-label">TARIKH</label>
						<div class="form-group">
							
							<div class="col-md-8">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input type="date" name="tarikh" id="tarikh" class="form-control selectpicker">
                </div>
              </div>
						</div>
						
						<br><br>


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
									<input type="text" class="form-control" name="namapemohon" id="namapemohon"  placeholder="MASUKKAN NAMA"/>
								</div>
							</div>
						</div>
						

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<select name="agensi" id="agensi" class="form-control selectpicker" required="required"/>
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
									<input type="text" class="form-control" name="tujuan" id="tujuan"  placeholder="TUJUAN ANDA"/>
								</div>
							</div>
						</div>
						
													<label for="name" class="cols-sm-2 control-label">TARIKH MULA</label>
						<div class="form-group">
							<div class="col-md-8">
							<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input type="date" name="tarikhmula" id="tarikhmula" class="form-control selectpicker">
						</div>
					</div>
						</div>
						<br><br>
						
						<label for="name" class="cols-sm-2 control-label">TARIKH AKHIR</label>
						<div class="form-group">
							
							<div class="col-md-8">
							<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input type="date" name="tarikhtamat" id="tarikhtamat" class="form-control selectpicker">
						</div>
					</div>
						</div>
						
						<br><br>
						
							<div class="form-group">
							<label for="time" class="cols-sm-2 control-label">MASA</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                   <input type="time" class="form-control" name="masa" id="time"  placeholder="TUJUAN ANDA"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">BILANGAN PESERTA</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <input type="text" class="form-control" name="bil_peserta" id="bil_peserta"  placeholder="BILANGAN PESERTA ANDA"/>
								</div>
							</div>
						</div>
						
					<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">MENGINAP</label>
							<div class="cols-sm-8">
								<div class="input-group">
									 <label class="radio-inline"><input type="radio" id="pilih" name="pilih" value="YA" checked>Ya</label>
									 <label class="radio-inline"><input type="radio" id="pilih" name="pilih" value="TIDAK">Tidak</label>
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
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp" data-wow-delay="0.6s">Copyright S.e.P.P BTPNPP

				

			</div>
			
		</div>
	</div>
</footer>


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
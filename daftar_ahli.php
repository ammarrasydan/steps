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

     if( document.myForm.nama.value == "" )
     {
        alert( "Sila isi nama penuh anda!" );
        document.myForm.nama.focus() ;
        return false;
     }

     if( document.myForm.kad_pengenalan.value == "" )
     {
        alert( "Sila isi kad pengenalan anda!" );
        document.myForm.kad_pengenalan.focus() ;
        return false;
     }
     
     if( document.myForm.kata_laluan.value == "" ||
     isNaN( document.myForm.kata_laluan.value ) ||
     document.myForm.kata_laluan.value.length != 12 )
     {
        alert( "Sila isi kata laluan anda");
        document.myForm.kata_laluan.focus() ;
        return false;
     }

     if( document.myForm.sahkata_laluan.value == "" )
     {
        alert( "Sila sahkan kata laluan anda!" );
        document.myForm.sahkata_laluan.focus() ;
        return false;
     }

     if( document.myForm.jantina.value == "" )
     {
        alert( "Sila nyatakan jantina anda!" );
		document.myForm.jantina.focus() ;
        return false;
     }

     if( document.myForm.email.value == "" )
     {
        alert( "Sila isi email anda!" );
		document.myForm.email.focus() ;
        return false;
     }

     if( document.myForm.no_telefon.value == "" )
     {
        alert( "Sila isi nombor telefon anda!" );
		document.myForm.no_telefon.focus() ;
        return false;
     }

     if( document.myForm.agensi.value == "" )
     {
        alert( "Sila nyatakan agensi anda" );
		document.myForm.agensi.focus() ;
        return false;
     }

     if( document.myForm.negeri.value == "" )
     {
        alert( "Sila nyatakan negeri anda!" );
		document.myForm.negeri.focus() ;
        return false;
     }
 
  </script>
  
<style>

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

/* The message box is shown when the user clicks on the password field */
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}


#message p {
    padding: 10px 35px;
    font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}
</style>


</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


<form enctype="multipart/form-data" name="form" action="daftarahli_conn.php" method="POST">

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>

<body>

  <div id="wrap">
  <div id="regbar">
    <div id="navthing">
      <h2><a href="#" id="loginform">Log Masuk</a> | <a href="syarat.php">Daftar</a></h2>
	   <form action="login_process.php" method="POST"  role="formholder"> 
    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
           <fieldset>
             <label name="kad_pengenalan">No Kad Pengenalan</label>
             <input type="text" name="kad_pengenalan" id="kad_pengenalan" class="form-control" placeholder="No Kad Pengenalan" minlength="12" maxlength="12" onkeypress='validateNum(event)'>
             <label name="kata_laluan">Kata Laluan</label>
             <input type="password" name="kata_laluan" id="kata_laluan" class="form-control" placeholder="Kata Laluan">
             <input type="submit" value="Masuk" />
 
           </fieldset>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>

<!-- =========================
     NAVIGATION LINKS     
============================== -->
<body>
	<div class="container">
        <img class="img-responsive center-block" src="images/btp.png" width="700" height="50">
      </div>
	  <body>
      <br><marquee scrollamount="12" style="font-size:17px"><B>SELAMAT DATANG KE BAHAGIAN TEKNOLOGI PENDIDIKAN NEGERI PULAU PINANG<B></marquee>
   </body>
    <div>
            <br><ul>
              <li><a href="lamanutama.php">&nbsp;&nbsp;&nbsp;LAMAN UTAMA&nbsp;&nbsp;&nbsp;</a></li>
              <li><a href="hubungi.php">&nbsp;&nbsp;HUBUNGI&nbsp;&nbsp;</a></li>
             
            </ul>
          </div>
		  
        </div>
      </div>
	  

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

<section id="speakers" class="parallax-section">

		<div class="row"><div class="container">
		<div class="row">


<div class="container">
<section>
<div class="row">
   
    <div class="col-sm-12">

<body>
						<center><div class="form-group">
							<label for="username" class="cols-sm-2 control-label">NAMA PENUH</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" arial-hidden="true"></i></span>
									<input type="text" class="form-control" name="nama" id="nama"  placeholder="MASUKKAN NAMA"/>
								</div>
							</div>
						</div></center>
						
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">NO.KAD PENGENALAN </label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" arial-hidden="true"></i></span>
									<input type="text" class="form-control" name="kad_pengenalan" id="kad_pengenalan"  placeholder="MASUKKAN NO KAD PENGENALAN"/>
								</div>
							</div>
						</div>
						
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">KATA LALUAN</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" arial-hidden="true"></i></span>
									 <input type="kata_laluan" class="form-control" name="kata_laluan" id="kata_laluan" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}" title="Mesti mengandungi sekurang-kurangnya satu nombor dan satu huruf besar dan huruf kecil, dan kata laluan maksimum 8" required/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">SAHKAN KATA LALUAN</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" arial-hidden="true"></i></span>
									 <input type="sahkata_laluan" class="form-control" name="sahkata_laluan" id="sahkata_laluan" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}" title="Mesti mengandungi sekurang-kurangnya satu nombor dan satu besar kecil dan huruf kecil, dan kata laluan maksimum 8" required/>
									    
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">JANTINA</label>
							<div class="cols-sm-8">
								<div class="input-group">
									 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="radio-inline"><input type="radio" name="jantina" value="Male" checked>LELAKI</label>
									 <label class="radio-inline"><input type="radio" name="jantina" value="Female">PEREMPUAN</label>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">EMAIL</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" arial-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="MASUKKAN EMAIL"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">NO.TELEFON BIMBIT</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" arial-hidden="true"></i></span>
									<input type="text" class="form-control" name="no_telefon" id="no_telefon"  placeholder="MASUKKAN NO. TELFON BIMBIT"/>
								</div>
							</div>
						</div>
						<script>
						    // if upper dynamic sections
                        if($('.dynamic')[currentIndex - firstDynamicIndex]) {
                            while ($($('.dynamic')[currentIndex - firstDynamicIndex]).length > 0) {
                                transferUpperValues();
                                currentIndex ++;
                            }
                        }

                        // decrement dynamic-fields-index
                        dfIndex -= 1;
                        countInput.val(dfIndex);

                        // remove last dynamic container
                        $('.remove-element-button:last').closest('.dynamic').remove();
                    });
					        }).fail(function (data, statut, error) {
                    console.log(error);
                });
            });
        });
					</script>
						
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">AGENSI</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" arial-hidden="true"></i></span>
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
							<label for="username" class="cols-sm-2 control-label">NEGERI</label>
							<div class="cols-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="negeri" id="negeri" class="form-control selectpicker" required="required"/>
                      <option value=" " >NEGERI</option>
                      <option>KEDAH</option>
					  <option>PERLIS</option>
					  <option>PULAU PINANG</option>
					  <option>PERAK</option>
					  <option>KELANTAN</option>
					  <option>SELANGOR</option>
					  <option>PAHANG</option>
					  <option>JOHOR</option>
					  <option>MELAKA</option>
					  <option>TERENGGANU</option>
					  <option>NEGERI SEMBILAN</option>
					  <option>WILAYAH PERSEKETUAN</option>
                     
                    </select>
								</div>
							</div>
						</div>
							
						<div class="form-group ">
							<button type="submit" id="submit" name="submit" value="simpan" class="btn btn-primary btn-lg btn-block login-button">DAFTAR</button>
							<div class="etc-login-form"><br>
				<p>Sudah berdaftar ahli? <a href="lamanutama.php">Log masuk disini</a></p>
			</div>
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
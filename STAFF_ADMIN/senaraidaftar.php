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

<style>
h1{
	font-size:40px;
	color: #000000;
}
	
th{
	font-size: 15px;
	color: #000000;
}

input[type=text], select {
    width: 30%;
    padding: 10px 20px;
    margin: 5px 0;
    display: inline-block;
    border: 3px solid #ccc;
    border-radius: 4px;
	cursor: pointer;
}

input[type=submit] {
    width: 15%;
    background-color: #000000;
    color: white;
    padding: 10px 20px;
    margin: 5px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


input[type=submit]:hover {
    background-color: #000000;
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

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>



<!-- =========================
     NAVIGATION LINKS     
============================== -->
<body>
	<div class="container">
        <br><br><img class="img-responsive center-block" src="images/btp.png" width="700" height="50">
      </div>
	  <body>
      <br><marquee scrollamount="12" style="font-size:17px"><B>SELAMAT DATANG KE BAHAGIAN TEKNOLOGI PENDIDIKAN NEGERI PULAU PINANG<B></marquee>
   </body>
    <div>
            <br><ul>
              <li><a href="lamanutama.php">&nbsp;&nbsp;&nbsp;LAMAN UTAMA&nbsp;&nbsp;&nbsp;</a></li>
              <li><a href="senaraitempahan.php">&nbsp;&nbsp;SENARAI TEMPAHAN&nbsp;&nbsp;</a></li>
			  <li><a href="senaraidaftar.php">&nbsp;&nbsp;SENARAI DAFTAR&nbsp;&nbsp;</a></li>
			  <li><a href="../lamanutama.php">&nbsp;&nbsp;LOG KELUAR&nbsp;&nbsp;</a></li>
             
            </ul>
          </div>
		  
        </div>
      </div>
	  
	  <br><center><img src="images/btpnpp.jpg" alt="btpnpp" width="1000" height="500"></center>


<section id="speakers" class="parallax-section">
	<div class="container">
		<div class="row">
<h1>SENARAI AHLI DAFTAR</h1><br><br><br>
        <nav class="navbar navbar-default query" role="query">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a></a> 
                </div>
                <div class="collapse navbar-collapse" id="">
                    <div class="col-sm-12 form-group">
                        <input type="text" id="no_mykad" onkeyup="myFunction()" placeholder="Masukkan No. Kad Pengenalan"><br>
                    </div>
                    
                </div>
                
            </div>
        </nav>
        <div class="table-responsive col-md-12">
            <table id="customer"class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>BIL</th>
                        <th>NAMA PEMOHON</th>
                        <th>KAD PENGENALAN</th>
						<th>TELEFON BIMBIT</th>
						<th>AGENSI</th>
						<th>NEGERI</th>
                    </tr>
                </thead>
                <tbody>
				
				<?php
                    require 'conn.php';
                    $sql = "SELECT * FROM daftar_ahli";
                    if ($result = $conn->query($sql)){
                      // display records if there are records to display
                      if ($result->num_rows > 0){
        
                      $i = 1;
                      while ($row = $result->fetch_object()){
                        echo "<tr>";
                        echo "<td>" . $i++ . "</td>";
                        echo "<td>" . $row->nama . "</td>";
                        echo "<td>" . $row->kad_pengenalan . "</td>";
                        echo "<td>" . $row->no_telefon . "</td>";
						echo "<td>" . $row->agensi . "</td>";
                        echo "<td>" . $row->negeri . "</td>";
                        echo "</tr>";
                        }
                        echo "</table>";
                        }
                        // if there are no records in the database, display an alert message
                        else{
                        echo "No results to display!";
                        }
                        }
                        // show an error if there is an issue with the database query
                        else
                        {
                        echo "Error: " . $conn->error;
                        }

                        // close database connection
                        $conn->close();
                    ?>
				

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

<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("no_mykad");
  filter = input.value.toUpperCase();
  table = document.getElementById("customer");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
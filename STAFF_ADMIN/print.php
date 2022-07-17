<!DOCTYPE HTML>
<html>
<head>

<title>Sistem Tempahan Premis BTPNPP</title>


<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-center"><br><br>
						<h3><a href=""><font face="lithos pro"><center>Sistem Tempahan Premis BTPNPP</center></font></a></h3>
					 
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  <!-- start search-->
				  <div class="search-box">
							<div id="sb-search" class="sb-search">
								
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	</div>

 <div class="main">
		<div class="content-top">
			
			
  <tr>
    <td colspan="2">
      
    <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase("id");
  table = document.getElementById("meja");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

<form name="form" enctype="multipart/form-data" action="" method="POST">
         <table align="center"> <tr> <td width="551">
         <fieldset>
     </script> 
<!DOCTYPE html>
<html>
<head>
<style>
th, td {
    border: px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 7px;
    text-align: left;    
}
</style>
</head>
<body>
<center>
<table style="width:50%"><br>
  
        <?php
				require'conn.php';
                $id = $conn->real_escape_string ($_GET['id']);
				$sql = "SELECT * FROM tempah_premis WHERE id = $id";
				$result = $conn->query($sql);
				while ($row = $result->fetch_assoc()){
							?>
  
  
  <tr>
    <th>NAMA PEMOHON:</th>
    <td><?php echo $row['namapemohon']; ?></td>
  </tr><tr>
    <th>NAMA PREMIS:</th>
     <td><?php echo $row['namapremis']; ?></td>
  </tr>
  <tr>
    <th>ALAMAT:</th>
     <td><?php echo $row['alamat']; ?></td>
  </tr>
  <tr>
    <th>SALURAN :</th>
     <td><?php echo $row['saluran']; ?></td>
  </tr>
  <tr>
    <th>AGENSI:</th>
     <td><?php echo $row['agensi']; ?></td>
  </tr>
  <tr>
    <th>TUJUAN:</th>
     <td><?php echo $row['tujuan']; ?></td>
  </tr>
  <tr>
    <th>TARIKH MULA:</th>
     <td><?php echo $row['tarikhmula']; ?></td>
  </tr>
  <tr>
    <th>TARIKH TAMAT:</th>
     <td><?php echo $row['tarikhtamat']; ?></td>
  </tr>
  <tr>
    <th>MASA:</th>
    <td><?php echo $row['masa']; ?></td>
  </tr>
   <tr>
    <th>BILANGAN PESERTA:</th>
     <td><?php echo $row['bil_peserta']; ?></td>
  </tr>
   <tr>
    <th>MENGINAP:</th>
     <td><?php echo $row['pilih']; ?></td>
  </tr>
   <tr>
    <th>KEPERLUAN:</th>
     <td><?php echo $row['perlu']; ?></td>
  </tr>
   <tr>
    <th>CATATAN:</th>
     <td><?php echo $row['catatan']; ?></td>
  </tr>
    </table><br><br>
                                
                            <td><button type="button" onClick="print();">Cetak</button>
                            <button type="button" onClick="window.location='../staff_admin/senaraitempahan.php';">Kembali</button></td>
							
							<?php
					}
					?>
              </td>
        </tr>
      
            
  </table>
	</div>
			

				     </div>
					 </div>	

					
		</div>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<ul class="footer_box">
							
						</ul>
					</div>
			
					 
   				</div>
			</div>
		</div>
		
		<!-- =========================
    FOOTER SECTION   
============================== -->
	<section id="speakers" class="parallax-section">
	<div class="container">
		<div class="row"><br><br><br><br><br><br><br><br>

				<p class="wow fadeInUp" data-wow-delay="0.6s"><center>Copyright S.T.e.P.s BTPNPP<br><br>Bahagian Teknologi Pendidikan Negeri Pulau Pinang</center><br><br>


			</div>
			
		</div>

</body>	
</html>
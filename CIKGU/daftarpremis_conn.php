<?php
	$conn = mysqli_connect("localhost", "root", "", "btpnpp")
		or die("Failed to connect mysql server " .mysqli_connect_error());
#echo '<pre>',print_r($_FILES);

	$namapremis = mysqli_real_escape_string($conn, $_POST['namapremis']);
	$tarikh = mysqli_real_escape_string($conn, $_POST['tarikh']);
	$saluran = mysqli_real_escape_string($conn, $_POST['saluran']);
	$namapemohon = mysqli_real_escape_string($conn, $_POST['namapemohon']);
	$agensi = mysqli_real_escape_string($conn, $_POST['agensi']);
	$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
	$tujuan = mysqli_real_escape_string($conn, $_POST['tujuan']);
	$tarikhmula = mysqli_real_escape_string($conn, $_POST['tarikhmula']);
	$tarikhtamat = mysqli_real_escape_string($conn, $_POST['tarikhtamat']);
	$masa = mysqli_real_escape_string($conn, $_POST['masa']);
	$bil_peserta = mysqli_real_escape_string($conn, $_POST['bil_peserta']);
	$pilih = mysqli_real_escape_string($conn, $_POST['pilih']);
	$perlu = mysqli_real_escape_string($conn, $_POST['perlu']);
	$status = mysqli_real_escape_string($conn, $_POST['status']);
	$catatan = mysqli_real_escape_string($conn, $_POST['catatan']);



	$query = "INSERT INTO tempah_premis (namapremis,tarikh,saluran,namapemohon,agensi,alamat,tujuan,tarikhmula,tarikhtamat,masa,bil_peserta,pilih,perlu,status,catatan)
	VALUES('$namapremis','$tarikh', '$saluran', '$namapemohon', '$agensi', '$alamat', '$tujuan', '$tarikhmula', '$tarikhtamat', '$masa', '$bil_peserta', '$pilih', '$perlu', '$status', '$catatan')";
#echo $query; exit;
		if (!mysqli_query($conn, $query)) 
	{
		echo "Error" .mysqli_error($conn);
	}
	else
	{
		#header("Location: daftar_premis.php");
		?>
		<script>
		alert('Anda telah menghantar laporan')
		window.location='daftar_premis.php';
		</script>
		
		<?php
		

	}

?>


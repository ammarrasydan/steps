<?php
	$conn = mysqli_connect("localhost", "root", "", "btpnpp")
		or die("Failed to connect mysql server " .mysqli_connect_error());
#echo '<pre>',print_r($_FILES);

	@$nama = mysqli_real_escape_string($conn, $_POST['nama']);
	@$kad_pengenalan = mysqli_real_escape_string($conn, $_POST['kad_pengenalan']);
	@$kata_laluan = mysqli_real_escape_string($conn, $_POST['kata_laluan']);
	@$sahkata_laluan = mysqli_real_escape_string($conn, $_POST['sahkata_laluan']);
	@$jantina = mysqli_real_escape_string($conn, $_POST['jantina']);
	@$email = mysqli_real_escape_string($conn, $_POST['email']);
	@$no_telefon = mysqli_real_escape_string($conn, $_POST['no_telefon']);
	@$agensi = mysqli_real_escape_string($conn, $_POST['agensi']);
	@$negeri = mysqli_real_escape_string($conn, $_POST['negeri']);
	@$newPassword = Request["newPassword"];
    @$confirmPassword = Request["confirmPassword"];

$query = "INSERT INTO daftar_ahli (nama, kad_pengenalan, kata_laluan, sahkata_laluan, jantina, email, no_telefon, agensi, negeri)
VALUES ('$nama','$kad_pengenalan','$kata_laluan','$sahkata_laluan','$jantina','$email','$no_telefon','$agensi','$negeri')";

#echo $query; exit;
		if (!mysqli_query($conn, $query)) 
	{
		echo "Error" .mysqli_error($conn);
	}
	else
	{
		#header("Location: login.php");
		?>
		<script>
		alert('Anda telah mendaftar')
		window.location='lamanutama.php';
		</script>
		
		<?php
		

	}

?>


<?php
require('conn.php');

$kad_pengenalan = $conn->real_escape_string($_POST['kad_pengenalan']);
$kata_laluan= $_POST['kata_laluan'];

if($kad_pengenalan == 'staff_admin'){
    $sql = "SELECT * FROM staff_admin WHERE kad_pengenalan = '$kad_pengenalan'";
    $row = $conn->query($sql)->fetch_assoc();
    
   if($kata_laluan == $row['kata_laluan']){
        $_SESSION['kad_pengenalan'] = 'staff_admin';
        header('location: STAFF_ADMIN/lamanutama.php');
    }else{
        ?>
        <script>
            alert('Harap maaf! kad pengenalan dan kata laluan tidak sepadan');
            window.location='lamanutama.php';
        </script>
		
        <?php
    }
}else{
    $sql = "SELECT * FROM daftar_ahli WHERE kad_pengenalan = '$kad_pengenalan'";
    $result = $conn->query($sql);
	
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        if($kata_laluan == $row['kata_laluan']){
            $kad_pengenalan = $row['kad_pengenalan'];
                $_SESSION['kad_pengenalan'] = $kad_pengenalan;
                header('location: CIKGU/index.php');
            }
			
    }else{
           ?>
            <script>
                alert('Harap maaf! kad pengenalan dan kata laluan tidak sepadan')
                window.location='lamanutama.php'
            </script>
			
			
            <?php
    }
}
?>
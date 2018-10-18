<?php
include('koneksi.php');

//tangkap data dari form
	$denda_baru = $_POST ['denda_baru'];

//update data di database sesuai user_id

$sql = "update denda set
		nominal_denda='$denda_baru'
		where no = 1";
		
 $hasil = mysqli_query($kon, $sql);

if ($hasil) { ?>
	
	<script language="JavaScript">
		alert('Anda Berhasil Mengubah Data');
	 	window.location='index.php?act=denda';
	 </script>
<?php
}
?>
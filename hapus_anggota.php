<?php 
include('koneksi.php');

$nis = $_GET['nis'];

$query = mysqli_query($kon, "delete from anggota where nis='$nis'") or die(mysqli_error());

if ($query) {
	?>
	<script language="JavaScript">
		alert('Anda Berhasil Menghapus Data');
	 	window.location='index.php?act=data_anggota';
	</script>
	<?php }
?>
<?php

$id_transaksi = $_GET['id_transaksi'];

 include "koneksi.php";

 $sql = "update transaksi, buku set transaksi.status ='Kembali', buku.jumlah_buku = (jumlah_buku+1) 
		 where transaksi.id_transaksi='$id_transaksi'" or die(mysqli_error());
					
$query = mysqli_query($kon, $sql);
?>
	<script type="text/javascript">
		alert("Proses Pengembalian Berhasil");
		window.location.href = "?act=transaksi";
	</script>

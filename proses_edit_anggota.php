<?php
include('koneksi.php');

//tangkap data dari form
	$nis = $_POST ['nis'];
    $nama_anggota = $_POST ['nama_anggota'];
    $tgl_lahir = $_POST ['tgl_lahir'];
    $jekel = $_POST ['jekel'];
    $kelas = $_POST ['kelas'];
    $jurusan = $_POST ['jurusan'];

//update data di database sesuai user_id

$sql = "update anggota set
		nis='$nis',
		nama_anggota='$nama_anggota',
		tgl_lahir='$tgl_lahir',
		jekel='$jekel',
		kelas='$kelas',
		jurusan='$jurusan'
		where nis = '$nis'";
		
 $hasil = mysqli_query($kon, $sql);

if ($hasil) { ?>
	
	<script language="JavaScript">
		alert('Anda Berhasil Mengubah Data');
	 	window.location='index.php?act=data_anggota';
	 </script>
<?php
}
?>
<?php
include('koneksi.php');

$nis = $_GET['nis'];

$query = mysqli_query($kon, "select * from anggota where nis='$nis'") or die(mysqli_error());

$data = mysqli_fetch_array($query);
?>

<h2>Edit Anggota</h2>
<hr>
<div class="panel panel-default">
<div class="panel-heading">
    Form Edit Anggota
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form action="proses_edit_anggota.php" method="POST">

<div class="form-group">
    <label>NIS</label>
    <input class="form-control" name="nis" value="<?php echo $data['nis']; ?>" />
</div>

<div class="form-group">
    <label>Nama</label>
    <input class="form-control" name="nama_anggota" value="<?php echo $data['nama_anggota']; ?>" />
</div>

<div class="form-group">
    <label>Tanggal Lahir</label>
    <input class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" />
</div>

<div class="form-group">
    <label>Jenis Kelamin</label>
    <input class="form-control" name="jekel" value="<?php echo $data['jekel']; ?>" />
</div>

<div class="form-group">
    <label>Kelas</label>
    <input class="form-control" name="kelas" value="<?php echo $data['kelas']; ?>" />
</div>

<div class="form-group">
    <label>Jurusan</label>
    <input class="form-control" name="jurusan" value="<?php echo $data['jurusan']; ?>" />
</div>

<div>
    <input type="submit" value="Simpan" name="simpan" class="btn btn-success">
    <input onclick="window.history.back()" type="reset" class="btn btn-warning" value="Batal">
</div>

</form>
</div>
</div>
</div>
</div>
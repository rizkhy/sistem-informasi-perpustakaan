<?php
include('koneksi.php');


$query = mysqli_query($kon, "select * from denda where no=1") or die(mysqli_error());

$data = mysqli_fetch_array($query);
?>

<center><h2>Ubah Denda</h2></center>
<hr><br>    
<div class="panel panel-default">
    <div class="panel-body">
        <div class="table-responsive">
<form name="form" id="form" class="form" action="proses_edit_denda.php" method="post">
<table height="175" border="0" align="center" >
  <tr>
    <td><label>Denda Yang Berlaku Sekarang &nbsp;&nbsp;</label></td>
    <td><div class="form-group input-group">
      <span class="input-group-addon">Rp.</span>
    <input class="form-control" name="denda_lama" value="<?php echo $data['nominal_denda']; ?>" readonly />
</div></td>
</tr>
<tr>
    <td><label>Masukan Denda Yang Baru</label></td>
    <td><div class="form-group input-group">
      <span class="input-group-addon">Rp.</span>
      <input class="form-control" name="denda_baru"/>
</div></td>
</tr>
  <tr align="center">
    <td height="50" colspan="3">
      <input type="submit" name="Submit" value="Simpan" class="btn btn-success" />
      <input onclick="window.history.back()" type="reset" class="btn btn-warning" value="Batal">
    </td>
  </tr>
</table>
</form>
</div></div></div>

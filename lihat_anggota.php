<?php
include('koneksi.php');

$nis = $_GET['nis'];

$query = mysqli_query($kon, "select * from anggota where nis='$nis'") or die(mysqli_error());

$data = mysqli_fetch_array($query);
?>

<h2>Detail Anggota</h2>
<hr>
<div class="panel panel-default">
<div class="panel-heading">
    Anggota
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <h4>
            <table align="center">
                <tr>
                    <td>
                        NIS
                    </td>
                    <td>
                    &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['nis']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nama Anggota
                    </td>
                    <td>
                    &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['nama_anggota']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tanggal Lahir
                    </td>
                    <td>
                    &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['tgl_lahir']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Jenis Kelamin
                    </td>
                    <td>
                    &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['jekel']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Kelas
                    </td>
                    <td>
                    &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['kelas']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Jurusan
                    </td>
                    <td>
                    &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['jurusan']; ?>
                    </td>
                </tr>
            </table>
            </h4>
<br>
<div  align="center">
    <input onclick="window.history.back()" type="reset" class="btn btn-warning" value="Kembali">
</div>

</form>
</div>
</div>
</div>
</div>
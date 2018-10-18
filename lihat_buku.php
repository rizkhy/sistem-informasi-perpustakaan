<?php
include('koneksi.php');

$id_buku = $_GET['id_buku'];

$query = mysqli_query($kon, "select * from buku where id_buku='$id_buku'") or die(mysqli_error());

$data = mysqli_fetch_array($query);
?>

<h2>Detail Buku</h2>
<hr>
<div class="panel panel-default">
<div class="panel-heading">
    Buku
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <h4>
            <table align="center">
                <tr>
                    <td>
                        ID Buku
                    </td>
                    <td>
                    &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['id_buku']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Judul Buku
                    </td>
                    <td>
                    &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['judul']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Pengarang
                    </td>
                    <td>
                    &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['pengarang']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Penerbit
                    </td>
                    <td>
                    &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['penerbit']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tahun Terbit
                    </td>
                    <td>
                    &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['tahun_terbit']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        ISBN
                    </td>
                    <td>
                    &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['isbn']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Jumlah Buku
                    </td>
                    <td>
                    &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['jumlah_buku']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Lokasi Rak
                    </td>
                    <td>
                    &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['lokasi']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tanggal Buku Masuk
                    </td>
                    <td>
                        &nbsp;:&nbsp;
                    </td>
                    <td>
                        <?php echo $data['tgl_buku_masuk']; ?>
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
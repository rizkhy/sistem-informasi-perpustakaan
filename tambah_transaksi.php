<?php

include "koneksi.php"; 

$sql="select * from anggota order by nis";
$result=mysqli_query($kon,$sql) or die('Error');
$anggota=mysqli_query($kon, $sql) ;

$sql="select * from buku order by id_buku";
$result=mysqli_query($kon,$sql) or die('Error');
$buku=mysqli_query($kon, $sql) ;


$tgl_pinjam = date("d-m-Y");
$tujuh_hari = mktime(0,0,0, date("n"), date("j")+7, date("Y"));
$Kembali = date("d-m-Y", $tujuh_hari);
?>
<h2>Transaksi Pinjam</h2>
<hr>
<div class="panel panel-default">
<div class="panel-heading">
    Transaksi Pinjam
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form action="proses_tambah_transaksi.php" onsubmit="return validasi(this)" method="POST">

<div class="form-group">
    <label>Judul Buku</label>
    <select class="form-control" name="judul" />
        <?php
            while($data = mysqli_fetch_assoc($buku)){ 
                echo "<option value='$data[id_buku]'>$data[judul]</option>";
            }
        ?>
    </select> 
</div>

<div class="form-group">
    <label>Nama Peminjam</label>
    <select class="form-control" name="nama" />
        <?php
            while($data = mysqli_fetch_assoc($anggota)){ 
                echo "<option value='$data[nis]-$data[nama_anggota]'>$data[nis]-$data[nama_anggota]</option>";
            }
        ?>
    </select> 
</div>

<div class="form-group">
    <label>Tanggal Pinjam</label>
    <input class="form-control" name="tgl_pinjam" value="<?php echo $tgl_pinjam; ?>" readonly />
</div>

<div class="form-group">
    <label>Tanggal Kembali</label>
    <input class="form-control" name="tgl_kembali" value="<?php echo $Kembali; ?>" readonly />
</div>

<div class="form-group">
    <input class="form-control" name="status" value="Pinjam" type="hidden" />
</div>

<div>
    <input type="submit" value="Pinjam" name="simpan" class="btn btn-success">
    <input onclick="window.history.back()" type="reset" class="btn btn-warning" value="Batal">
</div>

</form>
</div>
</div>
</div>
</div>

<?php 

    if(isset($_POST['simpan'])){
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];

        $buku = $_POST['judul'];
        $pecah_buku = explode(".", $buku);
        $id = $pecah_buku[0];
        $judul = $pecah_buku[1];

        $nama = $_POST['nama'];
        $pecah_nama = explode(".", $nama);
        $nim =$pecah_nama[0];
        $nama = $pecah_nama[1];

        $sql="select * from buku where judul = '$judul'";
        $limit=mysqli_query($kon,$sql) or die('Error');
        while($data = mysqli_fetch_assoc($limit)){ 
            $sisa = $data['jumlah_buku'];

            if($sisa == 0){
                ?>
                    <script type="text/javascript">
                        alert("Stok Buku Habis");
                        window.location.href="index.php?act=tambah_transaksi";
                    </script>
                <?php
            }
        }
    }

?>
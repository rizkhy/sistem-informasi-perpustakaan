<?php
include "koneksi.php";
include "function.php";
$no = 1;
$sql="select *, anggota.nama_anggota, buku.judul from transaksi, anggota, buku where anggota.nis=transaksi.nis and transaksi.id_buku=buku.id_buku";
$result=mysqli_query($kon,$sql) or die('Error');
$hasil=mysqli_query($kon, $sql);
?>
<script>
    function printContent(el){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>
<title>Siakad</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" />
 <!-- FONTAWESOME STYLES-->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
 <!-- MORRIS CHART STYLES-->
<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
<link href="custom.css" rel="stylesheet" />
 <!-- GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<div class="panel panel-default">
        <div class="table-responsive">
            <div id="div1">
                    <h1 align="center">Laporan Data Guru</h1>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Buku</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Terlambat</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($data = mysqli_fetch_assoc($hasil)){ 
                    ?>
                        <tr class="odd gradeX">
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['nis']; ?></td>
                            <td><?php echo $data['nama_anggota']; ?></td>
                            <td><?php echo $data['tgl_pinjam']; ?></td>
                            <td><?php echo $data['tgl_kembali']; ?></td>
                            <td>
                            <?php

                                $sql="select * from denda where no=1";
                                $result4=mysqli_query($kon,$sql) or die('Error');
                                $nominal = mysqli_fetch_assoc($result4);
                                $denda = ($nominal['nominal_denda']);                            

                                $tgl_dateline = $data['tgl_kembali'];
                                $tgl_kembali = date('d-m-Y');

                                $lambat = terlambat($tgl_dateline, $tgl_kembali);
                                $denda = $lambat * $denda;

                                if ($lambat>0){
                                    echo "<font color='red'>$lambat Hari<br>(Rp. $denda)</font>";
                                } else {
                                    echo $lambat ."hari";
                                }
                            ?>
                            </td>
                            <td><?php echo $data['status']; ?></td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>
<button onclick="printContent('div1')" class="btn btn-success btn-lg">Print</button>
<button onclick="window.history.back()" class="btn btn-warning btn-lg">Kembali</button>
<?php
include "koneksi.php";
$no = 1;
$sql="select *, anggota.nama_anggota, buku.judul from transaksi, anggota, buku where anggota.nis=transaksi.nis and transaksi.id_buku=buku.id_buku";
$result=mysqli_query($kon,$sql) or die('Error');
$hasil=mysqli_query($kon, $sql) ;


?>
<h2>Data Laporan</h2>
<hr>
<div class="panel panel-default">
    <div class="panel-heading">
         Data Laporan
    </div>
    <div class="panel-body">
        <div class="table-responsive">
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
            <a href="cetak_laporan.php" class="btn btn-warning btn-lg">Print Preview</a>
        </div>
        
    </div>
</div>
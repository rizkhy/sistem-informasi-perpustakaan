<div id="page-inner">
	<div class="row">
		<div class="col-md-12">
			<h2>Admin Dashboard</h2>   
			<h5>Selamat Datang Kembali. </h5>
		</div>
	</div>              
		<!-- /. ROW  -->
		<hr />
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
				<span class="icon-box bg-color-red set-icon">
					<?php
						include "koneksi.php";

						$query = "SELECT *, COUNT(nis) AS total FROM `anggota`";
						$sql = mysqli_query($kon, $query);
						while($data = mysqli_fetch_assoc($sql)){ 
						echo $data['total'];
						}
					?>
				</span>
				<div class="text-box" >
					<p class="main-text">
						Total Anggota
					</p>
					<!-- <p class="text-muted">Messages</p> -->
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
				<span class="icon-box bg-color-green set-icon">
					<?php
						include "koneksi.php";

						$query = "SELECT *, COUNT(id_buku) AS total FROM `buku`";
						$sql = mysqli_query($kon, $query);
						while($data = mysqli_fetch_assoc($sql)){ 
						echo $data['total'];
						}
					?>
				</span>
				<div class="text-box" >
					<p class="main-text">Total Buku</p>
					<!-- <p class="text-muted">Remaining</p> -->
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
				<span class="icon-box bg-color-blue set-icon">
					<?php
						include "koneksi.php";

						$query = "SELECT *, COUNT(id_transaksi) AS total FROM `transaksi` where status='Pinjam'";
						$sql = mysqli_query($kon, $query);
						while($data = mysqli_fetch_assoc($sql)){ 
						echo $data['total'];
						}
					?>
				</span>
				<div class="text-box" >
					<p class="main-text">Total Pinjam</p>
					<!-- <p class="text-muted">Notifications</p> -->
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
				<span class="icon-box bg-color-brown set-icon">
					<?php
						include "koneksi.php";

						$query = "SELECT *, COUNT(id_transaksi) AS total FROM `transaksi` where status='Kembali'";
						$sql = mysqli_query($kon, $query);
						while($data = mysqli_fetch_assoc($sql)){ 
						echo $data['total'];
						}
					?>
				</span>
				<div class="text-box" >
					<p class="main-text">Total Kembali</p>
					<!-- <p class="text-muted">Pending</p> -->
				</div>
			</div>
		</div>
	</div>
</div>
<?php
if (empty($_GET['act']))
{include"beranda.php";}
else{
	switch($_GET['act']){

    	case('data_buku'): include('data_buku.php');
        break;
        case('lihat_buku'): include('lihat_buku.php');
    	break;
        case('tambah_buku'): include('tambah_buku.php');
        break;
        case('edit_buku'): include('edit_buku.php');
        break;
        case('data_anggota'): include('data_anggota.php');
        break;
        case('lihat_anggota'): include('lihat_anggota.php');
    	break;
        case('tambah_anggota'): include('tambah_anggota.php');
        break;
        case('edit_anggota'): include('edit_anggota.php');
        break;
        case('laporan'): include('laporan.php');
    	break;
        case('transaksi'): include('transaksi.php');
        break;
        case('tambah_transaksi'): include('tambah_transaksi.php');
        break;
        case('transaksi_kembali'): include('transaksi_kembali.php');
        break;
        case('denda'): include('denda.php');
        break;
	default:include('beranda.php');
	}
}
?>

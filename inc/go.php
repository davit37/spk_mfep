<?php 
if(isset($_GET['page'])){
	$page = $_GET['page'];
	switch($page){
		case 'faktor_add':
			include 'page/faktor_add.php';
			break;
		case 'faktor_data':
			include 'page/faktor_data.php';
			break;
		case 'barang_edit':
			include 'page/barang_edit.php';
			break;
			case 'siswa_add':
			include 'page/siswa_add.php';
			break;
			case 'siswa_data':
			include 'page/siswa_data.php';
			break;
			case 'penjualan_edit':
			include 'page/penjualan_edit.php';
			break;case 'evaluasi_add':
			include 'page/evaluasi_add.php';
			break;
		default:
			echo"Halaman Tidak Ditemukan";
			break;
	}
}
?>
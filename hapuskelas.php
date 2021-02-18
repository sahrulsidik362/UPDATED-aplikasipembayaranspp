<?php 
session_start();
include 'koneksi.php';
if (isset($_SESSION['login'])){
	$hapus  = $konek -> query("DELETE FROM walikelas WHERE id_kelas ='$_GET[kls]' ");
	if($hapus){
		echo "
		<script>
		alert('data berhasil dihapus');
		document.location.href = 'datakelas.php';
		</script>
		";
	}else {
		echo "
		<script>
		alert('data gagal dihapus data digunakan ditabel lain');
		document.location.href = 'datakelas.php';
		</script>
		";

	}

}else {
	echo "
	<script>
		alert('anda tidak punya akses dihalaman ini');
		document.location.href = 'login.php';
		</script>
	";
}

 ?>
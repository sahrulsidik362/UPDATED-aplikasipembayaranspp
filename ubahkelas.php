<?php
include 'koneksi.php';
$data = $konek -> query("SELECT * FROM walikelas WHERE id_kelas ='$_GET[kls]'");
include 'header.php';
?>

<div class="container">
	<div class="page-header">
<h2 >EDIT DATA KELAS</h2>
</div>
<form action="" method="post">
<table class="table">
	<?php
	while ($dta =mysqli_fetch_assoc($data) ) :
	?>
	<tr>
		<td>Nama Kelas</td>
		<td>
			<input class="form-control" type="hidden" name="id_kelas" value="<?= $dta['id_kelas'] ?>">
			<input class="form-control" type="text" name="kelas" value="<?= $dta['kelas'] ?>" size = "30">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<button class="btn btn-success" type="submit" name="ubah">UPDATE</button>
		</td>
	</tr>
</table>
</form>
<?php endwhile; ?>
</body>
</html>
<?php
 if ( isset($_POST['ubah']) ) {
 	$id   = $_POST['id_kelas']; 
 	$kelas = $_POST['kelas'];

 	$ubah = $konek -> query("UPDATE walikelas SET kelas = '$kelas' WHERE id_kelas = ".$id);
 	if( $ubah ){
 		echo "
 		<script>
 		alert('data kelas berhasil diedit');
 		document.location.href = 'datakelas.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data kelas gagal diedit');
 		document.location.href = 'datakelas.php';
 		</script>
 		";
 	}
 }


?>
</div>
<?php  include 'footer.php';  ?>
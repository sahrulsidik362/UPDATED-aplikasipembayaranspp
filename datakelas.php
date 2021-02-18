<?php include "koneksi.php";
include "header.php"; ?>

<div class="container">
	<div class="page-header">
<h2> DATA WALIKELAS SMK NEGERI 3 SELUMA</h2>
	</div>
<a class="btn btn-primary " href="tambahkelas.php">TAMBAH DATA</a>
<table class="table table-bordered table-striped" >
<tr>
	<th>NO</th>
	<th>KELAS</th>
	<th>AKSI</th>
</tr>
<?php
	$data = $konek -> query("SELECT * from walikelas ORDER BY id_kelas");

	$i = 1;
	while($dta = mysqli_fetch_assoc($data)) :
	?>
	<tr>
		<td width="40" align="center"><?=$i;?></td>
		<td align="center"><?= $dta['kelas'] ?></td>
		<td width="160px">
			<a class="btn btn-warning btn-sm" href="ubahkelas.php?kls=<?= $dta['id_kelas'] ?>">EDIT</a> 
			<a class="btn btn-danger btn-sm" href="hapuskelas.php?kls=<?= $dta['id_kelas'] ?>"onclick="return confirm('apakah anda yakin menghapus data?')">HAPUS</a>
		</td>
	</tr>
	<?php $i++ ; ?>
<?php endwhile; ?>
</table>
</div>
<?php include 'footer.php';  ?>
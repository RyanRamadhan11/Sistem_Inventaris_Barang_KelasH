 <?php
 
 $kode_barang = $_GET['kode_barang'];
 $sql = $koneksi->query("delete from gudang where kode_barang = '$kode_barang'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=gudang";
	</script>
	
 <?php
 
 }
 
 ?>
 <?php
 
 $kode_supplier = $_GET['id'];
 $sql = $koneksi->query("delete from tb_supplier where kode_supplier = '$kode_supplier'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=supplier";
	</script>
	
 <?php
 
 }
 
 ?>
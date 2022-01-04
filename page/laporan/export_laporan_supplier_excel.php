 <?php

	$koneksi = new mysqli("localhost","root","","inventaris");

	
	
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_Supplier(".date('d-m-Y').").xls");

?>	

<h2>Laporan Data Supplier</h2>

<table border="1">
	<tr>
			<th>No</th>
											<th>Kode Supplier</th>
											<th>Nama Supplier</th>
											<th>Alamat</th>
											<th>Telepon</th>
											
	</tr>
	
	<?php
		$no = 1;
		$sql = $koneksi->query("select * from tb_supplier");
		while ($data = $sql->fetch_assoc()) {	
	
		
	
	
	
	?>
	
	<tr>
		   <td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_supplier'] ?></td>
											<td><?php echo $data['nama_supplier'] ?></td>
											<td><?php echo $data['alamat'] ?></td>
											<td><?php echo $data['telepon'] ?></td>
					
	</tr>
	
	
	
	
	<?php
	
	}
	
	?>
	
	</table>
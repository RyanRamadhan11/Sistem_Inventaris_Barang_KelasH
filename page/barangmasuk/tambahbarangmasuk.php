  
   <script>
 function sum() {
	 var stok = document.getElementById('stok').value;
	 var jumlahmasuk = document.getElementById('jumlahmasuk').value;
	 var result = parseInt(stok) + parseInt(jumlahmasuk);
	 if (!isNaN(result)) {
		 document.getElementById('jumlah').value = result;
	 }
 }
 </script>
  
  <?php 

$koneksi = new mysqli("localhost","root","","inventaris");
$no = mysqli_query($koneksi, "select id_transaksi from barang_masuk order by id_transaksi desc");
$idtran = mysqli_fetch_array($no);
$kode = $idtran['id_transaksi'];


$urut = substr($kode, 8, 3);
$tambah = (int) $urut + 1;
$bulan = date("m");
$tahun = date("y");

if(strlen($tambah) == 1){
	$format = "TRM-".$bulan.$tahun."00".$tambah;
} else if(strlen($tambah) == 2){
	$format = "TRM-".$bulan.$tahun."0".$tambah;
	
} else{
	$format = "TRM-".$bulan.$tahun.$tambah;

}

  
  
$tanggal_masuk = date("Y-m-d");


?>
  
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Barang Masuk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">
							
							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Id Transaksi</label>
                            <div class="form-group">
                               <div class="form-line">
                                 <input type="text" name="id_transaksi" class="form-control" id="id_transaksi" value="<?php echo $format; ?>" readonly /> 
							</div>
                            </div>
							
						
							
							<label for="">Tanggal Masuk</label>
                            <div class="form-group">
                               <div class="form-line">
                                 <input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk" value="<?php echo $tanggal_masuk; ?>" />
							</div>
                            </div>
							
					
							<label for="">Barang</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="barang" id="cmb_barang" class="form-control" />
								<option value="">-- Pilih Barang  --</option>
								<?php
								
								$sql = $koneksi -> query("select * from gudang order by kode_barang");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[kode_barang].$data[nama_barang]'>$data[kode_barang] | $data[nama_barang]</option>";
								}
								?>
								
								</select>
                                     
									 
							</div>
                            </div>
							
							<div class="tampung"></div>
					
							<label for="">Jumlah</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="jumlahmasuk" id="jumlahmasuk" onkeyup="sum()" class="form-control" />
                                     
									 
							</div>
                            </div>
							
							<label for="jumlah">Total Stok</label>
                            <div class="form-group">
                               <div class="form-line">
                               <input readonly="readonly" name="jumlah" id="jumlah" type="number" class="form-control">
                                     
									 
							</div>
                            </div>
							
							<div class="tampung1"></div>
							
						
							
								<label for="">Supplier</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="pengirim" class="form-control" />
								<option value="">-- Pilih Supplier  --</option>
								<?php
								
								$sql = $koneksi -> query("select * from tb_supplier order by nama_supplier");
								while ($data=$sql->fetch_assoc()) {
								echo "<option value='$data[nama_supplier]'>$data[nama_supplier]</option>";
								}
								?>
								
								</select>
                                     
									 
							</div>
                            </div>
						
						
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
								$id_transaksi= $_POST['id_transaksi'];
								$tanggal= $_POST['tanggal_masuk'];

								$barang= $_POST['barang'];
								$pecah_barang = explode(".", $barang);
								$kode_barang = $pecah_barang[0];
								$nama_barang = $pecah_barang[1];
								
								
								
								$jumlah= $_POST['jumlahmasuk'];

								
								$pengirim= $_POST['pengirim'];
								$pecah_nama = explode($nama_supplier);
								$nama_supplier = $pecah_nama[0];
								
								$satuan = $_POST['satuan'];
								
								
								
							
								
								$sql = $koneksi->query("insert into barang_masuk (id_transaksi, tanggal, kode_barang, nama_barang, jumlah, satuan, pengirim) values('$id_transaksi','$tanggal','$kode_barang','$nama_barang','$jumlah','$satuan','$pengirim')");
								
								


									
									if ($sql) {
									?>
									<script type="text/javascript">
										alert("Simpan Data Berhasil");
										window.location.href="?page=barangmasuk";
										
										</script>
										<?php
								}
							}
							
							
							?>
										
								
										
										
								
										
								
								
								
							
									
							
								
								
								
								
								

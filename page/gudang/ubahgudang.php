

<?php
 $kode_barang = $_GET['kode_barang'];
 $sql2 = $koneksi->query("select * from gudang where kode_barang = '$kode_barang'");
 $tampil = $sql2->fetch_assoc();
 
 $level = $tampil['level'];

 
 
 
 ?>
 
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ubah User</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">

							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Kode Barang</label>
                            <div class="form-group">
                               <div class="form-line">
                                  <input type="text" name="kode_barang" class="form-control" id="kode_barang" value="<?php echo $tampil['kode_barang']; ?>" readonly />	 
							</div>
                            </div>
							
								
							<label for="">Nama Barang</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="nama_barang" value="<?php echo $tampil['nama_barang']; ?>" class="form-control" /> 	 
							</div>
                            </div>
				
							
							
						<label for="">Jenis Barang</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="jenis_barang" value="<?php echo $tampil['jenis_barang'];?>" class="form-control" />
								
								<?php
								
								$sql = $koneksi -> query("select * from jenis_barang order by id");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[id].$data[jenis_barang]'>$data[jenis_barang]</option>";
								}
								?>
								</select>
                                     
									 
							</div>
                            </div>
							
							
                          
                                     
			
							<label for="">Satuan Barang</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="satuan" value="<?php echo $tampil['satuan'];?>" class="form-control" />
								
								<?php
								
								$sql = $koneksi -> query("select * from satuan order by id");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[id].$data[satuan]'>$data[satuan]</option>";
								}
								?>
								</select>
                                     
									 
							</div>
                            </div>
							
						
							
						
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
								if (isset($_POST['simpan'])) {
		
								$kode_barang= $_POST['kode_barang'];
								$nama_barang= $_POST['nama_barang'];
								
								
								$jenis_barang= $_POST['jenis_barang'];
								$pecah_jenis = explode(".", $jenis_barang);
							
								$id = $pecah_jenis[0];
								$jenis_barang = $pecah_jenis[1];
								
							
								$satuan= $_POST['satuan'];
								$pecah_satuan = explode(".", $satuan);
							
								$id = $pecah_satuan[0];
								$satuan = $pecah_satuan[1];
								

								$sql = $koneksi->query("update gudang set kode_barang='$kode_barang', nama_barang='$nama_barang', jenis_barang='$jenis_barang', satuan='$satuan' where kode_barang='$kode_barang'"); 
								
								if ($sql2) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=gudang";
										</script>
										
										<?php
								}
							}
							?>
										
										
										
										
								
								
								
								
								

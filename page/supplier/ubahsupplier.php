

<?php
 $kode_supplier = $_GET['kode_supplier'];
 $sql2 = $koneksi->query("select * from tb_supplier where kode_supplier = '$kode_supplier'");
 $tampil = $sql2->fetch_assoc();
 

 
 
 
 ?>
 
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ubah Supplier</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">

							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Kode Supplier</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="kode_supplier" value="<?php echo $tampil['kode_supplier']; ?>" class="form-control" />
	 
							</div>
                            </div>
							
							<label for="">Nama Supplier</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="nama_supplier" value="<?php echo $tampil['nama_supplier']; ?>" class="form-control" />
	 
							</div>
                            </div>
							
							<label for="">Alamat</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>" class="form-control" />
	 
							</div>
                            </div>
							
							<label for="">Telepon</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="number" name="telepon" value="<?php echo $tampil['telepon']; ?>" class="form-control" />
	 
							</div>
                            </div>
							
						
							
							
						
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
								
								$kode_supplier= $_POST['kode_supplier'];
								$nama_supplier= $_POST['nama_supplier'];
								$alamat= $_POST['alamat'];
								$telepon= $_POST['telepon'];
								
								
								$sql = $koneksi->query("update tb_supplier set kode_supplier='$kode_supplier', nama_supplier='$nama_supplier', alamat='$alamat', telepon='$telepon' where kode_supplier='$kode_supplier'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=supplier";
										</script>
										
										<?php
								}
							
								}
							
							
								
							?>
										
										
										
								
								
								
								
								

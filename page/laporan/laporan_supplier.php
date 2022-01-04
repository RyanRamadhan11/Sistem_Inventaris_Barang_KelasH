




 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Supplier</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                        <tr>
											<th>No</th>
											<th>Kode Supplier</th>
											<th>Nama Supplier</th>
											<th>Alamat</th>
											<th>Telepon</th>
										
                                         
                                        </tr>
										</thead>
										
               
                  <tbody>
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
									<?php }?>

										   </tbody>
                                </table>
								
								<a href="page/laporan/export_laporan_supplier_excel.php"  class="btn btn-info" style="margin-top:8 px"><i class="fa fa-print"></i> Print Excel</a>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>













	 <div class="container-fluid"> 

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Toko Suplier</h6>
            </div>
            <div class="dataTables" >
            
            <a href="index.php?script=toko&action=add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-3 ml-3">
              <span class="icon text-white-50">
                <i class="fa fa-plus"></i>
              </span>
              <span class="text" title="tambah data">Tambah Data</span>
            </a>

             <br />
            <div class="card-body">

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="text-align: center;">Kode Toko</th>
                      <th style="text-align: center;">Nama Toko</th>
                      <th style="text-align: center;">Alamat</th> 
                      <th style="text-align: center;">Action</th>   
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $query = mysqli_query($query,"SELECT * FROM m_toko ORDER BY id DESC");
                      while ($row = mysqli_fetch_array($query)) {
                 echo "
                      <tr>
                        <td style='text-align:center;'>$row[kd_toko]</td>
                        <td style='text-align:center;'>$row[nm_toko]</td>
                        <td style='text-align:center;'>$row[alamat]</td>
                        <td style='text-align: center;'><a class='d-none d-sm-inline-block btn btn-sm btn-info shadow-sm' href=\"index.php?script=toko&action=edit&id=$row[id]\" >
                            <span class='icon text-white-50' title='Edit Data'>
                              <i class='fa fa-edit' ></i>
                            </span>
                            </a>
                      <a href=\"index.php?script=toko&action=delete&id=$row[id]\" class='d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm'>
                            <span class='icon text-white-50' title='Hapus Data'>
                              <i class='fa fa-minus'></i>
                            </span>
                          </a>
                      </td>
                      </tr>";
                       } ?> 
		              		</tbody>
		              	</table>
	              </div>
	          </div>
	      </div>
	  </div>
	</div>

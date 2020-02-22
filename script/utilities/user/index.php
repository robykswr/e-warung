<div class="container-fluid"> 

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <div class="dataTables" >
            
            <a href="index.php?script=user&action=add" class="btn btn-primary btn btn-icon-split mt-3 ml-3">
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
                      <th style="text-align: center;">Username</th>
                      <th style="text-align: center;">Nama</th>
                      <th style="text-align: center;">Tanggal lahir</th>
                      <th style="text-align: center;">Foto</th> 
                      <th style="text-align: center;">Action</th>   
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $query = mysqli_query($query,"SELECT * FROM user ORDER BY id DESC");
                      while ($row = mysqli_fetch_array($query)) {
                 echo "
                      <tr>
                        <td style='text-align:center;'>$row[username]</td>
                        <td style='text-align:center;'>$row[nama]</td>
                        <td style='text-align:center;'>$row[tgl_lahir]</td>
                        <td style='text-align:center;'><image src='image/$row[image]' style='width:25px'></td>
                        <td style='text-align: center;'><a class='btn btn-info btn btn-icon-split mt-3' href=\"index.php?script=costumer&action=edit&id=$row[id]\" >
                            <span class='icon text-white-50'>
                              <i class='fa fa-edit'></i>
                            </span>
                           
                            </a>
                      <a href=\"index.php?script=costumer&action=delete&id=$row[id]\" class='btn btn-danger btn btn-icon-split mt-3'>
                            <span class='icon text-white-50'>
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
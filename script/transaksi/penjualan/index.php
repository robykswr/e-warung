	<?php

	require_once "include/controller/transaksi.class.php";

	?>
	 <div class="container-fluid"> 

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
            </div>
            <div class="dataTables" >
            
            <a href="index.php?script=penjualan&action=add" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-3 ml-4">
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
                    <th style="text-align: center;max-width: 150px">Tanggal</th>
                      <th style="text-align: center;  width: 50px">Nama </th>
                      <th style="text-align: center;">Nama Barang</th>
                      <th style="text-align: center; ">Jam</th>
                      <th style="text-align: center; width: 20px">Qty</th>
                      <th style="text-align: center; ">Harga</th>
                      <th style="text-align: center;">Total</th> 
                      <th style="text-align: center;">Action</th>   
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $query = mysqli_query($query,"SELECT a.*,b.nama FROM t_pembelian a LEFT JOIN m_costumer b ON a.kd_nama=b.kd_nama ORDER BY id DESC");
                      while ($row = mysqli_fetch_array($query)) {

                      	$kd_nama	   = $row['nama'];
                      	$kode_barang = $row['nm_barang'];
                      	$tanggal	   = $row['tanggal'];
                     	  $jam 		     = substr($row['jam'],11,18);
                      	$qty		     = $row['qty'];
                      	$harga		   = $row ['harga'];
                      	$total		   = rupiah($qty * $harga);

                 echo "
                      <tr>
                      	<td>$tanggal</td>
                        <td>$kd_nama</td>
                        <td>$kode_barang</td>
                        <td>$jam</td>
                        <td style='text-align:center'>$qty</td>
                        <td>Rp.$harga</td>
                        <td>Rp.$total</td>
                        <td style='text-align: center;'><a class=' d-sm-inline-block btn btn-sm btn-info shadow-sm' href=\"index.php?script=penjulan&action=edit&id=$row[id]\" >
                              <span class='icon text-white-50' title='Edit Data'>
                                <i class='fa fa-edit'></i>
                              </span>
                              </a>
                        <a href=\"index.php?script=penjualan&action=delete&id=$row[id]\" class=' d-sm-inline-block btn btn-sm btn-danger shadow-sm'>
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

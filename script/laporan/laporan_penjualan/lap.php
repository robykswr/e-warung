<?php
include "include/conn.php";

$nama = $_POST['name'];
$bln1 = $_POST['bln1'];
$bln2 = $_POST['bln2']; 


function rupiah($angka){
  
  $hasil_rupiah =  number_format($angka,3,'.','.');
  return $hasil_rupiah;
 
}


?>
<div class="container-fluid"> 

          <!-- DataTales Example -->
           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
            </div>
            <div class="dataTables" >
         
            <div class="card-body">

              <div class="table-responsive">
                <table class="table table-bordered table-striped"  width="100%" cellspacing="0">
                  <thead>
                    <tr>
                  <th style="text-align: center;max-width: 100px">Tanggal</th>
                      <th style="text-align: center;  width: 150px">Nama </th>
                      <th style="text-align: center;">Nama Barang</th>
                      <th style="text-align: center; ">Jam</th>
                      <th style="text-align: center; width: 20px">Qty</th>
                      <th style="text-align: center; ">Harga</th>
                      <th style="text-align: center;">Total</th> 
                     
                  </thead>
                  <tbody>
                     <?php
                      $no = 1;
                      $q = "SELECT a.*,b.nama FROM  t_pembelian a 
                            LEFT JOIN m_costumer b ON a.kd_nama = b.kd_nama
                            WHERE (a.tanggal BETWEEN  '$_POST[bln1]' AND '$_POST[bln2]') AND '$_POST[name]'";

                      $rs = mysqli_query($query,$q);
                       while ($row = mysqli_fetch_array($rs)) {
                        $kd_nama     = $row['nama'];
                        $kode_barang = $row['nm_barang'];
                        $tanggal     = $row['tanggal'];
                        $jam         = substr($row['jam'],11,18);
                        $qty         = $row['qty'];
                        $harga       = $row ['harga'];
                        $hasil       = $qty * $harga;
                        $satukan     = $hasil;
                        $grandtotal  = $satukan;
                        
          
                     ?>
                     <tr>
                        <td><?=$tanggal?></td>
                        <td><?=$kd_nama?></td>
                        <td><?=$kode_barang?></td>
                        <td><?=$jam?></td>
                        <td style='text-align:center'><?=$qty?></td>
                        <td><?=$harga?></td>
                        <td><?=rupiah($hasil)?></td>
                      </tr>
                      <?php $no++; } ?>
                      <tr>
                        <td></td>
                        <td>GrandTotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?=rupiah($grandtotal)?></td>
                      </tr>

                    
		              		</tbody>
		              	</table>
	              </div>
	          </div>
	      </div>
	  </div>
	</div>

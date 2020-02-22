<?php

require "include/controller/transaksi.class.php";

if(isset($_POST['submit'])){

	if (insert($_POST) > 0) {
		echo "<script>alert( 'berhasil')
	 		  location.href = 'index.php?script=penjualan'</script>";
	}else{
		echo "<script>location.href= 'index.php?script=penjualan'</script>";
	}

}

?>

	
	<div class="panel-body">
			<div class="container">
				<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Add Form Penjualan</h6>
                </div>
				<div class="card-body">
					
					<div class="row">
            <div class="col-md-6 my-3">
              <form class="form" role="form" action="" method="POST" autocomplete="off">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label form-control-label">Tanggal :</label>
                    <div class="col-md-9">
                      <input class="form-control" name="tanggal" type="text" size="40" value="<?php echo date('Y-m-d')?>" required   />
                   </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 col-form-label form-control-label"> Nama :</label>
                    <div class="col-md-9">
                      <select name="kd_nama" class="form-control">
                        <option value=""> -- Pilih Nama Costumer -- </option>
                          <?php

                          $q = mysqli_query($query,"SELECT * FROM m_costumer");
                          while ($row = mysqli_fetch_array($q)) {
                               echo "<option value='$row[kd_nama]'>$row[nama]</option>";
                           }

                          ?>
                      </select>
                    </div>
                  </div>
                 <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label"> nama Barang :</label>
                   <div class="col-lg-9">
                    <input class="form-control" type="text" name="nm_barang" placeholder=""  />
                  </div>
                 </div>
                               
                 <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"> Quantity :</label>
                      <div class="col-lg-9">
                        <input class="form-control" type="number" name="qty" placeholder=""  />
                      </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label"> Harga :</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="textarea" id="rupiah" name="harga" placeholder="" />
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Keterangan :</label>
                    <div class="col-lg-9">
                      <textarea class="form-control" name="keterangan" rows="6"></textarea>
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                <a href="index.php?script=pembelian" class="btn btn-success">Back</a>
            </form>
        </div>
      </div>
	</div>
</div>
</div>
</div>
	<script type="text/javascript">
		
		var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, ' ');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? ' ' + rupiah : '');
		}
	</script>
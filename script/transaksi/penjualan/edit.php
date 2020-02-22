<?php

require "include/controller/transaksi.class.php";

if(isset($_POST['submit'])){

	if (update($_POST) > 0) {
		echo "<script>alert( 'berhasil diupdate')
	 		  location.href = 'index.php?script=pembelian'</script>";
	}else{
		echo "<script>location.href= 'index.php?script=pembelian'</script>";
	}

}

?>
	
	<div class="panel-body">
			<div class="container">
				<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Add Form Pembelian</h6>
                </div>
				<div class="card-body">
						<?php $edit = query($_GET['id']); foreach ($edit as $value) {?>
              
					<div class="row">
                        <div class="col-md-6 my-3">
                           <form class="form" role="form" action="" method="POST" autocomplete="off">
                            <input type="hidden" name="id" value="<?=$value['id']?>">
                                <div class="form-group row">
                                  <label class="col-md-3 col-form-label form-control-label"> Nama :</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" name="kd_nama" value="<?=$value['kd_nama']?>"  />
                                    </div>
                               </div>
                               <div class="form-group row">
                                 <label class="col-lg-3 col-form-label form-control-label"> nama Barang :</label>
                                    <div class="col-lg-9">
                                       <input class="form-control" type="text" name="nm_barang" value="<?=$value['nm_barang']?>"  />
                                    </div>
                                </div>
                               	<div class="form-group row">
                                 <label class="col-sm-4 col-form-label form-control-label">Tanggal Pembelian :</label>
                                   <div class="col-sm-8">
                                        <input class="form-control" name="tanggal" type="date" size="40" value="<?=$value['tanggal']?>"   />
                                    </div>
                                </div>
                                <div class="form-group row">
                                 <label class="col-lg-3 col-form-label form-control-label"> Quantity :</label>
                                   <div class="col-lg-9">
                                        <input class="form-control" type="number" name="qty" value="<?=$value['qty']?>"  />
                                    </div>
                                </div>

                                <div class="form-group row">
                                 <label class="col-lg-3 col-form-label form-control-label"> Harga :</label>
                                   <div class="col-lg-9">
                                        <input class="form-control" type="text" name="harga" value="<?=$value['harga']?>" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                 <label class="col-lg-3 col-form-label form-control-label"> Keterangan :</label>
                                   <div class="col-lg-9">
                                       <textarea class="form-control" name="keterangan" rows="6"><?=$value['keterangan']?></textarea>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                               	<a href="index.php?script=pembelian" class="btn btn-success">Back</a>
                           </form>
                       </div>
                    </div>
                  <?php } ?>
				</div>
			</div>
		</div>
	</div>
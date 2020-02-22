<?php

require "include/controller/toko.class.php";

if(isset($_POST['submit'])){

	if (update($_POST) > 0) {
		echo "<script>location.href = 'index.php?script=toko'</script>";
	}else{
		echo "<script>location.href= 'index.php?script=toko&action=add";
	}

}

?>
	
	<div class="panel-body">
			<div class="container">
				<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Form Toko</h6>
                </div>
				<div class="card-body">
						<?php $edit = edit($_GET['id']); foreach ($edit as $value) {?>
						
						<form method="POST" action="">
						<div class="col col-md-9 ml-4">
							<input type="hidden" name="id" value="<?=$value['id']?>">
							<div class="form-group">
								<label>Kode Toko</label>
								<input type="text" class="form-control" name="kd_toko" size="5" value="<?=$value['kd_toko']?>" required>
							</div>
						</div>

						<div class="col col-md-9 ml-4">
							<div class="form-group">
								<label>Nama Toko</label>
								<input type="text" class="form-control" name="nm_toko" size="5" value="<?=$value['nm_toko']?>" required>
							</div>
						</div>

						<div class="col-md-9 ml-4">
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" size="5" value="<?=$value['alamat']?>">
							</div>
						</div>

						  <div class="ml-4">
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
							<a href="index.php?script=toko" class="btn btn-success">back</a>
						</div>
						</form>
					<?php } ?>
				</div>
			</div>
	</div>
</div>
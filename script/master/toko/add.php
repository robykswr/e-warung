<?php

require "include/controller/toko.class.php";

if(isset($_POST['submit'])){

	if (tambah($_POST) > 0) {
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
                  <h6 class="m-0 font-weight-bold text-primary">Add Form Toko</h6>
                </div>
				<div class="card-body">
						
						<form method="POST" action="">
						<div class="col col-md-9 ml-4">
							<div class="form-group">
								<label>Kode Toko</label>
								<input type="text" class="form-control" name="kd_toko" size="5" required>
							</div>
						</div>

						<div class="col col-md-9 ml-4">
							<div class="form-group">
								<label>Nama Toko</label>
								<input type="text" class="form-control" name="nm_toko" size="5" required>
							</div>
						</div>

						<div class="col-md-9 ml-4">
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" size="5">
							</div>
						</div>

						  <div class="ml-4">
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
							<a href="index.php?script=toko" class="btn btn-success">back</a>
						</div>
						</form>
				</div>
			</div>
	</div>
</div>
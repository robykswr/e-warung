<?php

require "include/controller/costumer.class.php";

if(isset($_POST['submit'])){

	if (tambah($_POST) > 0) {
		echo "<script>location.href = 'index.php?script=costumer'</script>";
	}else{
		echo "<script>location.href= 'index.php?script=costumer&action=add";
	}

}

?>
	
	<div class="panel-body">
			<div class="container">
				<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Add Form Costumer</h6>
                </div>
				<div class="card-body">
						
						<form method="POST" action="">
						<div class="col col-md-9 ml-4">
							<div class="form-group">
								<label>Kode Nama</label>
								<input type="text" class="form-control" name="kd_nama" size="5" required>
							</div>
						</div>
						<div class="col col-md-9 ml-4">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" name="nama" size="5" required>
							</div>
						</div>

						<div class="col-md-9 ml-4">
							<div class="form-group">
								<label>No Telpon</label>
								<input type="text" class="form-control" name="no_tlp" size="5" required>
							</div>
						</div>

						  <div class="ml-4">
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
							<a href="index.php?script=costumer" class="btn btn-success">back</a>
						</div>
						</form>
				</div>
			</div>
	</div>
</div>
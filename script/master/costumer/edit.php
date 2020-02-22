<?php

require "include/controller/costumer.class.php";



if(isset($_POST['submit'])){

	if (update($_POST) > 0) {
		echo "<script>
		alert('berhasil di update')
		location.href = 'index.php?script=costumer'</script>";
	}else{
		echo "<script>location.href = 'index.php?script=costumer'</script>";
	}

}
	
	
?>
	
	<div class="panel-body">
			<div class="container">
				<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Form Costumer</h6>
                </div>
				<div class="card-body">
						<?php $edit = query($_GET['id']); foreach ($edit as $key => $v) {?>
							
						<form method="POST" action="">
							<input type="hidden" name="id" value="<?=$v['id']?>">
						<div class="col col-md-9 ml-4">
							<div class="form-group">
								<label>Kode Nama</label>
								<input type="text" class="form-control" name="kd_nama" size="5" value="<?=$v['kd_nama']?>"  required>
							</div>
						</div>
						<div class="col col-md-9 ml-4">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" name="nama" size="5" value="<?=$v['nama']?>"  required>
							</div>
						</div>

						<div class="col-md-9 ml-4">
							<div class="form-group">
								<label>No Telpon</label>
								<input type="text" class="form-control" name="no_tlp" size="5" value="<?=$v['no_tlp']?>"  required>
							</div>
						</div>

						  <div class="ml-4">
							<input type="submit" name="submit" class="btn btn-primary" value="submit">
							<a href="index.php?script=costumer" class="btn btn-success">back</a>
						</div>
						</form>
					<?php } ?>
				</div>
			</div>
	</div>
</div>

<?php

require "include/controller/user.class.php";

if(isset($_POST['submit'])){

	if (tambah($_POST) > 0) {
		echo "<script>location.href = 'index.php?script=user'</script>";
	}else{
		echo "<script>location.href= 'index.php?script=user&action=add";
	}

}

?>
	
	<div class="panel-body">
	   <div class="container">
		  <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Form User</h6>
            </div>
		<div class="card-body">		
		 <div class="row">
             <div class="col-md-6 my-3">
                <form class="form" role="form" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label form-control-label">UserName :</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" name="username" placeholder="masukan username"  />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"> nama :</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="nama" placeholder="masukan nama"  />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Password :</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="password" type="password" size="40" placeholder="masukan password"  />
                        </div>
                     </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"> Re_Password :</label>
                        <div class="col-lg-9">
                            <input class="form-control" name="re_password" type="password" value="" placeholder="masukkan replay password"  />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label>Tanggal Lahir :</label>
                        <div class="col-lg-9">
                            <input type="date" class="form-control" name="tgl_lahir" placeholder="masukan tanggal lahir">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label>Upload Gambar</label>
                        <div class="col-lg-9">
                            <input type="file" name="gambar" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    <a href="index.php?script=user" class="btn btn-success">Back</a>
                </form>
            </div>
        </div>
	</div>
</div>
</div>
</div>
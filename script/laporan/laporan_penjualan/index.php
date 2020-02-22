<?php

  include "include/conn.php";

?>
<div class="panel-body">
			<div class="container">
				<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Laporan Penjualan</h6>
                </div>
				<div class="card-body">
					
					<div class="row">
            <div class="col-md-6 my-3">
              <form class="form" role="form" action="index.php?script=rekpenjualan&action=lap" method="POST" autocomplete="off">

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label form-control-label">Nama :</label>
                    <div class="col-md-9">
                      <select name="nama" class="form-control">
                        <option value="">-- Pilih Nama --</option>
                        <?php

                          $qu = mysqli_query($query,"SELECT kd_nama, nama FROM m_costumer ORDER BY kd_nama ASC");
                          while ($row = mysqli_fetch_array($qu)) {
                            echo "<option value='$row[kd_nama]'>$row[nama]</option>";
                          }

                        ?>
                      </select>
                   </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label form-control-label">Tanggal Awal :</label>
                    <div class="col-md-9">
                      <input class="form-control" name="bln1" type="date" size="40"  required   />
                   </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label form-control-label">Tanggal Akhir :</label>
                    <div class="col-md-9">
                      <input class="form-control" name="bln2" type="date" size="40"  required   />
                   </div>
                </div>

                <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
      </div>
	</div>
</div>
</div>
</div>
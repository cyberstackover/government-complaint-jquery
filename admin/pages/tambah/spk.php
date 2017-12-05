<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-info">
	        <div class="box-header">
	          <h3 class="box-title">Tambah SPK</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	          	<input type="hidden" name="type" value="spk">
	           <input type="hidden" name="cmd" value="tambah">
	            <!-- text input -->
	            <div class="form-group">
	              <label>ID Member</label>
	              <input type="text" name="memberid" class="form-control" placeholder="ID Member" />
	            </div>
				<div id="locationField" class="form-group">
					<label>Country From</label>
			      	<input name='citybuy' class="form-control" id="searchTextField" type="text" size="50" placeholder="E.g. London, England" autocomplete="on" >
			    </div>
			    
			    <div id="locationField" class="form-group">
					<label>Traveling Destination</label>
			      	 <input name="citytrans" class="form-control" id="searchTextField1" type="text" size="50" placeholder="E.g. Jakarta, Indonesia" autocomplete="on" >
			    </div>

	            <div class="form-group">
	              <label>Tanggal</label>
	              <!-- <input type="text" class="form-control tanggal" name="tanggal" placeholder="Tanggal" value="<?php echo date('Y-m-d'); ?>"/> -->
	              <input type="text" class="form-control tanggal" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo date('Y-m-d'); ?>"/>
	              <!-- <input name="tanggal" type="text" class="form-control tanggal" id="tanggal" value="<?php echo $data['expected_back_date']; ?>"/></p> -->
	            </div>

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
	            <a href="index.php?page=spk" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>
<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-success">
	        <div class="box-header">
	          <h3 class="box-title">Tambah Pembelian</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	          	<input type="hidden" name="type" value="data_pembelian">
	            <input type="hidden" name="cmd" value="tambah">
	            <!-- text input -->
	            <div class="form-group">
	              <label>ID Member</label>
	              <input type="text" name="memberid" class="form-control" placeholder="Nama Item" />
	            </div>
	            <!-- text input -->
	            <div class="form-group">
	              <label>Item</label>
	              <input type="text" name="item" class="form-control" placeholder="Nama Item" />
	            </div>
	            <!-- textarea -->
	            <div class="form-group">
	              <label>Item Description</label>
	              <textarea class="form-control" name="itemDesc" rows="3" placeholder="Deskripsi Item"></textarea>
	            </div>
	            <div class="form-group">
	              <label>Item Category</label>
	              	<select class="form-control" id="category" name="category" required>
						<!-- <option value="" disabled selected>Select from list</option> -->
						<option value="nice">nice</option>
					</select>
	            </div>
	            <div class="form-group">
	              <label>Item Pic</label>
	              <!-- <input type="text" class="form-control" name="kontak" placeholder="Kontak" value="<?php echo $data['kontak']; ?>"/> -->
	              <center><input name="ImageFile"  class="btn btn-primary ladda-button" data-style="zoom-in"  type="file" required></center>
	            </div>

	            <div class="form-group">
	              	<label>URL</label>
		    		<input class="form-control" id="url" name="url" placeholder="(Optional)" >
	            </div>

	            <div class="form-group">
	              <label>Price</label>
	              <input type="text" name="price" class="form-control" placeholder="Price" />
	            </div>

	             <div class="form-group">
	              <label>Status</label>
	              <select name="status" class="form-control">
	              	<option value="open">Open</option>
					<option value="close">Close</option>
	              </select>
	            </div>

	            <div id="locationField" class="form-group">
					<label>City to buy from</label>
			      	<input name='citybuy' class="form-control" id="searchTextField" type="text" size="50" placeholder="E.g. London, England" autocomplete="on" >
			    </div>
			    
			    <div id="locationField" class="form-group">
					<label>Transaction Location </label>
			      	 <input name="citytrans" class="form-control" id="searchTextField1" type="text" size="50" placeholder="E.g. Jakarta, Indonesia" autocomplete="on" >
			    </div>


	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
	            <a href="index.php?page=data_pembelian" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>
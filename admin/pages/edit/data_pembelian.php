<?php require_once('config/main.php');
$query=mysql_query("select * from request where reqID='$_GET[id]'");
$data = mysql_fetch_array($query);

 ?>
<section>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap,libraries=geometry,places&sensor=false"></script>
<script type="text/javascript">
   function initialize() {
      var input = document.getElementById('searchTextField');
      var input1 = document.getElementById('searchTextField1');
      var autocomplete = new google.maps.places.Autocomplete(input);
      var autocomplete = new google.maps.places.Autocomplete(input1);
   }
   google.maps.event.addDomListener(window, 'load', initialize);

   /*  jQuery ready function. Specify a function to execute when the DOM is fully loaded.  */
$(document).ready(
  
  /* This is the function that will get executed after the DOM is fully loaded */
  function () {
    $( "#datepicker" ).datepicker({
      changeMonth: true,//this option for allowing user to select month
      changeYear: true //this option for allowing user to select from year range
    });

    $('.tanggal').datepicker({
            dateFormat: 'yy-mm-dd'
        });
  }

);

</script>

	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-success">
	        <div class="box-header">
	          <h3 class="box-title">Edit Pembelian</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	            <!-- text input -->
	            <input type="hidden" name="id" value="<?php echo $data['reqID']; ?>">
	            <input type="hidden" name="type" value="data_pembelian">
	            <input type="hidden" name="cmd" value="edit">
	            <div class="form-group">
	              <label>Item</label>
	              <input type="text" name="item" class="form-control" placeholder="Nama" value="<?php echo $data['item']; ?>"/>
	            </div>
	            <!-- textarea -->
	            <div class="form-group">
	              <label>Item Description</label>
	              <textarea class="form-control" name="itemDesc" rows="3" placeholder="Alamat"><?php echo $data['itemDesc']; ?></textarea>
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
	              <center><input name="ImageFile"  class="btn btn-primary ladda-button" data-style="zoom-in"  type="file" required value="userfiles/profile-pic/<?php echo $data['itemPic']; ?>"></center>
	            </div>

	            <div class="form-group">
	              	<label>URL</label>
		    		<input class="form-control" id="url" name="url" placeholder="(Optional)" value="<?php echo $data['itemUrl']; ?>">
	            </div>

	            <div class="form-group">
	              <label>Price</label>
	              <input type="text" name="price" class="form-control" placeholder="Serial Number" value="<?php echo $data['pay']; ?>"/>
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
			      	<input name='citybuy' class="form-control" id="searchTextField" type="text" size="50" placeholder="E.g. London, England" autocomplete="on" value="<?php echo $data['cityRequest']; echo ', '; echo $data['countryRequest']; ?>">
			    </div>
			    
			    <div id="locationField" class="form-group">
					<label>Transaction Location </label>
			      	 <input name="citytrans" class="form-control" id="searchTextField1" type="text" size="50" placeholder="E.g. Jakarta, Indonesia" autocomplete="on" value="<?php echo $data['cityDeal']; echo ', '; echo $data['countryDeal']; ?>">
			    </div>

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-backward"></i> Kembalikan Data</button>
	            <a href="index.php?page=data_pembelian" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>
<?php require_once('config/main.php');
$query=mysql_query("select * from trip where tripID=".$_GET['id']);
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
	      <div class="box box-info">
	        <div class="box-header">
	          <h3 class="box-title">Edit SPK</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	          <input type="hidden" name="id" value="<?php echo $data['tripID']; ?>">
	          <input type="hidden" name="type" value="spk">
	          <input type="hidden" name="cmd" value="edit">
	            <!-- text input -->
	            <!-- <div class="form-group">
	              <label>ID Member</label>
	              <input type="text" name="item" class="form-control" placeholder="Nama" value="<?php echo $data['tripID']; ?>"/>
	            </div> -->
				<div id="locationField" class="form-group">
					<label>Country From</label>
			      	<input name='citybuy' class="form-control" id="searchTextField" type="text" size="50" placeholder="E.g. London, England" autocomplete="on" value="<?php echo $data['back_to_city']; echo ', '; echo $data['back_to_country']; ?>">
			    </div>
			    
			    <div id="locationField" class="form-group">
					<label>Traveling Destination</label>
			      	 <input name="citytrans" class="form-control" id="searchTextField1" type="text" size="50" placeholder="E.g. Jakarta, Indonesia" autocomplete="on" value="<?php echo $data['travel_to_city']; echo ', '; echo $data['travel_to_country']; ?>">
			    </div>

	            <div class="form-group">
	              <label>Tanggal</label>
	              <!-- <input type="text" class="form-control tanggal" name="tanggal" placeholder="Tanggal" value="<?php echo $data['tgl']; ?>"/> -->
	              <input name="tanggal" type="text" class="form-control tanggal" id="tanggal" value="<?php echo $data['expected_back_date']; ?>"/></p>
	            </div>

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-backward"></i> Kembalikan Data</button>
	            <a href="index.php?page=spk" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>
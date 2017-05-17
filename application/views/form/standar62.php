<h3>Penggunaan Dana</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Jenis Penggunaan</th>
			<th colspan="3">Persentase Dana</th>
			<th rowspan="2">Aksi</th>
		</tr>
		<tr>
			<th>Th-2</th>
			<th>Th-1</th>
			<th>Th-0</th>
		</tr>
	</thead>
	<tbody id="datatable621"></tbody>
	<tbody>
		<tr>
			<th colspan="2">Jumlah Dana Operasional (Rp)</th>
			<td><input type="number" min="0" value="0" class="form-control" id="st6f21c1">  </td>
			<td><input type="number" min="0" value="0" class="form-control" id="st6f21c2">  </td>
			<td><input type="number" min="0" value="0" class="form-control" id="st6f21c3">  </td>
			<td><button id="btnsimpan621" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> </button> </td>
		</tr>
	</tbody>
	<tbody id="datatable622"></tbody>
	<tbody>
		<tr>
			<th colspan="2">Jumlah Dana untuk Investasi (Rp)</th>
			<td><input type="number" min="0" value="0" class="form-control" id="st6f22c1">  </td>
			<td><input type="number" min="0" value="0" class="form-control" id="st6f22c2">  </td>
			<td><input type="number" min="0" value="0" class="form-control" id="st6f22c3">  </td>
			<td><button id="btnsimpan622" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> </button> </td>
		</tr>
	</tbody>

	<tbody>
		<tr>
			<td>
				<select class="form-control" id="st6f2c1" data-toggle="tooltip" data-placement="bottom" title="Tipe Penggunan Dana">
					<option value="1">Operasional</option>
					<option value="2">Investasi</option>
				</select>
			</td>
			<td><input type="text" value="-" class="form-control" id="st6f2c2"></td>
			<td><input type="number" min="0" value="0" class="form-control" id="st6f2c3">  </td>
			<td><input type="number" min="0" value="0" class="form-control" id="st6f2c4">  </td>
			<td><input type="number" min="0" value="0" class="form-control" id="st6f2c5">  </td>
			<td><button id="btntambahdata62" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> </button> </td>
		</tr>
	</tbody>

</table>
<script type="text/javascript">

$('#btntambahdata62').click(function(){
		var st6f2c1 = $('#st6f2c1').val();
		var st6f2c2 = $('#st6f2c2').val();
		var st6f2c3 = $('#st6f2c3').val();
		var st6f2c4 = $('#st6f2c4').val();
		var st6f2c5 = $('#st6f2c5').val();

		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/simpandata62');?>",
          data: {idsubmission: <?php echo $idsubmission;?>, field1: st6f2c1, field2: st6f2c2, field3: st6f2c3, field4: st6f2c4, field5: st6f2c5 }
        })
          .done(function( msg ) {
            $('#datatable62').html(msg);
            loaddata62();
        }).error(function(err){
        	console.log(err);
        });
});



// load datatable621
function loaddatatable621(){
	$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/loadtable621');?>",
          data: {idsubmission: <?php echo $idsubmission;?>}
        })
          .done(function( msg ) {
            $('#datatable621').html(msg);
            
        }).error(function(err){
        	console.log(err);
        });
}
// load datatable622
function loaddatatable622(){
		$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/loadtable622');?>",
          data: {idsubmission: <?php echo $idsubmission;?>}
        })
          .done(function( msg ) {
            $('#datatable622').html(msg);
            
        }).error(function(err){
        	console.log(err);
        });
}

function hapusdata62(idrec){
	$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/hapusdata62');?>",
          data: {idrecord:idrec}
        })
          .done(function( msg ) {
          loaddata62();
            
        }).error(function(err){
        	console.log(err);
        });
}

$('#btnsimpan621').click(function(){
	var st6f21c1 = $('#st6f21c1').val();
	var st6f21c2 = $('#st6f21c2').val();
	var st6f21c3 = $('#st6f21c3').val();
	$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/simpantotal621');?>",
          data: {idsubmission: <?php echo $idsubmission;?>, field1: st6f21c1, field2: st6f21c2, field3: st6f21c3 }
        })
          .done(function( msg ) {
          loaddata62();
            
        }).error(function(err){
        	console.log(err);
        });
});
$('#btnsimpan622').click(function(){
	var st6f21c1 = $('#st6f22c1').val();
	var st6f21c2 = $('#st6f22c2').val();
	var st6f21c3 = $('#st6f22c3').val();
	$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/simpantotal622');?>",
          data: {idsubmission: <?php echo $idsubmission;?>, field1: st6f21c1, field2: st6f21c2, field3: st6f21c3 }
        })
          .done(function( msg ) {
          loaddata62();
            
        }).error(function(err){
        	console.log(err);
        });
});

function loadjumlah621(){
	$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/gettotal621');?>",
          data: {idsubmission: <?php echo $idsubmission;?>}
        })
          .done(function( msg ) {
          
           	$('#st6f21c1').val(msg[0].jumlahdanath2);
			$('#st6f21c2').val(msg[0].jumlahdanath1);
			$('#st6f21c3').val(msg[0].jumlahdanath0);
           
            
        }).error(function(err){
        	console.log(err);
        });
}


function loadjumlah622(){
	$.ajax({
          method: "POST",
          url: "<?php echo base_url('ajaxcontrol1/gettotal622');?>",
          data: {idsubmission: <?php echo $idsubmission;?>}
        })
          .done(function( msg ) {
          
           	$('#st6f22c1').val(msg[0].jumlahdanath2);
			$('#st6f22c2').val(msg[0].jumlahdanath1);
			$('#st6f22c3').val(msg[0].jumlahdanath0);
           
            
        }).error(function(err){
        	console.log(err);
        });
}
$(document).ready(function(){
	loaddata62();
});
function loaddata62(){
	loaddatatable621();
	loaddatatable622();
	loadjumlah621();
	loadjumlah622();

}
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

</script>


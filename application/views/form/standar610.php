<h3>Sistem Informasi, beri tanda (&#10004;) pada lolom yang sesuai dengan aksesibilitas tiap jenis data</h3>
<table class="table table-bordered">
	<thead>
		<tr>
					<th rowspan="2">No</th>
					<th rowspan="2">Jenis Data</th>
					<th colspan="4">Sistem Pengelolaan Data</th>
					<th rowspan="2">Aksi</th>
		</tr>
		<tr>
					<th style="max-width:120px">Secara Manual</th>
					<th style="max-width:120px">Dengan Komputer Tanpa Jaringan</th>
					<th style="max-width:120px">Dengan Komputer Jaringan Lokal (LAN)</th>
					<th style="max-width:120px">Dengan Komputer Jaringan Luas (WAN)</th>
		</tr>
	</thead>
	<tbody id="tabledata610"></tbody>
	<tbody>
		<tr>
			<td></td>
			<td><input type="textbox" class="form-control" id="st6f10c1"></td>
			<td><input type="checkbox" class="checkbox form-control" id="st6f10c2"> </td>
			<td><input type="checkbox" class="checkbox form-control" id="st6f10c3"> </td>
			<td><input type="checkbox" class="checkbox form-control" id="st6f10c4"> </td>
			<td><input type="checkbox" class="checkbox form-control" id="st6f10c5"> </td>
			<td><button id="btnsimpan610" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button></td>
		</tr>
	</tbody>

</table>

<script type="text/javascript">
	$(document).ready(function(){
		loadtable610();
	});
	$('#btnsimpan610').click(function(){
		
				
				var st6f10c1 = $('#st6f10c1').val();
				var st6f10c2 = '';
				var st6f10c3 = '';
				var st6f10c4 = '';
				var st6f10c5 = '';
				
					
					if($('#st6f10c2').is(':checked')) {
						st6f10c2 = '1';
					}else{
						st6f10c2='0';
					}
					if($('#st6f10c3').is(':checked')) {
						st6f10c3 = '1';
					}else{
						st6f10c3='0';
					}
					if($('#st6f10c4').is(':checked')) {
						st6f10c4 = '1';
					}else{
						st6f10c4='0';
					}
					if($('#st6f10c5').is(':checked')) {
						st6f10c5 = '1';
					}else{
						st6f10c5='0';
					}


		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/simpandata610');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>, field1: st6f10c1, field2: st6f10c2, field3: st6f10c3, field4: st6f10c4, field5: st6f10c5}
	    })
	      .done(function( msg ) {
	        loadtable610();
	        $('#st6f10c1').val('');

	        $('#st6f10c2').attr('checked',false);
			$('#st6f10c3').attr('checked',false);
			$('#st6f10c4').attr('checked',false);
			$('#st6f10c5').attr('checked',false);
	    }).error(function(err){
	    	console.log(err);
	    });

	});

	function loadtable610(){
		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/getdata610');?>",
	      data: {idsubmission: <?php echo $idsubmission;?>}
	    })
	      .done(function( msg ) {
	        $('#tabledata610').html(msg);
	    }).error(function(err){
	    	console.log(err);
	    });
	}

	function hapusdata610(idrec){
		$.ajax({
	      method: "POST",
	      url: "<?php echo base_url('ajaxcontrol1/hapusdata610');?>",
	      data: {idrecord: idrec}
	    })
	      .done(function( msg ) {
	        loadtable610();
	    }).error(function(err){
	    	console.log(err);
	    });
	}

</script>